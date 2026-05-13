<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AppointmentController extends Controller
{
    function storeAppointment(Request $request)
    {
        // Customer exists == Phone
        $customer = null;
        $password = null;
        if (Customer::where('phone', $request->phone)->exists()) {
            $customer = Customer::where('phone', $request->phone)->first();
        } else {

            $response  = $this->createCustomer($request);
            $password = $response['password'];
            $customer = $response['customer'];
            $msg = "Dear $request->name, thank you for booking an appointment at HMS System.
                Your account details:
                Login ID: $request->phone
                Password: $password
Please log in to manage your appointments.";
            sendSms($request->phone, $msg);
        }

        // Appointment Make / Store
        if ($customer) {
            Appointment::create([
                'department_id' => $request->department,
                'customer_id' => $customer->id,
                "doctor_id" => $request->doctor,
                'date' => Carbon::parse($request->date)->format('Y-m-d'),
                'time' => $request->time,
                'comment' => $request->comment,
            ]);
        }
    }


    private function createCustomer($request)
    {
        $password = "HMS_" . rand(00000, 99999);
        $customer =  Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($password)
        ]);

        return [
            'customer' => $customer,
            'password' => $password,
        ];
    }

    // private function sendSms($phone)
    // {
    //     if (!$phone) return;

    //     $response = Http::post(env('SMS_BASE_URL') . '/SendSMS', [
    //         'ApiKey' => env('SMS_API_KEY'),
    //         'ClientId' => env('SMS_CLIENT_ID'),
    //         'SenderId' => env('SMS_SENDER_ID'),
    //         'Message' => 'Hello from Laravel',
    //         "Is_Unicode" => true,
    //         'MobileNumbers' => "88".$phone,
    //     ]);

    //     return $response->json();
    // }



    public function calendarEvents()
    {
        $appointments = Appointment::all();

        $events = [];

        foreach ($appointments as $app) {

            $events[] = [
                'id' => $app->id,
                'title' => $app->comment ?? 'Appointment',
                'start' => $app->date . 'T' . $app->time,
            ];
        }

        return response()->json($events);
    }

    public function storeFromCalendar(Request $request)
    {
        $appointment = Appointment::create([
            'doctor_id' => $request->doctor_id,
            'customer_id' => $request->customer_id ?? 1,
            'date' => $request->date,
            'time' => $request->time,
            'comment' => $request->comment,
            'status' => 0
        ]);

        return response()->json($appointment);
    }

    public function updateFromCalendar(Request $request, $id)
    {
        $app = Appointment::find($id);

        $app->update([
            'date' => $request->date,
            'time' => $request->time,
            'comment' => $request->comment
        ]);

        return response()->json($app);
    }

    public function deleteFromCalendar($id)
    {
        Appointment::find($id)->delete();

        return response()->json(['success' => true]);
    }
}

