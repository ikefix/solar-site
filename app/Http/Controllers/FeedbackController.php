<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        // Validate incoming request
        $data = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'location' => 'required|string|max:255',
            'contact_method' => 'required|string',
            'details' => 'required|string',
        ]);

        // Send email
        Mail::send('emails.feedback', $data, function($message) use ($data) {
            $message->to('2022dexy@gmail.com')  // 👈 your email
                    ->subject('New Feedback from ' . $data['fullname']);
        });

        return back()->with('success', '✅ Thank you! Your feedback has been sent successfully.');
    }
}
