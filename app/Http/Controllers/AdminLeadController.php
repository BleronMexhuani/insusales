<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\User;
use App\Repositories\LeadRepository;
use Illuminate\Http\Request;

class AdminLeadController extends Controller
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
        $agents = User::all();
        $leads = Lead::query();

        $leads = $this->leadRepo->searchLeads($request, $leads);
        $leads = $leads->paginate(25);
        return view('leads.leads', compact('leads', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
