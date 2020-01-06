<?php

namespace App\Http\Controllers;

use App\AdminMember;
use App\Mail\SendAdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminMailController extends Controller
{
    public function index()
    {
        return view('admin.saintcommunity-admin-mail.index');
    }

    public function sendMail()
    {
        $data = request()->validate( [
            // 'your_name' => 'required|string|max:225',
            // 'your_email' => 'required|email',
            'body' => 'required',
        ]);

 
        $admin_members = AdminMember::get();
        foreach ($admin_members as $admin_member) {
       
        Mail::to($admin_member)->send(new SendAdminMail($data));
    } 
        

     return redirect()->action('AdminMailController@index')->with('success', 'Mail Sent to Admin Members Successfully');
   

    }
}
