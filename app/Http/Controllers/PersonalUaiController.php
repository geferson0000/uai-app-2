<?php

namespace App\Http\Controllers;

use App\Models\PersonalUai;
use Illuminate\Http\Request;

class PersonalUaiController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personal.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return json_encode(PersonalUai::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PersonalUai::create($request->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesonal = PersonalUai::find($id);
        return $pesonal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $personal = PersonalUai::find($id);
        $personal->delete();
    }
}
