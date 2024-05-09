<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Lead;
use App\Repositories\FeedbackRepository;
use Illuminate\Http\Request;

class SellerLeadController extends Controller
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
        $leads = Lead::query();

        $leads = $leads->where('confirmation_status', 'confirmed');

        if (isset($request->seller_status)) {
            $leads = $leads->where('seller_status', $request->seller_status);
        }

        $leads = $leads->paginate($paginate);

        return view('leads.leads_seller', compact('leads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lead = Lead::where('id', $id)->where('status', 'for seller')->first();
        $feedbacks = Feedback::where('lead_id', $id)->get();
        
        if (!$lead) {
            return redirect('sellerleads');
        }
        return view('leads.seller.lead_info', compact('lead','feedbacks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Lead::where('id', $id)->first()->update($request->except('_token'));
        $this->feedbackRepo->sellerFeedback($request, $id);

        return redirect('sellerleads');
    }
}
