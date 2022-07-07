<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Services\FCMService;

class NotificationController extends Controller
{
    public function index()
    {
        return view('pushNotification');
    }


    public function sendNotification($id)
    {

        // get a user to get the fcm_token that already sent.               from mobile apps
        $user = Employee::findOrFail($id);
        FCMService::send(
            $user->fcm_token,
            [
                'title' => 'Welcome',
                'body' => 'Welcome',
            ]
        );

    }
}
