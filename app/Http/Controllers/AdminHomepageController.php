<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomepageController extends Controller
{
    //
    public function adminIndex(){

        return view('admin.saintcommunity-index.admin-homepage');
    }

    public function adminPagesIndex(){

        return view('admin.saintcommunity-index-adminpages.homepage');
    }
    
}
