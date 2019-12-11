<?php

namespace App\Http\Controllers;
use App\AboutSccBanner;
use App\AboutSccBody;
use App\AboutSccCoverImage;
use Illuminate\Http\Request;

class AboutSccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutscc_body = AboutSccBody::find(1);
        $aboutscc_banner = AboutSccBanner::find(1);
        $aboutscc_cover = AboutSccCoverImage::find(1);
        return view('admin.saintcommunity-about-scc.index')
                        ->with('aboutscc_body', $aboutscc_body)
                        ->with('aboutscc_banner', $aboutscc_banner)
                        ->with('aboutscc_cover', $aboutscc_cover);
      
    }

   
    public function updateAboutBanner(Request $request, $id)
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
            $path = $request->file('banner_image')->storeAs('public/aboutBanner_image',$fileNameToStore);
            
        }
        $aboutscc_banner = AboutSccBanner::find(1);
        $aboutscc_banner->banner_image = $fileNameToStore;
        $aboutscc_banner->save();

        return redirect()->action('AboutSccController@index')->with('success', 'About Us Banner updated successfully');
    }

   
    public function updateAboutBody(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'about_btn_title' => 'required',
            'contact_btn_title' => 'required'
        ]);
        $aboutScc = AboutSccBody::find($id);
        $aboutScc->title = $request->input('title');
        $aboutScc->body = $request->input('body');
        $aboutScc->about_btn_title = $request->input('about_btn_title');
        $aboutScc->contact_btn_title = $request->input('contact_btn_title');
        
        $aboutScc->save();

        return redirect()->action('AboutSccController@index')->with('success', 'About Us Body section updated successfully');
    }

    public function updateAboutCoverImage(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1300,min_height=900'
            
        ]);
        if($request->hasFile('cover_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET NUST EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('cover_image')->storeAs('public/aboutCover_image',$fileNameToStore);
            
        }
 
        // $aboutscc_cover = AboutSccCoverImage::find(1);
        // $aboutscc_cover->cover_image = $request->input('cover_image');
        $aboutscc_cover = AboutSccCoverImage::find(1);
        $aboutscc_cover->cover_image = $fileNameToStore;
        $aboutscc_cover->save();

        return redirect()->action('AboutSccController@index')->with('success', 'About Us Cover Image updated successfully');
    }
}
