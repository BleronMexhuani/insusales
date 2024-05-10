<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\LeadCustomData;
use App\Models\LeadCustomFields;
use App\Models\User;
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
        $agents = User::all();

        return view('leads.leads', compact('leads', 'agents'));
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
    public function store(Request $request)
    {
        //Also we have to check if the company or the project is with quality or something we have to ask the chief about that

        $lead = Lead::create([
            'company_id' => 1,
            'vorname' => $request->vorname,
            'nachname' => $request->nachname,
            'handy_nummer' => $request->handy_nummer,
            // 'status' => 'for quality' check for permission if it has the quality or directly confrimation or directly seller or none of them so 
        ]);

        $leadcustomfields = LeadCustomFields::where('project_id', $request->project_id)->get();
        $leadCustomData = [];

        foreach ($leadcustomfields as $item) {
            $leadCustomData[] = [
                'value' => $request[$item['input_name']],
                'lead_custom_field_id' => $item['id'],
                'lead_id' => $lead->id,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
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
        $lead = Lead::where('id', $id)->first();
        $lead_custom_data = LeadCustomData::with('customfields')->where('lead_id', $lead->id)->get();

        return view('leads.lead_info', compact('lead', 'lead_custom_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lead = Lead::where('id', $id)->first();
        $lead_custom_data = LeadCustomData::with('customfields')->where('lead_id', $lead->id)->get();
        $group_names = array_unique($lead_custom_data->pluck('group_name')->toArray());
     
        return view('leads.lead_info', compact('lead', 'lead_custom_data','group_names'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $lead = Lead::where('id', $id)->update(
            [
                'vorname' => $request->vorname,
                'nachname' => $request->nachname,
                'handy_nummer' => $request->handy_nummer

            ]
        );

        //Update Custom fields
        $customfields = LeadCustomData::with('customfields')->where('lead_id', $id)->get();

        foreach ($customfields as $customfield) {
            LeadCustomData::whereHas('customfields', function ($query) use ($customfield, $id) {
                return $query->where('input_name', $customfield->customfields['input_name'])->where('lead_id', $id);
            })->update(
                [
                    'value' => $request[$customfield->customfields['input_name']]

                ]
            );
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
