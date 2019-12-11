<?php

namespace App\Http\Controllers;
use App\HeaderBase;
use Illuminate\Http\Request;

class HeaderBaseController extends Controller
{
    public function index() {
        $headerbase = HeaderBase::find(1);
        return view('admin.saintcommunity-header-base.index')->with('headerbase', $headerbase);

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
            'location' => 'required',
            'location_two' => 'required',
            'sunday' => 'required',
            'sunday_time_one' => 'required',
            'sunday_time_two' => 'required',
            'mid_day' => 'required',
            'mid_day_time' => 'required',
            'direction' => 'required'
            
        ]);
        
        $headerBase = HeaderBase::find(1);
        $headerBase->location = $request->input('location');
        $headerBase->location_two = $request->input('location_two');
        $headerBase->sunday = $request->input('sunday');
        $headerBase->sunday_time_one = $request->input('sunday_time_one');
        $headerBase->sunday_time_two = $request->input('sunday_time_two');
        $headerBase->mid_day = $request->input('mid_day');
        $headerBase->mid_day_time = $request->input('mid_day_time');
        $headerBase->direction = $request->input('direction');

        $headerBase->save();
        return redirect()->action('HeaderBaseController@index')->with('success', 'Header Base Successfully updated');

    }
}
