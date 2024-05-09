<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LeadCustomFields;
use Illuminate\Http\Request;

class CustomLeadFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $custom_fields = LeadCustomFields::where('project_id', $req->id)->get();

        return view('custom_fields.index', compact('custom_fields'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('custom_fields.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LeadCustomFields::create($request->validate());

        return redirect()->back()->with(['message' => 'Succesfully custom field created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $custom_field = LeadCustomFields::where('id', $id)->first();

        return view('custom_fields.show', compact('custom_field'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $custom_field = LeadCustomFields::where('id', $id)->first();

        return view('custom_fields.edit', compact('custom_field'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $custom_field = LeadCustomFields::where('id', $id)->update($request->validate());

        return redirect()->back()->with(['message' => 'Succesfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        LeadCustomFields::where('id', $id)->delete();

        return redirect()->back()->with(['message' => 'Succesfully deleted']);
    }
}
 