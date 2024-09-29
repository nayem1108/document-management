<?php

namespace Nayem1108\DocumentManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|file|mimes:pdf,doc,docx|max:2048', // Adjust file types and size as needed
        ];
    }
}
