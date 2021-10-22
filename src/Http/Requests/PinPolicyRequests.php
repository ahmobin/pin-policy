<?php

namespace AhMobin\PinPolicy\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use AhMobin\PinPolicy\Rules\IsPinConsecutive;
use AhMobin\PinPolicy\Rules\IsPinHasPreviousHistory;

class PinPolicyRequests extends FormRequest
{
    public function authorize(): bool
    {
        //return auth()->check();
        return true;
    }

    public function rules(): array
    {
        return [
            'pin' => ['digits:4', 'required', 'confirmed',
                new IsPinHasPreviousHistory(),
                new IsPinConsecutive()
            ]
        ];
    }
}
