<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    //
    function message(Request $request) {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // Save message to database
        Message::create($validated);

        // Handle contact form submission
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
