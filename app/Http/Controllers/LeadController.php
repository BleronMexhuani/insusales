<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\LeadCustomData;
use App\Models\LeadCustomFields;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $leads = Lead::paginate(25);

        return view('leads', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // 
        $project_id = $request->project_id;
        $customfields = LeadCustomFields::where('project_id', $request->project_id)->get();

        return view('leads.create', compact('customfields', 'project_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $project_id)
    {
        //Also we have to check if the company or the project is with quality or something we have to ask the chief about that

        $lead = Lead::create([
            'vorname' => $request->vorname,
            'nachname' => $request->nachname,
            'handy_nummer' => $request->handy_nummer,
            // 'status' => 'for quality' check for permission if it has the quality or directly confrimation or directly seller or none of them so 
        ]);

        $leadcustomfields = LeadCustomFields::where('project_id', $project_id)->get();
        $leadcustomfieldID = $leadcustomfields->first()->pluck('id');
        $leadCustomData = [];

        foreach ($leadcustomfields as $key => $value) {
            $leadCustomData[] = [
                $request->$key => $value,
                'lead_custom_field_id' => $leadcustomfieldID,
                'lead_id' => $lead->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        LeadCustomData::insert($leadCustomData);

        return redirect()->back()->with(['message' => 'Lead Succesfully created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
