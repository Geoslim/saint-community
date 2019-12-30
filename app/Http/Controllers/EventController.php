<?php

namespace App\Http\Controllers;
use App\EventBanner;
use App\EventBody;
use App\EventCover;
use App\EventBg;
use App\EventUpcoming;
use App\EventUpcomingHeading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
{
    return view('admin.saintcommunity-events-scc.index');
}

public function eventsBody()
{
    $event_banner = EventBanner::find(1);
    $event_body = EventBody::find(1);
    $event_cover= EventCover::find(1);
    $event_bg = EventBg::find(1);
    return view('admin.saintcommunity-events-scc.event-body')
    ->with('event_banner' , $event_banner)
    ->with('event_body', $event_body)
    ->with('event_cover', $event_cover)
    ->with('event_bg', $event_bg);
}

public function updateEventBanner(Request $request, $id)
{
    $this->validate($request, [
        'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1000,min_height=700'
        
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
        $path = $request->file('banner_image')->storeAs('public/eventBanner_image',$fileNameToStore);
        
    }
    $event_banner = EventBanner::find(1);
    $event_banner->banner_image = $fileNameToStore;
    $event_banner->save();

    return redirect()->action('EventController@eventsBody')->with('success', 'Event Banner updated successfully');
}

public function updateEventBody(Request $request, $id)
{
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'date' => '',

    ]);
    
    $event_body = EventBody::find(1);
    $event_body->title = $request->input('title');
    $event_body->body = $request->input('body');
    $event_body->event_date = $request->input('event_date');

    $event_body->save();

    return redirect()->action('EventController@eventsBody')->with('success', 'Event Body updated successfully');
}

public function updateEventCover(Request $request, $id)
{
    $this->validate($request, [
        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=400,min_height=300'
        
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
        $path = $request->file('cover_image')->storeAs('public/eventCover_image',$fileNameToStore);
        
    }
    $event_cover = EventCover::find(1);
    $event_cover->cover_image = $fileNameToStore;
    $event_cover->save();

    return redirect()->action('EventController@eventsBody')->with('success', 'Event Cover updated successfully');
}

public function updateEventBg(Request $request, $id)
{
    $this->validate($request, [
        'bg_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=1000,min_height=700'
        
    ]);
    if($request->hasFile('bg_image')){
        // get filename with the extension
        $filenameWithExt = $request->file('bg_image')->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //GET NUST EXT
        $extension = $request->file('bg_image')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //upload the image
        $path = $request->file('bg_image')->storeAs('public/eventBg_image',$fileNameToStore);
        
    }
    $event_bg = EventBg::find(1);
    $event_bg->bg_image = $fileNameToStore;
    $event_bg->save();

    return redirect()->action('EventController@eventsBody')->with('success', 'Background Image updated successfully');
}

public function upcomingEvents()
{
    $upcoming_events = EventUpcoming::get();
    $upcoming_heading = EventUpcomingHeading::find(1);
    return view('admin.saintcommunity-events-scc.upcoming-event')
    ->with('upcoming_events', $upcoming_events)
    ->with('upcoming_heading', $upcoming_heading);
}

public function createUpcoming()
{
    if (Gate::allows('admin-only', auth()->user())) { 
    return view('admin.saintcommunity-events-scc.create-upcoming');
}
return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');

}

public function storeUpcoming(Request $request)
{
    if (Gate::allows('admin-only', auth()->user())) { 
    $this->validate($request, [
        'title' => 'required',
        'event_date' => 'required'
    ]);
    $upcoming_events = new EventUpcoming;
    $upcoming_events->title = $request->input('title');
    $upcoming_events->event_date = $request->input('event_date');
    $upcoming_events->save();

    return redirect()->action('EventController@upcomingEvents')->with('success', 'Program Added Successfully');
}
return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');

}

public function editUpcoming($id)
{
    $upcoming_events = EventUpcoming::find($id);
    return view('admin.saintcommunity-events-scc.edit-upcoming')
    ->with('upcoming_events', $upcoming_events);
}

public function updateUpcoming(Request $request, $id)
{
    $this->validate($request, [
        'title' => 'required',
        'event_date' => 'required'
    ]);
    $upcoming_events = EventUpcoming::find($id);
    $upcoming_events->title = $request->input('title');
    $upcoming_events->event_date = $request->input('event_date');
    $upcoming_events->save();

    return redirect()->action('EventController@upcomingEvents')->with('success', 'Program Updated Successfully');

}

public function updateUpcomingHeading(Request $request, $id)
{
    $this->validate($request, [
        'heading' => 'required'
    ]);
    $upcoming_heading = EventUpcomingHeading::find(1);
    $upcoming_heading->heading = $request->input('heading');
    $upcoming_heading->save();

    return redirect()->action('EventController@upcomingEvents')->with('success', 'Program Heading Updated Successfully');

}
public function destroy($id)
{
    if (Gate::allows('admin-only', auth()->user())) { 
        $upcoming_event = EventUpcoming::find($id);
        $upcoming_event->delete();
        return redirect()->action('EventController@upcomingEvents')->with('success', 'Program Deleted Successfully');
    }
    return redirect()->action('AdminHomepageController@adminIndex')->with('error', 'Unauthorized Access');
    
}

}
