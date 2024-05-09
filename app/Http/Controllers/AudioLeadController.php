<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Repositories\LeadRepository;
use Illuminate\Http\Request;

class AudioLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $leadRepo;

    public function __construct()
    {
        $this->leadRepo = new LeadRepository;
    }
    public function index(Request $request)
    {
        //
        $paginate = $request->paginate ? $request->paginate : 25;
        $leads = Lead::where('status', 'for quality')->where('feedback_status', 'Terminiert')->paginate($paginate);

        return view('leads.audioquality.audio_leads_quality', compact('leads'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lead = Lead::where('id', $id)->first();
        
        return view('leads.audioquality.lead_info', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $lead = Lead::where('id', $id)->first();

        $request['audio'] = $this->leadRepo->handleAudio($request, $request->file('audio_file'), $lead);

        $lead->update(['audio' => $request['audio']]);

        return redirect('audios');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        
    }
    public function deleteAudio(Request $req)
    {
        $lead = Lead::find($req->id);
        $audio = explode(',', $lead->audio);
        unset($audio[array_search($req->audio, $audio)]);
        $audio = implode(',', $audio);

        Lead::where('id', $lead->id)->update([
            "audio" => $audio
        ]);

        return redirect()->back();
    }
}
