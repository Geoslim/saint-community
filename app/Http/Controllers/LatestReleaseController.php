<?php

namespace App\Http\Controllers;
use App\LatestRelease;
use App\LatestReleaseCover;
use Illuminate\Http\Request;

class LatestReleaseController extends Controller
{
    public function index()
    {
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        return view('admin.saintcommunity-latest-release.index')
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover);
    }

    public function updateDetials(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
           
        ]);
        $latest_detail = LatestRelease::find(1);
        $latest_detail->title = $request->input('title');
        $latest_detail->subtitle = $request->input('subtitle');
        $latest_detail->body = $request->input('body');
       
        $latest_detail->save();

        return redirect()->action('LatestReleaseController@index')->with('success', $latest_detail->title .' updated successfully');
    }

    public function updateCover(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=500,max_height=800'
            
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
            $path = $request->file('cover_image')->storeAs('public/programs_image',$fileNameToStore);
            
        }
 
        $latest_cover = LatestReleaseCover::find(1);
        $latest_cover->cover_image = $fileNameToStore;
        $latest_cover->save();

        return redirect()->action('LatestReleaseController@index')->with('success','Cover Image updated successfully');
    }
}
