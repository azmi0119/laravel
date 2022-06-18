<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function SubscribProcess()
    {
        return view('payu-mony');
    }

    public function Response(Request $request)
    {
        dd('Payment Successfully done!');
    }

    public function SubscribeCancel()
    {
         dd('Payment Cancel!');
    }


}
