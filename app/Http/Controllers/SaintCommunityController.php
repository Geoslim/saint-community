<?php

namespace App\Http\Controllers;
use App\SliderHeading;
use App\SliderImage;
use App\HomeBody;
use App\HomeBodyCoverImage;
use App\AboutSccBanner;
use App\AboutSccBody;
use App\AboutSccCoverImage;
use App\Media;
use App\MediaBanner;
use App\MediaCover;
use App\MediaPublishDetail;
use App\EventBanner;
use App\EventBody;
use App\EventCover;
use App\EventBg;
use App\EventUpcoming;
use App\EventUpcomingHeading;
use App\LatestRelease;
use App\LatestReleaseCover;
use App\PartnershipBanner;
use App\PartnershipBody;
use App\PartnershipCoverImage;
use App\SocialMedia;
use App\HeaderBase;
use App\ContactScc;
use App\ContactBanner;
use App\ContactGoogleMap;
use App\Branch;
use App\BranchDetails;
use App\Menu;
use App\MenuLogo;
use App\FooterPartner;
use Illuminate\Http\Request;

class SaintCommunityController extends Controller
{
    //
    public function indexPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $slider_images = SliderImage::get();
        $slider_heading = SliderHeading::find(1);
        $home_body = HomeBody::find(1);
        $home_body_cover_image = homeBodyCoverImage::find(1);
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        $upcoming_events = EventUpcoming::get();
        $upcoming_heading = EventUpcomingHeading::find(1);
        $socialmedia = SocialMedia::find(1);
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-index.index')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('slider_heading', $slider_heading)
        ->with('slider_images', $slider_images)
        ->with('home_body', $home_body)
        ->with('home_body_cover_image', $home_body_cover_image)
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover)
        ->with('upcoming_events', $upcoming_events)
        ->with('upcoming_heading', $upcoming_heading)
        ->with('socialmedia', $socialmedia)
        ->with('branches', $branches)
        ->with('branch_section_details', $branch_section_details)
        ->with('footer_partner', $footer_partner);
    }


    public function aboutUsPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $aboutscc_body = AboutSccBody::find(1);
        $aboutscc_banner = AboutSccBanner::find(1);
        $aboutscc_cover = AboutSccCoverImage::find(1);
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        $upcoming_events = EventUpcoming::get();
        $upcoming_heading = EventUpcomingHeading::find(1);
        $socialmedia = SocialMedia::find(1);
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-about.about')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('aboutscc_body', $aboutscc_body)
        ->with('aboutscc_cover', $aboutscc_cover)
        ->with('aboutscc_banner', $aboutscc_banner)
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover)
        ->with('upcoming_events', $upcoming_events)
        ->with('upcoming_heading', $upcoming_heading)
        ->with('socialmedia', $socialmedia)
        ->with('branches', $branches)
        ->with('branch_section_details', $branch_section_details)
        ->with('footer_partner', $footer_partner);

    }

    public function locationPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        $upcoming_events = EventUpcoming::get();
        $upcoming_heading = EventUpcomingHeading::find(1);
        $socialmedia = SocialMedia::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-location.location')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover)
        ->with('upcoming_events', $upcoming_events)
        ->with('upcoming_heading', $upcoming_heading)
        ->with('socialmedia', $socialmedia)
        ->with('footer_partner', $footer_partner);
    }

    public function mediaPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $media_body = Media::find(1);
        $media_banner = MediaBanner::find(1);
        $media_cover = mediaCover::find(1);
        $media_publish_details = MediaPublishDetail::get();
        $socialmedia = SocialMedia::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-media.media')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('media_body', $media_body)
        ->with('media_banner', $media_banner)
        ->with('media_cover', $media_cover)
        ->with('media_publish_details', $media_publish_details)
        ->with('socialmedia', $socialmedia)
        ->with('footer_partner', $footer_partner);
    }

    public function partnershipPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $partnership_banner = PartnershipBanner::find(1);
        $partnership_body = PartnershipBody::find(1);
        $partnership_cover_image = PartnershipCoverImage::find(1);
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        $upcoming_events = EventUpcoming::get();
        $upcoming_heading = EventUpcomingHeading::find(1);
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        $socialmedia = SocialMedia::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-partnership.partnership')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('socialmedia', $socialmedia)
        ->with('partnership_banner', $partnership_banner)
        ->with('partnership_cover_image', $partnership_cover_image)
        ->with('partnership_body', $partnership_body)
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover)
        ->with('upcoming_events', $upcoming_events)
        ->with('upcoming_heading', $upcoming_heading)
        ->with('branches', $branches)
        ->with('branch_section_details', $branch_section_details)
        ->with('footer_partner', $footer_partner);
    }

    public function eventPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $event_banner = EventBanner::find(1);
        $event_body = EventBody::find(1);
        $event_cover= EventCover::find(1);
        $event_bg = EventBg::find(1);
        $latest_detail = LatestRelease::find(1);
        $latest_cover = LatestReleaseCover::find(1);
        $upcoming_events = EventUpcoming::get();
        $upcoming_heading = EventUpcomingHeading::find(1);
        $socialmedia = SocialMedia::find(1);
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-event.event')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('socialmedia', $socialmedia)
        ->with('event_banner' , $event_banner)
        ->with('event_body', $event_body)
        ->with('event_cover', $event_cover)
        ->with('event_bg', $event_bg)
        ->with('latest_detail', $latest_detail)
        ->with('latest_cover', $latest_cover)
        ->with('upcoming_events', $upcoming_events)
        ->with('upcoming_heading', $upcoming_heading)
        ->with('branches', $branches)
        ->with('branch_section_details', $branch_section_details)
        ->with('footer_partner', $footer_partner);
    }

    public function contactUsPage(){
        $menu_logo = MenuLogo::find(1);
        $menu = Menu::find(1);
        $headerbase = HeaderBase::find(1);
        $socialmedia = SocialMedia::find(1);
        $contactScc = ContactScc::find(1);
        $contactBanner = ContactBanner::find(1);
        $ContactGoogleMap = ContactGoogleMap::find(1);
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        $footer_partner = FooterPartner::find(1);
        return view('saintcommunity-contact.contact')
        ->with('menu_logo', $menu_logo)
        ->with('menu', $menu)
        ->with('headerbase', $headerbase)
        ->with('socialmedia', $socialmedia)
        ->with('contactBanner', $contactBanner)
        ->with('contactScc', $contactScc)
        ->with('ContactGoogleMap', $ContactGoogleMap)
        ->with('branches', $branches)
        ->with('branch_section_details', $branch_section_details)
        ->with('footer_partner', $footer_partner);
    }
}
