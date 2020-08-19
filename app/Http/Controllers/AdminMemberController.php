<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AdminMember;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Gate;

class AdminMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Gate::allows('admin-only', auth()->user())) {  

        return view('admin.saintcommunity-add-admin.index');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    }

    public function adminMemberStore(Request $request)
    {
        if (Gate::allows('admin-only', auth()->user())) {
            
        $this->validate($request, [
            'name' => 'required|string|min:7|max:225',
            'email' => 'required|string|email|max:255|unique:users',
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
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    }

    //manage admin members

    public function adminMemberIndex()
    {
        if (Gate::allows('admin-only', auth()->user())) {  
        
        $admin_members = AdminMember::where('role', '>', 1)->get();
        return view('admin.saintcommunity-manage-admin.index')
        ->with('admin_members', $admin_members);
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    
    }

    public function adminMemberEdit($id)
    {
        if (Gate::allows('admin-only', auth()->user())) { 
        $admin_members = AdminMember::find($id);
        return view('admin.saintcommunity-manage-admin.edit')
        ->with('admin_members', $admin_members);
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    
    }

    public function adminMemberUpdate(Request $request, $id)
    {
        if (Gate::allows('admin-only', auth()->user())) {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|string|min:7|max:225',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|string|min:8|confirmed',
            
        ]);
        $admin_member = AdminMember::find($id);
        $admin_member->name = $request->input('name');
        $admin_member->email = $request->input('email');
        $admin_member->password = $request->input('password');
        $admin_member->role = $request->input('role');
        $admin_member->status = $request->input('status');

        $admin_member->save();

        return redirect()->action('AdminMemberController@adminMemberIndex')->with('success', 'Member Updated successfully');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    }

    public function destroy($id)
    {
        if (Gate::allows('admin-only', auth()->user())) { 
        $admin_member = AdminMember::find($id);
        $admin_member->delete();
        return redirect()->action('AdminMemberController@adminMemberIndex')->with('success', 'Member Deleted Successfully');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    
            }
}
