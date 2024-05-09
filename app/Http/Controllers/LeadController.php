<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TerminCreateRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Feedback;
use App\Models\Lead;
use App\Models\User;
use App\Repositories\FeedbackRepository;
use App\Repositories\LeadRepository;
use App\Repositories\LeadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $feedbackRepo;
    protected $leadRepo;

    public function __construct()
    {
        $this->feedbackRepo = new FeedbackRepository;
        $this->leadRepo = new LeadRepository;
    }
    public function index(Request $request)
    {
        //
        $agents = collect();
        $leads = Lead::query();
        $paginate = $request->paginate ? $request->paginate : 25;
        if(!Auth::user()->can('see all leads')) {
            $leads =  $leads->where('assigned_to', Auth::user()->id);
        }
      
        $leads = $this->leadRepo->searchLeads($request, $leads);


        $leads = $leads->paginate($paginate);
         $leads->appends($_GET)->links();


        return view('leads.leads', compact('leads', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('leads.termin_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TerminCreateRequest $request)
    {
        //
        $request['assigned_to'] = Auth::user()->id;
        $request['feedback_status'] = 'Terminiert';
        $request['status'] = 'for quality';
   
        $lead = Lead::create($request->except('_token', 'check'));
        $this->feedbackRepo->callAgentFeedback($request, $lead->id);

        return redirect('leads');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $lead  = Lead::where('id', $id)->first();
        $feedbacks = Feedback::where('lead_id', $id)->get();
        return view('leads.lead_info', compact('lead', 'feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //  
        $lead = Lead::where('id', $id)->first();

        return view('lead_info', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, string $id)
    {

        $request['confirmation_status'] = 'pending';
        $request['quality_status'] = 'pending';

        $request['status'] = $request->feedback_status == 'Terminiert' ? 'for quality' : 'for call agent';

        Lead::where('id', $id)->first()->update($request->except('_token'));
        $this->feedbackRepo->callAgentFeedback($request, $id);

        return redirect('leads')->with(['message' => 'Succesfully Lead is updated']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function shareLead(Request $request)
    {

        Lead::whereIn('id', $request->leads)->update(['assigned_to' => $request->agent_id]);

        return response()->json(['message' => 'Successfully Assigned.']);
    }
}
