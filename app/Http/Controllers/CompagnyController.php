<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompagnyRequest;
use App\Models\Compagny;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compagnies = Compagny::paginate(10);
        return view("compagny.index", ["compagnies"=> $compagnies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("compagny.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompagnyRequest $request)
    {
        // dd("Validated");
        $logoName = Carbon::now()->timestamp.'.'.$request->logo->extension();
        $request->logo->storeAs("",$logoName);
        $logoURL = "storage/$logoName";

        $data = $request->except(["logo"]);
        $data['logo'] = $logoURL;
        Compagny::create($data);
        return to_route("compagny.index")->with("success", "Compagny Created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function show(Compagny $compagny)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function edit(Compagny $compagny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compagny $compagny)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny)
    {
        //
    }
}
