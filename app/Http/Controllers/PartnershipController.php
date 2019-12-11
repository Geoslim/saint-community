<?php

namespace App\Http\Controllers;
use App\PartnershipBanner;
use App\PartnershipBody;
use App\PartnershipCoverImage;
use Illuminate\Http\Request; 

class PartnershipController extends Controller
{
    public function index() {
        $partnership_banner = PartnershipBanner::find(1);
        $partnership_body = PartnershipBody::find(1);
        $partnership_cover_image = PartnershipCoverImage::find(1);
        return view('admin.saintcommunity-partnership.index')
        ->with('partnership_banner', $partnership_banner)
        ->with('partnership_body', $partnership_body)
        ->with('partnership_cover_image', $partnership_cover_image );
    }

    public function updatePartnershipBanner(Request $request, $id)
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
            $path = $request->file('banner_image')->storeAs('public/partnershipBanner_image',$fileNameToStore);
            
        }
        $partnership_banner = PartnershipBanner::find(1);
        $partnership_banner->banner_image = $fileNameToStore;
        $partnership_banner->save();

        return redirect()->action('PartnershipController@index')->with('success', 'Partnership Banner updated successfully');
    }


    public function updatePartnershipBody(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'pay_btn_title' => 'required'
        ]);
        $partnership_body = PartnershipBody::find($id);
        $partnership_body->title = $request->input('title');
        $partnership_body->body = $request->input('body');
        $partnership_body->pay_btn_title = Purifier::clean($request->input('pay_btn_title'));
     
        
        $partnership_body->save();

        return redirect()->action('PartnershipController@index')->with('success', 'Partnership Body section updated successfully');
    }


    public function updatePartnershipCoverImage(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=800,min_height=1000'
            
        ]);
        if($request->hasFile('cover_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET JUST EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('cover_image')->storeAs('public/partnershipCover_image',$fileNameToStore);
            
        }
        $partnership_cover_image = PartnershipCoverImage::find(1);
        $partnership_cover_image->cover_image = $fileNameToStore;
        $partnership_cover_image->save();

        return redirect()->action('PartnershipController@index')->with('success', 'Partnership Cover Image updated successfully');
    }
}
