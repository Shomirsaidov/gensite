<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ImageGenerator
{
    public function generateImage($keywords)
    {
        // Make the request to OpenAI API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/images/generations', [
            'prompt' => "Сгенерируй уникальную картинку, описывающую: $keywords",
            'n' => 1,
            'size' => '256x256',
        ]);

        

        Log::info($response);

        // Get the image URL from the response
        $responseBody = $response->json();
        $imageUrl = $responseBody['data'][0]['url'] ?? null;

        // Download the image and save it locally
        if ($imageUrl) {
            // $imagePath = 'public/generated_images/' . time() . '.png';
            // Storage::put($imagePath, file_get_contents($imageUrl));
            // return $imagePath;

            return $imageUrl;
        }

        return null;
    }
}
