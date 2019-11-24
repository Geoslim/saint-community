<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function adminIndex(){

        return view('admin.saintcommunity-index.admin-homepage');
    }

    public function adminHomepageIndex(){

        return view('admin.saintcommunity-index-homepage.homepage');
    }
    
}
