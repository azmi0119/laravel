<?php

namespace App\Http\Controllers\DatabaseNotification;

use App\Notifications\DatabaseNotification\DemoNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Notification;
use App\User;
use Auth;


class DemoNotificationController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendNotification(Request $request)
    { 

        $user = User::where('id',$request->auth_id)->get();
        // $user = User::find(1);
        // $user = User::all();            // you can also use all method but it is not good because it take more time

        $details = [
            'greeting' => 'Hi Abdullah',
            'body' => 'This is my first notification from HackTheStuff',
            'thanks' => 'Thank you for using HackTheStuff article!',
            'actionText' => 'View and Exploar more aboute notification',
            'actionURL' => url('https://laravel.com/docs/7.x/notifications#creating-notifications'),
            'order_id' => 'Order-20190000151'
        ];



        // Notification::send($user, new DemoNotification($details));

        // You can also send a notification the following way.
        if($user != null) {
            // $user->notify(new DemoNotification($details));
            Notification::send($user, new DemoNotification($details));
            return back()->with('success','DB Notification has been send successfully!');
        } else {
            return back()->with('error','Something is wrong !');
        }
   
    }
}
