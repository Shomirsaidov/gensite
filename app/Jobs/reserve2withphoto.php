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

class GenTextJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $language;
    public $keywords;
    public $country;
    public $name;
    public $projectDestination;

    /**
     * Create a new job instance.
     *
     * @param string $language
     * @param string $keywords
     * @param string $country
     * @param string $name
     * @param string $projectDestination

     */
    public function __construct(string $language, string $keywords, string $country, string $name)
    {
        $this->language = $language;
        $this->keywords = $keywords;
        $this->country = $country;
        $this->name = $name;

        Log::info("Job Initialized: ", [
            'language' => $this->language,
            'keywords' => $this->keywords,
            'country' => $this->country,
            'name' => $this->name,
        ]);

        $this->projectDestination = $this->name . time();


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            "company_name" => $this->name,
            "cat1" => "ALL CATEGORIES",
            "cat2" => "FAQ",
            "cat3" => "TESTIMONIAL",
            "cat4" => "CONTACT US",
            "cat5" => "GET STARTED",
            "email_of_company" => "",
            "summary_about_company_60words" => null,
            "action_btn" => "GET STARTED",
            "image_product_main_illustration" => "give me the keyword or item name primarily connected to the this company`s activity and de here",
            "image_illustration2" => "give me the keyword or item name really connected to the this company`s activity here",
            "header_usefullness_of_product" => null,
            "subheader_usefullness" => null,
            "usefullness_of_product1_2words" => null,
            "usefullness_of_product1_description_13words" => null,
            "usefullness_of_product2_2words" => null,
            "usefullness_of_product2_description_13words" => null,
            "usefullness_of_product3_2words" => null,
            "usefullness_of_product3_description_13words" => null,
            "our_team" => "Our Team",
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
            "image_for_category1" => "give me the word for searching image relevent to this category",
            "category2_name" => null,
            "category2_description" => null,
            "image_for_category2" => "give me the word for searching image relevent to this category",
            "category3_name" => null,
            "category3_description" => null,
            "image_for_category3" => "give me the word for searching image relevent to this category",
            "category4_name" => null,
            "category4_description" => null,
            "image_for_category4" => "give me the phrase for searching image relevent to this category",
            "header_how_the_interaction_with_product_occur" => null,
            "description_how_the_interaction_with_product_occur" => null,
            "step1_name" => null,
            "step1_description" => null,
            "step2_name" => null,
            "step2_description" => null,
            "step3_name" => null,
            "step3_description" => null,
            "header_for_gallery" => null,
            "image_gallery_1" => "give me the keyword or item name really connected to the this company`s activity here",
            "image_gallery_2" => "give me the keyword or item name really connected to the this company`s activity here",
            "image_gallery_3" => "give me the keyword or item name really connected to the this company`s activity here",
            "image_gallery_4" => "give me the keyword or item name really connected to the this company`s activity here",
            "image_gallery_5" => "give me the keyword or item name really connected to the this company`s activity here",
            "image_gallery_6" => "give me the keyword or item name really connected to the this company`s activity here",
            "contact_us_header" => null,
            "contact_us_description" => null,
            "name" => "Name",
            "email" => "Email",
            "comment" => "Comment",
            "send" => "Send",
            "agree_to_privacy" => "I have read and understand the Privacy Policy",
            "address_of_company_based_on_the_country" => null,
            "copyright" => "All rights reserved",
            "privacy" => "Privacy Policy",
            "phone_number_based_on_the_country" => null
        ];

        $prompt = "i am generating website based on your content. i need relevant text, and generated names (only male names) and stories for each sections of my website, and description of photos. in response i need from you a full json with added values where it was null and translated to the desired language where the value was present (dont translate company_name). the website is about " . $this->keywords . ". the language should be " . $this->language . ". the country of the product is " . $this->country . ".give just json, not any other text in beginning and the end. i need the following keys :";

        $json = json_encode($data, JSON_PRETTY_PRINT);

        $message = $prompt . $json;

        Log::info("here it is 1 : ");

        try {
            $response = retry(4, function () use ($message) {
                return Http::withHeaders([
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                ])->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-4o',
                    'messages' => [
                        ['role' => 'user', 'content' => $message]
                    ],
                ]);
            }, 2000); // Retry up to 4 times, with a delay of 1 second (1000ms) between attempts

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


                        $this->generateImages($finalData);

                    } else {
                        Log::error('Failed to decode JSON: ' . json_last_error_msg());
                    }
                } else {
                    Log::error('JSON not found in response content');
                }
            } else {
                Log::error('No content found in response');
            }
        } catch (\Exception $e) {
            Log::error('Request failed after retries: ' . $e->getMessage());
        }
    }


    private function generateImages(array $data) {



        foreach ($data as $key => $value) {
            // Check if the key starts with 'image'
            if (strpos($key, 'image') === 0) {
                
                Log::info("Bismillah, started generating image...");

                $response = retry(5, function () use ($value) {
                    return Http::withHeaders([
                        'Authorization' => 'Client-ID ' . env('UNSPLASH_ACCESS_KEY'),
                    ])->get('https://api.unsplash.com/search/photos', [
                        'query' => $value,
                        'orientation' => 'landscape',
                        // 'color' => 'blue',
                        'page' => 1,
                        'per_page' => 2,
                    ]);
                }, 1500); // Retry 3 times with a 1500ms delay between retries
                
                $responseBody = $response->json(); // Converts response to an associative array

                
                if (isset($responseBody['results']) && count($responseBody['results']) > 0) {
                    $image = $responseBody['results'][0]; // Get the first image in the results
                    $regularImageUrl = $image['urls']['regular'] ?? null; // Extract the 'regular' size URL
                    Log::info("Regular size image URL: " . $regularImageUrl);
                    $data[$key . '_url'] = $regularImageUrl;

                } else {
                    $data[$key . '_url'] = 'https://via.placeholder.com/600x600/0000FF/FFFFFF?text=' . $this->name;

                    Log::info("No images found in the response.");
                }
                

                // Download the image and save it locally
                // if ($imageUrl) {
                //     $imagePath = $this->projectDestination . '/assets' . '/' . $key  . '.png';
                //     Storage::disk('public')->put($imagePath, file_get_contents($imageUrl));
                // }


            }
        }

        $this->generateBladeView($data);


    }
     

    private function generateBladeView(array $data)
    {
        // Use Laravel's view functionality to generate HTML
        $html = view('templates.page-test', ['data' => $data])->render();

        // Store the HTML in a file or return it as needed

        Storage::disk('public')->put($this->projectDestination . '/index.html', $html);

        Log::info('hello kunte !');

        // Storage::put('generated_pages/generated-webpage.html', $html);

        // file_put_contents(public_path('generated-webpage.html'), $html);
    }



}
