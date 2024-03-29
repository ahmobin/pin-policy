<?php

namespace AhMobin\PinPolicy\Rules;

use AhMobin\PinPolicy\Traits\PinPolicyTrait;
use Illuminate\Contracts\Validation\Rule;

class IsPinHasPreviousHistory implements Rule
{
    use PinPolicyTrait;

    private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if ($this->isPinMatchesWithXPreviousPin($this->user, $value)) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return "Sorry! You Cannot Set Your PIN That Used Previously";
    }
}
