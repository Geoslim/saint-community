<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\MediaBanner;
use App\MediaCover;
use App\MediaPublishDetail;

class MediaController extends Controller
{
    public function index()
    {
        return view('admin.saintcommunity-media-scc.index');
    }

    public function mediaBody()
    {
        $media_body = Media::find(1);
        $media_banner = MediaBanner::find(1);
        $media_cover = mediaCover::find(1);
        return view('admin.saintcommunity-media-scc.media-body')
        ->with('media_body', $media_body)
        ->with('media_banner', $media_banner)
        ->with('media_cover', $media_cover);
    }

   

    public function updateMediaBanner(Request $request, $id)
    {
        $this->validate($request, [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=900,min_height=600'
            
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
            $path = $request->file('banner_image')->storeAs('public/MeidaBanner_image',$fileNameToStore);
            
        }
        $media_banner = MediaBanner::find(1);
        $media_banner->banner_image = $fileNameToStore;
        $media_banner->save();

        return redirect()->action('MediaController@mediaBody')->with('success', 'Media Banner updated successfully');
    }

    public function updateMediaBody(Request $request, $id)
    {
       $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'contact' => 'required',
        'mobile' => 'required',
        'email' => 'required',
        'address' => 'required',
        'website' => 'required',
       ]);

       $media_body = Media::find(1);
       $media_body->title = $request->input('title'); 
       $media_body->body = $request->input('body'); 
       $media_body->contact_info = $request->input('contact'); 
       $media_body->phone = $request->input('mobile'); 
       $media_body->email = $request->input('email'); 
       $media_body->address = $request->input('address'); 
       $media_body->url = $request->input('website'); 

       $media_body->save();

       return redirect()->action('MediaController@mediaBody')->with('success', 'Media Body updated successfully');
   
    }

    public function updateMediaCover(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=200,min_height=100'
            
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
            $path = $request->file('cover_image')->storeAs('public/mediaCover_image',$fileNameToStore);
            
        }

        $media_cover = MediaCover::find(1);
        $media_cover->cover_image = $fileNameToStore;
        $media_cover->save();

        return redirect()->action('MediaController@mediaBody')->with('success', 'Media Cover Image updated successfully');
    }
    public function mediaPublish()
    {
        $media_publishs = MediaPublishDetail::get();
        return view('admin.saintcommunity-media-scc.media-publish')
        ->with('media_publishs', $media_publishs);
    }

    public function createPublish()
    {
        return view('admin.saintcommunity-media-scc.create-publish');
    }

    public function storePublish(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        if($request->hasFile('cover')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET NUST EXT
            $extension = $request->file('cover')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('cover')->storeAs('public/mediaPublishcover', $fileNameToStore);
            
        }
        $media_publish_detail = new MediaPublishDetail;
        $media_publish_detail->title = $request->input('title');
        $media_publish_detail->details = $request->input('details');

        $media_publish_detail->cover = $fileNameToStore;

        $media_publish_detail->save();

        return redirect()->action('MediaController@mediaPublish')->with('success', 'New Publish Added Successfully');
    
    }

    public function editPublish($id) 
    {
        $media_publish_detail = mediaPublishDetail::find($id);
        return view('admin.saintcommunity-media-scc.edit-publish')
        ->with('media_publish_detail', $media_publish_detail);
    }

    public function updatePublish(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        if($request->hasFile('cover')){
            // get filename with the extension
            $filenameWithExt = $request->file('cover')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET NUST EXT
            $extension = $request->file('cover')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('cover')->storeAs('public/mediaPublishcover', $fileNameToStore);
            
        }
        $media_publish_detail = MediaPublishDetail::find($id);
        $media_publish_detail->title = $request->input('title');
        $media_publish_detail->details = $request->input('details');

        $media_publish_detail->cover = $fileNameToStore;

        $media_publish_detail->save();

        return redirect()->action('MediaController@mediaPublish')->with('success', 'Publish Updated Successfully');
    
    }
}
