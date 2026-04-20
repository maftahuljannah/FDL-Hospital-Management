<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportRequest;
use App\Models\Customer;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReportController extends Controller
{
    function index()
    {
        $reports = Report::orderBy('status', 'asc')->orderBy('delivery_date', 'asc')->get();
        return view('backend.admin.reports.index', compact('reports'));
    }

    function create()
    {
        return view('backend.admin.reports.create');
    }

    function edit($id)
    {

        $report = Report::with('customer:id,phone')->find($id);

        return view('backend.admin.reports.edit', compact('report'));
    }

    function store(StoreReportRequest $request, $id = null)
    {

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
            // sendSms($request->phone, $msg);
        }


        // Multi file upload
        $reports_docs = [];
        if (count($request->report_documents ?? []) > 0) {
            foreach ($request->report_documents as $doc) {
                $reports_docs[] = $doc->store('reports');
            }
        }


        Report::updateOrCreate([
            "id"  =>  $id,
        ], [
            "report_holder" => $request->name  ?? $customer->name,
            "customer_id" => $customer->id,
            "report_name" => $request->report_name,
            "description" => $request->description,
            "amount" => $request->amount,
            "delivery_date" => $request->delivery_date,
            "doctor_ref" => $request->doctor_ref,
            "report_documents" => count($request->report_documents ?? []) > 0 ? json_encode($reports_docs) : Report::find($id)->report_documents,
            "is_paid" => $request->is_paid ? true : false,
        ]);
        return to_route('admin.reports.index');
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
}
