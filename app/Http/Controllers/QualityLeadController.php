<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Lead;
use App\Repositories\FeedbackRepository;
use Illuminate\Http\Request;

class QualityLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $feedbackRepo;

    public function __construct()
    {
        $this->feedbackRepo = new FeedbackRepository;
    }
    public function index(Request $request)
    {
        //
        $paginate = $request->paginate ? $request->paginate : 25;
        $leads = Lead::where('status', 'for quality')->where('feedback_status', 'Terminiert')->paginate($paginate);

        return view('leads.leads_quality', compact('leads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lead = Lead::where('id', $id)->where('status', 'for quality')->first();
        $feedbacks = Feedback::where('lead_id', $id)->get();
    

        if (!$lead) {
            return redirect('qualityleads');
        }
        return view('leads.quality.lead_info', compact('lead','feedbacks'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
       
        $request['status'] = $request->quality_status == 'confirmed' ? 'for confirmation' : 'for call agent';
        //Update Lead
        Lead::where('id', $id)->first()->update($request->except('_token'));
        //Update the feedback
        $this->feedbackRepo->qualityFeedback($request, $id);
        
        return redirect('qualityleads');
    }
}
