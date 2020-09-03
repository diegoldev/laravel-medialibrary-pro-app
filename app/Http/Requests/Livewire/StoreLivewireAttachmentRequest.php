<?php

namespace App\Http\Requests\Livewire;

use Illuminate\Foundation\Http\FormRequest;

class StoreLivewireAttachmentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'media' => ['required', 'min:1']
        ];
    }
}
