<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use App\Services\NotificationService;



class MessageController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        // Get unique conversation partners
        $conversations = Message::where('sender_id', $userId)
            ->orWhere('receiver_id', $userId)
            ->with(['sender', 'receiver'])
            ->latest()
            ->get()
            ->groupBy(function($message) use ($userId) {
                return $message->sender_id == $userId ? $message->receiver_id : $message->sender_id;
            });

        return view('candidate.messages', compact('conversations'));
    }

    public function show($userId)
    {
        $authId = auth()->id();

        // Get all messages between the two users
        $messages = Message::where(function ($q) use ($authId, $userId) {
            $q->where('sender_id', $authId)->where('receiver_id', $userId);
        })->orWhere(function ($q) use ($authId, $userId) {
            $q->where('sender_id', $userId)->where('receiver_id', $authId);
        })->orderBy('created_at')->get();

            // Get inbox conversations
        $inboxUsers = Message::where('sender_id', $authId)
        ->orWhere('receiver_id', $authId)
        ->orderBy('created_at', 'desc')
        ->get()
        ->groupBy(function ($msg) use ($authId) {
            return $msg->sender_id === $authId ? $msg->receiver_id : $msg->sender_id;
        });


        return view('candidate.messages', compact('messages', 'userId','inboxUsers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return back();
    }
}
