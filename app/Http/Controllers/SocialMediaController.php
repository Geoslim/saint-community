<?php

namespace App\Http\Controllers;
use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia = SocialMedia::find(1);
        return view('admin.saintcommunity-socialmedia.index')->with('socialmedia', $socialmedia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'twitter' => 'required',
            'play_store' => 'required',
            'facebook' => 'required',
            'youtube' => 'required',
            'instagram' => 'required'
        ]);
        $socialMedia = SocialMedia::find(1);
        $socialMedia->twitter = $request->input('twitter');
        $socialMedia->play_store = $request->input('play_store');
        $socialMedia->facebook = $request->input('facebook');
        $socialMedia->youtube = $request->input('youtube');
        $socialMedia->instagram = $request->input('instagram');
        $socialMedia->save();

        return redirect()->action('SocialMediaController@index')->with('success', 'Social Media Handles Saved Successfully');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
