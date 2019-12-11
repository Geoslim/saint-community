<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','SaintCommunityController@indexPage');
Route::get('/about-us/','SaintCommunityController@aboutUsPage');
Route::get('/location/','SaintCommunityController@locationPage');
Route::get('/media/','SaintCommunityController@mediaPage');
Route::get('/partnership/','SaintCommunityController@partnershipPage');
Route::get('/event/','SaintCommunityController@eventPage');
Route::get('/contact-us/','SaintCommunityController@contactUsPage');
Auth::routes();



//admin routes check if user has the right auth ID to visit this route
//User Must Be authenticated and has a role ID that is less than or equal to three to acccess this route .
//=======================================================================================================================================//
//ROLE ID 1 :: Super Super Admin jumoke@kjk.com.africa   ....//exclude her from being display with other admin on the back end
//ROLE ID 2" Super Admin //have all priviledges both delete adn edit
//ROLE ID 3   Editor     //Have only the priviledge to edit and not deleteb
//============================================================================================================================//
Route::get('/admin', 'HomepageController@adminIndex');
Route::get('/admin-homepage/', 'HomepageController@adminHomepageIndex');

Route::resource('social-media', 'SocialMediaController');

Route::get('branches', 'BranchesController@index');
Route::get('create', 'BranchesController@create');
Route::get('branches/{id}/edit', 'BranchesController@edit');
Route::put('branches/{id}', 'BranchesController@update')->name('update');
Route::put('updateDetails/{id}', 'BranchesController@updateDetails')->name('updateDetails');

Route::get('contact-scc', 'ContactSccController@index');
Route::put('updateContactBanner/{id}', 'ContactSccController@updateContactBanner')->name('updateContactBanner');
Route::put('updateContactBody/{id}', 'ContactSccController@updateContactBody')->name('updateContactBody');
Route::put('updateGoogleMap/{id}', 'ContactSccController@updateGoogleMap')->name('updateGoogleMap');

Route::get('header-base', 'HeaderBaseController@index');
Route::put('update/{id}', 'HeaderBaseController@update')->name('update');

Route::put('updateAboutBody/{id}', 'AboutSccController@updateAboutBody')->name('updateAboutBody');
Route::put('updateAboutBanner/{id}', 'AboutSccController@updateAboutBanner')->name('updateAboutBanner');
// Route::put('about-scc/{id}', 'AboutSccController@updateAboutCoverImage');
Route::put('updateAboutCoverImage/{id}', 'AboutSccController@updateAboutCoverImage')->name('updateAboutCoverImage');
Route::resource('about-scc', 'AboutSccController');

Route::get('partnership-scc', 'PartnershipController@index');
Route::put('updatePartnershipBody/{id}', 'PartnershipController@updatePartnershipBody')->name('updatePartnershipBody');
Route::put('updatePartnershipBanner/{id}', 'PartnershipController@updatePartnershipBanner')->name('updatePartnershipBanner');
Route::put('updatePartnershipCoverImage/{id}', 'PartnershipController@updatePartnershipCoverImage')->name('updatePartnershipCoverImage');

Route::get('menu-scc', 'MenuController@index');
Route::put('updateMenu/{id}', 'MenuController@updateMenu')->name('updateMenu');
Route::put('updateMenuLogo/{id}', 'MenuController@updateMenuLogo')->name('updateMenuLogo');

Route::get('media-scc', 'MediaController@index');
Route::get('media-body', 'MediaController@mediaBody');
Route::put('updateMediaBody/{id}', 'MediaController@updateMediaBody')->name('updateMediaBody');
Route::put('updateMediaBanner/{id}', 'MediaController@updateMediaBanner')->name('updateMediaBanner');
Route::put('updateMediaCover/{id}', 'MediaController@updateMediaCover')->name('updateMediaCover');
Route::get('media-publish', 'MediaController@mediaPublish');
Route::get('create-publish', 'MediaController@createPublish');
Route::post('create-publish', 'MediaController@storePublish');
Route::get('media-publish/{id}/edit', 'MediaController@editPublish');
Route::put('updatePublish/{id}', 'MediaController@updatePublish')->name('updatePublish');

Route::get('events-scc', 'EventController@index');
Route::get('events-body', 'EventController@eventsBody');
Route::get('upcoming-events', 'EventController@upcomingEvents');
Route::put('updateEventBanner/{id}', 'EventController@updateEventBanner')->name('updateEventBanner');
Route::put('updateEventCover/{id}', 'EventController@updateEventCover')->name('updateEventCover');
Route::put('updateEventBody/{id}', 'EventController@updateEventBody')->name('updateEventBody');
Route::put('updateEventBg/{id}', 'EventController@updateEventBg')->name('updateEventBg');
Route::get('create-upcoming', 'EventController@createUpcoming');
Route::post('create-upcoming', 'EventController@storeUpcoming');
Route::get('upcoming-events/{id}/edit', 'EventController@editUpcoming');
Route::put('updateUpcoming/{id}', 'EventController@updateUpcoming')->name('updateUpcoming');
Route::put('updateUpcomingHeading/{id}', 'EventController@updateUpcomingHeading')->name('updateUpcomingHeading');

Route::get('latest-release', 'LatestReleaseController@index');
Route::put('updateDetials/{id}', 'LatestReleaseController@updateDetials')->name('updateDetials');
Route::put('updateCover/{id}', 'LatestReleaseController@updateCover')->name('updateCover');

Route::get('footer-scc', 'FooterController@index');