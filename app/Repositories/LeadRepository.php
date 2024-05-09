<?php

namespace App\Repositories;

use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LeadRepository
{
    public function handleAudio($request, $audio, $lead)
    {
        $filename = $lead->audio . ' ,';

        if (isset($audio) && count($audio)) {
            for ($i = 0; $i < count($audio); $i++) {
                $file = time() . "_" . preg_replace('/\s+/', '_', strtolower($audio[$i]->getClientOriginalName()));
                $filename .= $file . (count($audio) - 1 > $i ? "," : "");
                $request->file("audio_file")[$i]->move('images', $file);
            }
        } 

        return $filename;
        // dd($filename);
    }

    public function searchLeads($request, $lead)
    {
        if (isset($request->keyword)) {
            $lead->where('id', 'LIKE', $request->keyword)->orWhere('vorname', 'LIKE', $request->keyword)->orWhere('nachname', 'LIKE', $request->keyword)->orWhere('handy_nummer', 'LIKE', $request->keyword);
            return $lead;
        } else {
            foreach ($request->except('_token', 'keyword', 'page','paginate') as $key => $item) {
                if($key=='created_at'){
               
                    $lead->where('created_at','>=',Carbon::parse($item)->format('Y-m-d'));
                }
                else if ($item !== null) {
                    $lead->whereIn($key, [$item]);
                }
            }
            return $lead;
        }
    }
}
