<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;


class GenerateTextJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $language;
    protected $keywords;

    /**
     * Create a new job instance.
     *
     * @param string $language
     * @param string $keywords
     */
    public function __construct(string $language, string $keywords)
    {
        $this->language = $language;
        $this->keywords = $keywords;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            "cat1" => "ALL CATEGORIES",
            "cat2" => "FAQ",
            "cat3" => "TESTIMONIAL",
            "cat4" => "CONTACT US",
            "cat5" => "GET STARTED",
            "email_of_company" => "",
            "summary_about_company_60words" => null,
            "action_btn" => "GET STARTED",
            "header1" => "How the Platform is Useful",
            "subheader1" => "Our platform offers many opportunities for your self-development",
            "usefullness_of_product1_2words" => null,
            "usefullness_of_product1_description_13words" => null,
            "usefullness_of_product2_2words" => null,
            "usefullness_of_product2_description_13words" => null,
            "usefullness_of_product3_2words" => null,
            "usefullness_of_product3_description_13words" => null,
            "our_team" => "our_team",
            "experienced_team_members_who_built__this_incredible_product" => "experienced team members who built this incredible product",
            "team_member_1_name" => null,
            "team_member_1_occupation" => null,
            "team_member_1_bio_20words" => null,
            "team_member_2_name" => null,
            "team_member_2_occupation" => null,
            "team_member_2_bio_20words" => null,
            "team_member_3_name" => null,
            "team_member_3_occupation" => null,
            "team_member_3_bio_20words" => null,
            "header_for_categories" => null,
            "description_for_categories_55words" => null,
            "category1_name" => null,
            "category1_description" => null,
            "category2_name" => null,
            "category2_description" => null,
            "category3_name" => null,
            "category3_description" => null,
            "header_how_the_interaction_with_product_occur" => null,
            "description_how_the_interaction_with_product_occur" => null,
            "step1_name" => null,
            "step1_description" => null,
            "step2_name" => null,
            "step2_description" => null,
            "step3_name" => null,
            "step3_description" => null,
            "header_for_gallery" => null,
            "contact_us_header" => null,
            "contact_us_description" => null,
            "name" => "Name",
            "email" => "Email",
            "comment" => "Comment",
            "send" => "Send",
            "agree_to_privacy" => "I have read and understand the Privacy Policy",
            "address_of_company" => null,
            "copyright" => "All rights reserved",
            "privacy" => "Privacy Policy"
        ];

        $prompt = "i am generating website based on your content. i need relevant text, and generated names and stories for each sections of my website. in response i need from you a full json with added values where is was null and translated to the desired langiage where the value was present. the website is about " . $this->keywords . ". the language should be " . $this->language . ". give just json, not any other text in beginning and the end. i need the following keys ";

        $json = json_encode($data, JSON_PRETTY_PRINT);

        $message = $prompt . $json;

        Log::info("here it is 1 : ");



        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4o',
            'messages' => [
                ['role' => 'user', 'content' => $message]
            ],
        ]);
    
        // Extract and decode JSON content from the response
        $responseBody = $response->json();
    
        // Get the content field from the assistant's response
        $content = $responseBody['choices'][0]['message']['content'] ?? null;
    
        if ($content) {
            // Extract JSON from the response
            $start = strpos($content, '{');
            $end = strrpos($content, '}');
            if ($start !== false && $end !== false) {
                $jsonString = substr($content, $start, $end - $start + 1);
    
                // Convert JSON to PHP array
                $finalData = json_decode($jsonString, true);
    
                if (json_last_error() === JSON_ERROR_NONE) {
                    // Log the final data
                    Log::info('Generated Data:', $finalData);
    
                    // Store or pass the data to a view
                    $this->generateBladeView($finalData);
                } else {
                    Log::error('Failed to decode JSON: ' . json_last_error_msg());
                }
            } else {
                Log::error('JSON not found in response content');
            }
        } else {
            Log::error('No content found in response');
        }




    }

     

    private function generateBladeView(array $data)
    {
        // Use Laravel's view functionality to generate HTML
        $html = view('ai-generated-webpage', ['data' => $data])->render();

        // Store the HTML in a file or return it as needed

        Log::info('hello kunte !');
        Storage::put('generated_pages/generated-webpage.html', $html);

        // file_put_contents(public_path('generated-webpage.html'), $html);
    }



}
