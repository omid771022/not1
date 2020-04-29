<?php

namespace App\Http\Controllers;

use App\User;
use App\Notifications\email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class NotficationController extends Controller
{

    public function emailNotfication( Request $request)
    {
        $User = User::find(1);
        // return Notification::send(new email($User))->toMail($User->User);
        Notification::route('mail', 'not-a-user@example.com')
        ->notify(new email($User));

    }






    public function SmsNotification()
    {
        $sender = "10004346";
        $message = "ارسال پیامک ";
        $receptor = ("09377689399");
        $result = Kavenegar::Send($sender, $receptor, $message);

        return $result;
    }
}
