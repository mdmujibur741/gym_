<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EmailNotificationController extends Controller
{
    public function send()
    {
         // $lead = Lead::find(1);
     // $lead->notify(new EmailNotification());
     //Notification::send($lead, new EmailNotification());

     $users = User::all();
   //  return $users;
      foreach($users as $user){
           Notification::send($user, new EmailNotification());
      }
    }
}
