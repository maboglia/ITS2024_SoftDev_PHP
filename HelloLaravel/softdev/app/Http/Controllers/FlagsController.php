<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use App\Http\Requests\StoreFlagRequest;
use App\Http\Requests\UpdateFlagRequest;

class FlagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bandiere = Flag::all();

        $data = [
            'bandiere'=>$bandiere
        ];

        return view('bandiere', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Flag $flag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flag $flag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlagRequest $request, Flag $flag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flag $flag)
    {
        //
    }
}
