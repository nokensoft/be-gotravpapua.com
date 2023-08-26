<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.packages.index');
    }

    // DRAFT
    public function draft()
    {
        //
        return view('dashboard.packages.draft');
    }

    // TRASH
    public function trash()
    {
        //
        return view('dashboard.packages.trash');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo 'CREATE';
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
        echo 'STORE';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show(packages $packages)
    {
        //
        echo 'SHOW';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function edit(packages $packages)
    {
        //
        echo 'EDIT';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, packages $packages)
    {
        //
        echo 'UPDATE';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(packages $packages)
    {
        //
        echo 'DESTROY';
    }
}
