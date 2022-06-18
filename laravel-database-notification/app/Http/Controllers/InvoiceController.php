<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\User;
use App\Notifications\InvoiceNotification;


class InvoiceController extends Controller
{

    public function __construct() {
        return $this->middleware('auth');
    }

    public function sendMailNotification() {

        $user = User::find(2);

        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from HackTheStuff',
            'thanks' => 'Thank you for using HackTheStuff article!',
            'actionText' => 'View and Exploar more aboute notification',
            'actionURL' => url('https://laravel.com/docs/7.x/notifications#creating-notifications'),
            'order_id' => 'Order-20190000151'
        ];

        $user->notify(new InvoiceNotification($details));
        dd('Your notification send seuccessfully!');
    }
}
