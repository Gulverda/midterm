<?php

// app/Http/Requests/CreateStudyGroupRequest.php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudyGroupRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'subject' => 'required|string',
            'schedule' => 'required|string',
        ];
    }
}
