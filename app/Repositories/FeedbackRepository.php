<?php

namespace App\Repositories;

use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackRepository
{

    public function callAgentFeedback($request,$id)
    {
        Feedback::create([
            'user_id' => Auth::user()->id,
            'lead_id'=>$id,
            'feedback' => $request['feedback_status'],
            'action' => 'Form Submited',
            'termindatum' => $request['termindatum'],
            'terminzeit' => $request['terminzeit']
        ]);
    }
    public function qualityFeedback($request,$id)
    {
        Feedback::create([
            'user_id' => Auth::user()->id,
            'lead_id'=>$id,
            'feedback' => $request['quality_status'],
            'action' => 'Form Submited',
            'termindatum' => $request['termindatum'],
            'terminzeit' => $request['terminzeit']
        ]);
    }

    public function confirmationFeedback($request,$id)
    {
        Feedback::create([
            'user_id' => Auth::user()->id,
            'lead_id'=>$id,
            'feedback' => $request['confirmation_status'],
            'action' => 'Form Submited',
            'termindatum' => $request['termindatum'],
            'terminzeit' => $request['terminzeit']
        ]);
    }
    public function sellerFeedback($request,$id)
    {
        Feedback::create([
            'user_id' => Auth::user()->id,
            'lead_id'=>$id,
            'feedback' => $request['seller_status'],
            'action' => 'Form Submited',
            'termindatum' => $request['termindatum'],
            'terminzeit' => $request['terminzeit']
        ]);
    }
}
