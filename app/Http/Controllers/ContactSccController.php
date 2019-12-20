<?php

namespace App\Http\Controllers;
use App\ContactScc;
use App\ContactBanner;
use App\ContactGoogleMap;
use Illuminate\Http\Request;

class ContactSccController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $contact_banner = ContactBanner::find(1);
        $contactScc = ContactScc::find(1);
        $ContactGoogleMap = ContactGoogleMap::find(1);
        return view('admin.saintcommunity-contact-scc.index')
        ->with('contact_banner', $contact_banner)
        ->with('contactScc', $contactScc)
        ->with('ContactGoogleMap', $ContactGoogleMap);
    }

    public function updateContactBanner(Request $request, $id)
    {
        $this->validate($request, [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1300,min_height=900'
            
        ]);
        if($request->hasFile('banner_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('banner_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET NUST EXT
            $extension = $request->file('banner_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('banner_image')->storeAs('public/ContactBanner_image',$fileNameToStore);
            
        }
        $contact_banner = ContactBanner::find(1);
        $contact_banner->banner_image = $fileNameToStore;
        $contact_banner->save();

        return redirect()->action('ContactSccController@index')->with('success', 'Contact Us Banner updated successfully');
    }


    public function updateContactBody(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'location_btn_title' => 'required',
            'contact_btn_title' => 'required'
        ]);
        $contactScc = ContactScc::find(1);
        $contactScc->title = $request->input('title');
        $contactScc->body = $request->input('body');
        $contactScc->location_btn_title = $request->input('location_btn_title');
        $contactScc->contact_btn_title = $request->input('contact_btn_title');
        
        $contactScc->save();

        return redirect()->action('ContactSccController@index')->with('success', 'Contact Us Body section updated successfully');
    
    }

    public function updateGoogleMap(Request $request, $id) {
        $this->validate($request, [
            'google_map' => 'required'
        ]);
        $ContactGoogleMap = ContactGoogleMap::find(1);
        $ContactGoogleMap->google_map_link = $request->input('google_map');
       
        $ContactGoogleMap->save();

        return redirect()->action('ContactSccController@index')->with('success', 'Contact Us Google Map section updated successfully');
    
    }
}
