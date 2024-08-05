<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NotificationSeenController extends Controller
{
    use AuthorizesRequests;
    
    public function __invoke(DatabaseNotification $notification)
    {
        $this->authorize('update', $notification);
        $notification->markAsRead();

        return redirect()->back()
            ->with('success', 'Notification marked as read');
    }
}
