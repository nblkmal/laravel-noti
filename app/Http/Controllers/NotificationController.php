<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TrainingNotification;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationController extends Controller
{
    use SoftDeletes;

    public function readMessage($notification)
    {
        // dd($notification);
        // $notification = TrainingNotification::where('id', $notification)->softDeletes();
        $notification->delete();

        return redirect()->route('home');
    }
}
