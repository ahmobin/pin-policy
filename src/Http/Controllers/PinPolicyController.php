<?php

namespace AhMobin\PinPolicy\Http\Controllers;

use AhMobin\PinPolicy\Http\Requests\PinPolicyRequests;
use AhMobin\PinPolicy\Models\PinHistory;
use AhMobin\PinPolicy\Traits\PinOtp;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PinPolicyController extends Controller
{
    use PinOtp;

    public function setPin()
    {
        return view('pin-policy::set_pin');
    }


    public function storePin(PinPolicyRequests $policy): \Illuminate\Http\RedirectResponse
    {
//        User::where('id',auth()->user()->id)->update([
        User::where('id',1)->update([
            'pin' => Hash::make($policy->pin)
        ]);

        PinHistory::create([
            'user_id' => 1,
            'pin' => Hash::make($policy->pin)
        ]);

        return back()->with('success','Pin Set Success');
    }


}
