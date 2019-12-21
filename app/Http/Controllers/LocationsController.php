<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocationSccBanner;
use App\Location;
use Illuminate\Support\Facades\Gate;
class LocationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.saintcommunity-locations-scc.index');
    }

    public function bodyIndex()
    {
        $locations = Location::get();
        return view('admin.saintcommunity-locations-scc.body-index')
        ->with('locations', $locations);
    }
    public function locationCreate()
    {
        if (Gate::allows('admin-only', auth()->user())) { 
        return view('admin.saintcommunity-locations-scc.location-create');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
   
    }
    public function locationStore(Request $request)
    {
        if (Gate::allows('admin-only', auth()->user())) { 
        $this->validate($request, [
            'location_title' => 'required',
            'address' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required'
        ]);
        $locations = new Location;
        $locations->location_title = $request->input('location_title');
        $locations->address = $request->input('address');
        $locations->contact_name = $request->input('contact_name');
        $locations->contact_phone = $request->input('contact_phone');
        $locations->save();
    
        return redirect()->action('LocationsController@bodyIndex')->with('success', 'Location Added Successfully');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
   
    }
    public function locationEdit($id)
    {
        $location = Location::find(1);
        return view('admin.saintcommunity-locations-scc.location-edit')
        ->with('location', $location);
    }
    
    public function locationUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'location_title' => 'required',
            'address' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required'
        ]);
        $locations = Location::find($id);
        $locations->location_title = $request->input('location_title');
        $locations->address = $request->input('address');
        $locations->contact_name = $request->input('contact_name');
        $locations->contact_phone = $request->input('contact_phone');
        $locations->save();
    
        return redirect()->action('LocationsController@bodyIndex')->with('success', 'Location Updated Successfully');
    
    }

    public function bannerIndex()
    {
        $locationscc_banner = LocationSccBanner::find(1);
        return view('admin.saintcommunity-locations-scc.banner-index')
        ->with('locationscc_banner', $locationscc_banner);
    }

    public function locationBannerUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1200,min_height=800'
            
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
            $path = $request->file('banner_image')->storeAs('public/locationBanner_image',$fileNameToStore);
            
        }
        $locationscc_banner = LocationSccBanner::find(1);
        $locationscc_banner->banner_image = $fileNameToStore;
        $locationscc_banner->save();

        return redirect()->action('LocationsController@bannerIndex')->with('success', 'Location Banner updated successfully');
   
    }
    public function destroy($id)
    {
        if (Gate::allows('admin-only', auth()->user())) { 
            $location = Location::find($id);
            $location->delete();
            return redirect()->action('LocationsController@adminMemberIndex')->with('success', 'Location Deleted Successfully');
        }
        return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
        
    }

}
