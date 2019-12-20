<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterPartner;
use App\FooterDownload;
class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $footer_partner = FooterPartner::find(1);
        $footer_download = FooterDownload::find(1);
        return view('admin.saintcommunity-footer-scc.index')
        ->with('footer_partner', $footer_partner)
        ->with('footer_download', $footer_download);
    }

    public function updateFooterPartner(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'pay_btn' => 'required',
            'pay_btn_url' => ''
        ]);
        $footer_partner = FooterPartner::find($id);
        $footer_partner->title = $request->input('title');
        $footer_partner->body = $request->input('body');
        $footer_partner->pay_btn = $request->input('pay_btn');
        $footer_partner->pay_btn_url = $request->input('pay_btn_url');
        
        $footer_partner->save();

        return redirect()->action('FooterController@index')->with('success', 'Footer Partnership section updated successfully');
    }

    public function updateFooterDownload(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'play_store' => 'required',
            'play_store_url' => ''
        ]);
        $footer_download = FooterDownload::find($id);
        $footer_download->title = $request->input('title');
        $footer_download->subtitle = $request->input('subtitle');
        $footer_download->play_store = $request->input('play_store');
        $footer_download->play_store_url = $request->input('play_store_url');
        
        $footer_download->save();

        return redirect()->action('FooterController@index')->with('success', 'Footer Download section updated successfully');
    
    }

}
