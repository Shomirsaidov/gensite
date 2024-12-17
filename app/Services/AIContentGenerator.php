<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Jobs\GenTextJob; 

class AIContentGenerator
{

    public function generateText(Request $request)
    {
        $projectID = $request->input('name') . "_" . time();

        $language = $request->input('language');
        $keywords = $request->input('keywords');
        $country = $request->input('country');
        $name = $request->input('name');
        $options = [
            "free_block" => $request->input('free_block'),
            "projectID" => $projectID
        ];

        // Dispatch the job
        GenTextJob::dispatch($language, $keywords, $country, $name, $options);

        return $projectID;
    }


}
