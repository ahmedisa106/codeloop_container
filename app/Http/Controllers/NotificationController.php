<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Kutia\Larafirebase\Facades\Larafirebase;

class NotificationController extends Controller
{
    public function index()
    {
        return view('pushNotification');
    }


    public function updateToken(Request $request)
    {
        $employees = Employee::where('fcm_token', null)->first();

        try {
            $employees->update(['fcm_token' => $request->_token]);
            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            report($e);
            return response()->json([
                'success' => false
            ], 500);
        }
    }

    public function notification(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        try {
            $fcmTokens = Employee::whereNotNull('fcm_token')->pluck('fcm_token')->toArray();

            Larafirebase::withTitle($request->title)
                ->withBody($request->message)
                ->sendMessage($fcmTokens);


            return redirect()->back()->with('success', 'Notification Sent Successfully!!');

        } catch (\Exception $e) {
            report($e);
            return redirect()->back()->with('error', 'Something goes wrong while sending notification.');
        }

        // auth()->user()->notify(new SendPushNotification($title, $message, $fcmTokens));
    }
}
