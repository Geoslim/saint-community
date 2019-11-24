<?php

namespace App\Http\Controllers;
use App\SocialMedia;
use Illuminate\Http\Request;

class SaintCommunityController extends Controller
{
    //
    public function indexPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-index.index')->with('socialmedia', $socialmedia);
    }


    public function aboutUsPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-about.about')->with('socialmedia', $socialmedia);
    }

    public function locationPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-location.location')->with('socialmedia', $socialmedia);
    }

    public function mediaPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-media.media')->with('socialmedia', $socialmedia);
    }

    public function partnershipPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-partnership.partnership')->with('socialmedia', $socialmedia);
    }

    public function eventPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-event.event')->with('socialmedia', $socialmedia);
    }

    public function contactUsPage(){
        $socialmedia = SocialMedia::find(1);
        return view('saintcommunity-contact.contact')->with('socialmedia', $socialmedia);
    }
}
