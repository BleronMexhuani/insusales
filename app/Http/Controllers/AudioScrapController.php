<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AudioScrapController extends Controller
{
    //
    public function scrapeAndUpload(Request $request)
    {
        $leads = Lead::where('status', 'for quality')->whereNull('audio')->get();

        $sourceUrl = 'http://148.251.236.186/RECORDINGS/ORIG/'.Carbon::now()->format('Y-m-d').'/';
    
        $client = new Client();

        $authToken = base64_encode('kontrolla:recordings2023');

        $response = $client->request('GET', $sourceUrl, [
            'headers' => [
                'Authorization' => 'Basic ' . $authToken,
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36'
            ]
        ]);

        $body = (string) $response->getBody();

        foreach ($leads as $lead) {

            preg_match_all('/href="([^"]*' . $lead->handy_nummer . '[^"]*\.wav)"/', $body, $matches);

            for ($i = 0; $i < count($matches[1]); $i++) {
                $audioUrl = $matches[1][$i] ?? null;

                if (!$audioUrl) {
                
                    continue;
                    // return response()->json(['message' => 'No audio URL found on the page'], 404);
                }

                $audioUrl = filter_var($audioUrl, FILTER_VALIDATE_URL) ? $audioUrl : $sourceUrl . $audioUrl;
                $audioResponse = $client->get($audioUrl, [
                    'headers' => [
                        'Authorization' => 'Basic ' . $authToken,
                        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36'
                    ]
                ]);
                $contentLength = $audioResponse->getHeader('Content-Length');
                if (($contentLength[0] / 1000000) > 0.6) {
                    $audioContent = $audioResponse->getBody()->getContents();
                    $audioPath = public_path('images/' . basename($audioUrl));
                    file_put_contents($audioPath, $audioContent);
                    $lead->update(['audio' => ($lead->audio ? $lead->audio . ',' : '') . basename($audioUrl)]);
                }
            }
        }

        return response()->json(['message' => 'Audio uploaded successfully'], 200);
    }

    public function human_filesize($bytes, $decimals = 2)
    {
        $factor = floor((strlen($bytes) - 1) / 3);
        if ($factor > 0) $sz = 'KMGT';
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor - 1] . 'B';
    }
}
