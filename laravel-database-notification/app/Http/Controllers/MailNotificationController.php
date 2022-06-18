<?php

namespace App\Http\Controllers;

use App\Notifications\MailNotification;
use Illuminate\Http\Request;
use Notification;
use App\User;

class MailNotificationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function mailNotification(Request $request) {

        $user = User::find(2);

        $user->notify(new MailNotification());

        dd('Mail has been send successfully via mail');

    }
}
