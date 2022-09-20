<?php

namespace App\Http\Controllers;
use App\Models\Email;
use App\Notifications\UserNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class NotificationController extends Controller
{
    //
    public function sendNotification(Request $request)
    // : \Illuminate\Http\JsonResponse
    {
        //do your logic if any

        //any additional data if you want to send in notification.

        // $data = [
        //     'title' => 'Notification Title',
        // ];

        // $subscribers = Email::pluck('email')->toArray();

        // Notification::route('mail', $subscribers) //Sending mail to subscribers
        // ->notify(new UserNotify()); //With new post we can pass $data in the UserNotify()

        // return response()->json([
        //     'success' => 'Mail Send Successfully'
        // ]);


        $subscribers=Email::all();
        Notification::route('mail', $subscribers)->notify(new UserNotify());

       return back();
    }
}
