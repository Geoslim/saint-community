<?php

namespace App\Http\Controllers;
use App\Branch;
use App\BranchDetails;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::get();
        $branch_section_details = BranchDetails::find(1);
        return view('admin.saintcommunity-branches.index')
        ->with('branch_section_details', $branch_section_details)
        ->with('branches', $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.saintcommunity-branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'location' => 'required',
            'address' => 'required'
        ]);
        $branches = new Branch;
        $branches->location = $request->input('location');
        $branches->address = $request->input('address');
        $branches->save();

        return redirect()->action('BranchesController@index')->with('success', 'Branch Added Successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $branch = Branch::find($id);
        return view('admin.saintcommunity-branches.edit')->with('branch', $branch);
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
            'address' => 'required'
        ]);
        $branches = Branch::find($id);
        $branches->location = $request->input('location');
        $branches->address = $request->input('address');
        $branches->save();

        return redirect()->action('BranchesController@index')->with('success', 'Branch Updated Successfully');
    
    }

    public function updateDetails(Request $request, $id)
{
    $this->validate($request, [
        'branch_heading' => 'required',
        'branch_btn' => 'required'
    ]);
    $branch_section_details = BranchDetails::find(1);
    $branch_section_details->branch_heading = $request->input('branch_heading');
    $branch_section_details->branch_btn = $request->input('branch_btn');
    $branch_section_details->save();

    return redirect()->action('BranchesController@index')->with('success', 'Details Updated Successfully');

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
