<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Services\AIContentGenerator;
use App\Services\ImageGenerator;

class PageGeneratorController extends Controller
{
    public function showForm()
    {
        return view('generate.form');
    }

    public function generatePage(Request $request)
    {
        $request->validate([
            'language' => 'required|string',
            'country' => 'required|string',
            'keywords' => 'required|string',
        ]);


        $language = $request->input('language');
        $country = $request->input('country');
        $keywords = $request->input('keywords');
        $company_name = $request->input('name');


        
        $contentGenerator = new AIContentGenerator();
        $destination = $contentGenerator->generateText($request);


        $image = $request->file('logo');

        // Define the destination path and custom filename
        $projectDestination = $destination; // Replace with your dynamic directory

        // Store the image in the defined directory using Storage
        $path = Storage::disk('public')->putFileAs(
            $projectDestination . "/assets", // Directory
            $image,              // Uploaded file
            'logo.png'      // Custom filename
        );





        

        return redirect(url("storage/" . $destination . "/" . $company_name . ".zip"));

    }
}

