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
Route::resource('about-scc', 'AboutSccController');
