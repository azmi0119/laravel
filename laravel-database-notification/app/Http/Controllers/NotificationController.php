<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Notification;
use App\Notifications\DemoNotification;

class NotificationController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function send(Request $request)
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from HackTheStuff',
            'thanks' => 'Thank you for using HackTheStuff article!',
            'actionText' => 'View and Exploar more aboute notification',
            'actionURL' => url('https://laravel.com/docs/7.x/notifications#creating-notifications'),
            'order_id' => 'Order-20190000151'
        ];

        Notification::send($user, new DemoNotification($details));

        // You can also send a notification the following way.

        // $user->notify(new MyFirstNotification($details));
   
        dd('Your notification send seuccessfully!');
    }
}
