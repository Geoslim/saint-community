<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\MenuLogo;
class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $menu = Menu::find(1);
        $menu_logo = MenuLogo::find(1);
        return view('admin.saintcommunity-menu-scc.index')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu);
    }

    public function updateMenu(Request $request, $id) 
    {
        $this->validate($request, [
           'home' => 'required',
           'about_us' => 'required',
           'locations' => 'required',
           'media' => 'required',
           'partnership' => 'required',
           'events' => 'required',
           'contact' => 'required',

        ]);

        $menu = Menu::find(1);
        $menu->home = $request->input('home');
        $menu->about_us = $request->input('about_us');
        $menu->locations = $request->input('locations');
        $menu->media = $request->input('media');
        $menu->partnership = $request->input('partnership');
        $menu->events = $request->input('events');
        $menu->contact = $request->input('contact');
        
        $menu->save();

        return redirect()->action('MenuController@index')->with('success', 'Menu updated successfully');
    
    }

    public function updateMenuLogo(Request $request, $id) 
    {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=200,max_height=100'
        ]);

        if($request->hasFile('logo')){
            // get filename with the extension
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET NUST EXT
            $extension = $request->file('logo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('logo')->storeAs('public/menuLogo_image',$fileNameToStore);
            
        }

        $menu_logo = MenuLogo::find(1);
        $menu_logo->logo = $fileNameToStore;
        
        $menu_logo->save();

        return redirect()->action('MenuController@index')->with('success', 'Logo updated successfully');
    
    }
}
