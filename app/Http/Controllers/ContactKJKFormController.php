<?php

namespace App\Http\Controllers;

use App\Mail\ContactKJKFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactKJKFormController extends Controller
{
    public function index()
    {
    return view('admin.saintcommunity-contact-kjk.index');
    }

    public function sendMail()
    {
        
        
            $data = request()->validate( [
                // 'your_name' => 'required|string|max:225',
                // 'your_email' => 'required|email',
                'body' => 'required',
            ]); 
            // $fake_users = array('1@gmail.com','2@gmail.com');
            // foreach ($fake_users as $fake_user) {
            // } 
            Mail::to('iedomwande@yahoo.com')->send(new ContactKJKFormMail($data));
      
            // $contact_form = new ContactForm;
            // $contact_form->your_name = $request->input('your_name');
            // $contact_form->your_email = $request->input('your_email');
            // $contact_form->body = $request->input('body');
            // $contact_form->save();
    
         return redirect()->action('ContactKJKFormController@index')->with('success', 'Message Sent to KJK Successfully');
       
    }
}
