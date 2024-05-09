<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Lead;
use App\Repositories\FeedbackRepository;
use Illuminate\Http\Request;

class ConfirmationLeadController extends Controller
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
        $leads = Lead::where('status', 'for confirmation')->paginate($paginate);

        return view('leads.leads_confirmation', compact('leads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lead = Lead::where('id', $id)->where('status', 'for confirmation')->first();
        $feedbacks = Feedback::where('lead_id', $id)->get();
        
        if (!$lead) {
            return redirect('confirmationleads');
        }
        return view('leads.confirmation.lead_info', compact('lead','feedbacks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request['status'] = $request->confirmation_status == 'confirmed' ? 'for seller' : 'for call agent';
        
        Lead::where('id', $id)->first()->update($request->except('_token'));
        
        $this->feedbackRepo->confirmationFeedback($request, $id);

        return redirect('confirmationleads');
    }
}
