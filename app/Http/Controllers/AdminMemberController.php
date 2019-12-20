<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AdminMember;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.saintcommunity-add-admin.index');
    }

    public function adminMemberStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required'
        ]);
        $admin_member = new AdminMember;
        $admin_member->name = $request->input('name');
        $admin_member->email = $request->input('email');
        $admin_member->password = Hash::make($request->input('password'));
        $admin_member->role = $request->input('role');
        
        $admin_member->save();

        return redirect()->action('AdminMemberController@adminMemberIndex')->with('success', 'New Admin Member Added successfully');
    }

    //manage admin members

    public function adminMemberIndex()
    {
        $admin_members = AdminMember::get();
        return view('admin.saintcommunity-manage-admin.index')
        ->with('admin_members', $admin_members);
    }

    public function adminMemberEdit($id)
    {
        $admin_members = AdminMember::find($id);
        return view('admin.saintcommunity-manage-admin.edit')
        ->with('admin_members', $admin_members);
    }


}
