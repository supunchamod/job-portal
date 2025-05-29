<?php

namespace App\Services;

use App\Models\Notification;

class NotificationService
{
    public static function create($userId, $type, $message)
    {
        return Notification::create([
            'user_id' => $userId,
            'type' => $type,
            'message' => $message,
            'is_read' => false,
        ]);
    }
}
