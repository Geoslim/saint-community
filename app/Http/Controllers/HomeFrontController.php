<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderHeading;
use App\SliderImage;
use App\HomeBody;
use App\HomeBodyCoverImage;
use App\HomeMediaHeading;
use App\HomeMediaImage;
use App\HomeOnlineVideo;
use App\HomeTelecast;
use App\HomeOnlineRadio;
class HomeFrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.saintcommunity-home-scc.index');
    }
    public function homeSliderIndex()
    {
        $slider_images = SliderImage::get();
        $slider_heading = SliderHeading::find(1);
        return view('admin.saintcommunity-home-scc.slider-index')
        ->with('slider_heading', $slider_heading)
        ->with('slider_images', $slider_images);
        
    }
    public function homeSliderHeadingUpdate(Request $request, $id)
    {
        
        $this->validate($request, [
            'slide_heading' => 'required',
            'slide_subtitle' => 'required'
        ]);
        $slider_heading = SliderHeading::find($id);
        $slider_heading->slide_heading = $request->input('slide_heading');
        $slider_heading->slide_subtitle = $request->input('slide_subtitle');
        $slider_heading->save();

        return redirect()->action('HomeFrontController@homeSliderIndex')->with('success', 'Headings Updated Successfully');
    
    }
    public function homeSliderCreate()
    {
        return view('admin.saintcommunity-home-scc.slider-create');
    }
    public function homeSliderStore(Request $request)
    {
        $this->validate($request, [
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,min_height=700'
            
        ]);
        if($request->hasFile('slider_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('slider_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
            
        }

        $slide_image = new SliderImage;
        $slide_image->slider_image = $fileNameToStore;
        $slide_image->save();


        return redirect()->action('HomeFrontController@homeSliderIndex')->with('success', 'New Slider Image Added Successfully');
    
    }
    public function homeSliderEdit($id) 
    {
        $slider_images = SliderImage::find($id);
        return view('admin.saintcommunity-home-scc.slider-edit')->with('slider_images', $slider_images);
    }
    public function homeSliderUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,min_height=700'
            
        ]);
        if($request->hasFile('slider_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('slider_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('slider_image')->storeAs('public/slider_images',$fileNameToStore);
            
        }

        $slide_image = SliderImage::find($id);
        $slide_image->slider_image = $fileNameToStore;
        $slide_image->save();


        return redirect()->action('HomeFrontController@homeSliderIndex')->with('success', 'Slider Image Changed Successfully');
    
    }

    public function homeBody()
    {
        $home_body = HomeBody::find(1);
        $home_body_cover_image = homeBodyCoverImage::find(1);
        return view('admin.saintcommunity-home-scc.body-index')
        ->with('home_body', $home_body)
        ->with('home_body_cover_image', $home_body_cover_image);
    }

    public function homeBodyUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'about_btn_title' => 'required',
            'contact_btn_title' => 'required'
        ]);
        $home_body = HomeBody::find($id);
        $home_body->title = $request->input('title');
        $home_body->body = $request->input('body');
        $home_body->about_btn_title = $request->input('about_btn_title');
        $home_body->contact_btn_title = $request->input('contact_btn_title');
        
        $home_body->save();

        return redirect()->action('HomeFrontController@homeBody')->with('success', 'Home Body section updated successfully');
    
    }
    public function homeBodyCoverUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=400,min_height=400'
            
        ]);
        if($request->hasFile('cover_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('cover_image')->storeAs('public/home_cover_images',$fileNameToStore);
        }
        $home_body_cover_image = homeBodyCoverImage::find($id);
        $home_body_cover_image->cover_image = $fileNameToStore;
        $home_body_cover_image->save();

        return redirect()->action('HomeFrontController@homeBody')->with('success', 'Home Body Image Changed Successfully');
    
    }
    public function homeMediaIndex()
    {
        $media_heading = HomeMediaHeading::find(1);
        $media_images = homeMediaImage::get();
        return view('admin.saintcommunity-home-scc.media-index')
        ->with('media_heading', $media_heading)
        ->with('media_images', $media_images);
    }

    public function homeMediaHeadingUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'media_heading' => 'required',
            'media_url_title' => 'required',
            'media_url' => 'required'
        ]);
        $media_heading = HomeMediaHeading::find($id);
        $media_heading->media_heading = $request->input('media_heading');
        $media_heading->media_url_title = $request->input('media_url_title');
        $media_heading->media_url = $request->input('media_url');
        $media_heading->save();

        return redirect()->action('HomeFrontController@homeMediaIndex')->with('success', 'Headings Updated Successfully');
    
    }
    public function homeMediaCreate()
    {
        return view('admin.saintcommunity-home-scc.media-create');
    }
    public function homeMediaStore(Request $request)
    {
        $this->validate($request, [
            'media_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,min_height=400'
            
        ]);
        if($request->hasFile('media_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('media_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('media_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('media_image')->storeAs('public/home_media_images',$fileNameToStore);
        }

        $media_images = new HomeMediaImage;
        $media_images->media_image = $fileNameToStore;
        $media_images->save();

        return redirect()->action('HomeFrontController@homeMediaIndex')->with('success', 'New Media Image Added Successfully');
    
    }
    public function homeMediaEdit($id) 
    {
        $media_images = HomeMediaImage::find($id);
        return view('admin.saintcommunity-home-scc.media-edit')->with('media_images', $media_images);
    }
    public function homeMediaUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'media_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=1000,min_height=400'
            
        ]);
        if($request->hasFile('media_image')){
            // get filename with the extension
            $filenameWithExt = $request->file('media_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('media_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('media_image')->storeAs('public/home_media_images',$fileNameToStore);
            
        }

        $media_images = HomeMediaImage::find($id);
        $media_images->media_image = $fileNameToStore;
        $media_images->save();

        return redirect()->action('HomeFrontController@homeMediaIndex')->with('success', 'Media Image Updated Successfully');
    
    }

    public function homeBroadcast()
    {
        $home_online_video = HomeOnlineVideo::find(1);
        $home_telecast_url = HomeTelecast::find(1);
        $home_online_radio = HomeOnlineRadio::find(1);
        return view('admin.saintcommunity-home-scc.broadcast-index')
        ->with('home_online_video', $home_online_video)
        ->with('home_telecast_url', $home_telecast_url)
        ->with('home_online_radio', $home_online_radio);
    }

    public function homeBroadcastTelecastUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'video_url' => 'required'
            
        ]);
        
        $home_telecast_url = HomeTelecast::find($id);
        $home_telecast_url->title = $request->input('title');
        $home_telecast_url->video_url =  $request->input('video_url');
        $home_telecast_url->save();

        return redirect()->action('HomeFrontController@homeBroadcast')->with('success', 'Telecast Video Updated Successfully');
    
    }

    public function homeBroadcastOnlineRadioUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'online_radio_url' => 'required'
            
        ]);
        

        $home_online_radio = HomeOnlineRadio::find($id);
        $home_online_radio->title = $request->input('title');
        $home_online_radio->online_radio_url =  $request->input('online_radio_url');
        $home_online_radio->save();

        return redirect()->action('HomeFrontController@homeBroadcast')->with('success', 'Online Radio Updated Successfully');
    
    }

    public function homeBroadcastVideoUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'online_video' => 'required'
                        
        ]);
        if($request->hasFile('online_video')){
            // get filename with the extension
            $filenameWithExt = $request->file('online_video')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET just EXT
            $extension = $request->file('online_video')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('online_video')->storeAs('public/home_online_videos',$fileNameToStore);
            
        }
       
        $home_online_video = HomeOnlineVideo::find($id);
        $home_online_video->title = $request->input('title');
        $home_online_video->online_video =  $fileNameToStore;
        $home_online_video->save();

        return redirect()->action('HomeFrontController@homeBroadcast')->with('success', 'Online Video Updated Successfully');
    
    }
}
