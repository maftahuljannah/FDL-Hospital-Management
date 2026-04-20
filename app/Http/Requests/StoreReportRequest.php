<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Set to true to allow the request to proceed
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'report_name'       => 'required|string|max:255',
            'name'              => 'required|string|max:255', // Customer Name
            'phone'             => 'required|string|max:20',
            'delivery_date'     => 'required|date',
            'amount'            => 'required|numeric|min:0',
            'description'       => 'nullable|string',
            'doctor_ref'        => 'nullable|string|max:255',
            'report_documents'  => 'nullable|array',
            'report_documents.*' => 'nullable|file|mimes:pdf,jpg,png,docx|max:10048', // 2MB limit per file
            'is_paid'           => 'nullable|string', // Checkboxes send 'on' or null
        ];
    }
}
