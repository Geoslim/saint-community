<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribePending($request->user_email);
            return redirect()->back()->with('success', 'Thank you for subscribing to our Community. Please visit your mailbox to confirm your subscription!');
        }
        return redirect()->back()->with('error', 'Email already subscribed on our community');   

    }
}
