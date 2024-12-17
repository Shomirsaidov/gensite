<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сгенерированная страница</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        .text-brand {
            color: #82c5cb;
        }

        .text-brand-2 {
            color: #2b6c9e;
        }

        .bg-brand {
            background: #82c5cb;
        }

        .bg-brand-2 {
            background: #2b6c9e;
        }


        .scrollable::-webkit-scrollbar {
        display: none;
        }

        

        /* For Firefox */
       







    </style>
</head>
<body class=" text-gray-900">


    <div class="md:hidden border-b-2 bg-white space-y-4  px-10 py-4 text-center sticky top-0 z-10 ">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img width="70" style="max-height: 75px" src="./assets/logo.png" alt="">
                <h1 class="text-xl text-start" style="max-width: 160px;">{{ $data['company_name'] }}</h1>
            </div>
            <img class="menu_btn" src="https://raw.githubusercontent.com/mavlonotj/files/main/menu.svg" alt="">
        </div>

        <div class="hidden mobile_menu">
            <div class="flex flex-col justify-center items-center text-center space-y-3">
                <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#cats">{{ $data['cat1'] }}</a>
                <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#faq">{{ $data['cat2'] }}</a>
                <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#team">{{ $data['cat3'] }}</a>
                <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#contacts">{{ $data['cat4'] }}</a>
                <a class="block text-lg font-light p-2 px-4 bg-blue-300 text-white uppercase rounded hover:bg-indigo-600" href="#form">{{ $data['action_btn'] }}</a>
            </div>
        </div>
    </div>

    <header class="hidden md:flex justify-between items-center border-b-2 bg-white  px-10 py-3 text-center sticky top-0 z-10 ">
        
        <div class="flex items-center space-x-3">
            <img width="100" style="max-height: 75px" src="./assets/logo.png" alt="">
            <h1 class="text-xl text-start" style="max-width: 160px;">{{ $data['company_name'] }}</h1>
        </div>

        <div class="flex items-center space-x-8">
            <a href="#cats" class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" >{{ $data['cat1'] }}</a>
            <a href="#faq"  class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" >{{ $data['cat2'] }}</a>
            <a href="#team" class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" >{{ $data['cat3'] }}</a>
            <a href="#contacts" class="block text-lg font-light uppercase hover:border-b-2 border-blue-300">{{ $data['cat4'] }}</a>
            <a href="#form" class="block text-lg font-light p-2 px-4 bg-blue-300 text-white uppercase rounded hover:bg-indigo-600">{{ $data['action_btn'] }}</a>

        </div>

        <div class="flex space-x-3 items-center">
            <i class="fa-regular fa-envelope text-lg text-blue-300"></i>
            <span class="block text-lg">{{ $data['email_of_company'] }}</span>
        </div>
        
    </header>
    



    <div class="p-10 space-y-6 bg-gradient-to-b from-white to-blue-50">
        
        <div class="grid md:grid-cols-2 gap-4">
            <div class="space-y-4">
                <h2 class="text-3xl md:text-6xl">{{ $data['company_name'] }}</h2>
                <p class="leading-1 text-lg text-gray-600">{{ $data['summary_about_company_60words'] }}</p>
                <button class=" text-lg p-2 px-4 text-white  rounded bg-brand-2" href="">
                    <a href="#form">{{ $data['action_btn'] }}</a>
                </button>
            </div>
            <img width="587" class="rounded-lg" src="{{ $data['image_product_main_illustration_url'] }}" alt="">
        </div>
    
    </div>



        
          







    <div class="p-6 md:p-10 space-y-6" id="faq">

        <div class="bg-white">
            <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['header_usefullness_of_product'] }}</h2>
            <p class="text-xl text-center text-gray-600 mb-8">
              {{ $data['subheader_usefullness'] }}
            </p>
          
            <div class="flex flex-col lg:flex-row justify-center mt-6 items-center lg:items-center lg:space-x-8">
              <!-- Image Section -->
              <div class="flex-shrink-0 mb-8 lg:mb-0">
                <img width="580" src="{{ $data['image_illustration2_url'] }}" alt="Illustration" >
              </div>
          
              <!-- Text Section -->
              <div class="space-y-6">
                <!-- Sharing Experiences -->
                <div>
                  <h3 class="text-2xl font-semibold  text-brand">{{ $data['usefullness_of_product1_2words'] }}</h3>
                  <p class="text-lg text-gray-700">
                  {{ $data['usefullness_of_product1_description_13words'] }}
                  </p>
                </div>
                <!-- Network Opportunities -->
                <div>
                  <h3 class="text-2xl font-semibold text-brand">
                  {{ $data['usefullness_of_product2_2words'] }}
                  </h3>
                  <p class="text-lg text-gray-700">
                  {{ $data['usefullness_of_product2_description_13words'] }}
                  </p>
                </div>
                <!-- Personal Growth -->
                <div>
                  <h3 class="text-2xl font-semibold text-brand">
                  {{ $data['usefullness_of_product3_2words'] }}
                  </h3>
                  <p class="text-lg text-gray-700">
                    {{ $data['usefullness_of_product3_description_13words'] }}
                  </p>
                </div>
              </div>
            </div>
        </div>





        @if($options['free_block'] == 'team')
        <div id="team" class="pt-6">
            <div class="mt-10 text-center">
                <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['our_team'] }}</h2>
                <p class="text-xl text-center text-gray-600 mb-8">
                {{ $data['experienced_team_members_who_built__this_incredible_product'] }}
                </p>
            </div>
        
            <div class="flex justify-center">
                <div style="max-width: 80%;" class="scrollable flex space-x-4 overflow-x-auto snap-x snap-mandatory">
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" src="https://penfanion.website/ck_hub_0/img/Nandan-Nilekani3.png" alt="Profile 1" class="profile-pic rounded-full" />
                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['team_member_1_name_male'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['team_member_1_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['team_member_1_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" class="profile-pic rounded-full" src="https://raw.githubusercontent.com/mavlonotj/files/main/male2.png" alt="Image Description">

                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['team_member_2_name_male'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['team_member_2_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['team_member_2_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" src="https://penfanion.website/ck_hub_0/img/3.png" alt="Profile 1" class="profile-pic rounded-full" />
                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['team_member_3_name_female'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['team_member_3_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['team_member_3_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                </div>
            </div>
        </div>
        @endif






        @if($options['free_block'] == 'testimonials')
        <div class="pt-6" id="team">
            <div class="mt-10 text-center">
                <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['testimonials_header'] }}</h2>
                <p class="text-xl text-center text-gray-600 mb-8">
                {{ $data['testimonials_subheader'] }}
                </p>
            </div>
        
            <div class="flex justify-center">
                <div style="max-width: 80%;" class="scrollable flex space-x-4 overflow-x-auto snap-x snap-mandatory">
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" src="https://penfanion.website/ck_hub_0/img/Nandan-Nilekani3.png" alt="Profile 1" class="profile-pic rounded-full" />
                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['client_1_name_male'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['client_1_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['client_1_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" class="profile-pic rounded-full" src="https://raw.githubusercontent.com/mavlonotj/files/main/male2.png" alt="Image Description">

                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['client_2_name_male'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['client_2_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['client_2_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                    <div style="min-width: 500px;" class="space-y-3 flex flex-col justify-center items-center text-center bg-gray-100 rounded-xl p-4 cursor-pointer my-4 snap-center">
                        <img width="250" src="https://penfanion.website/ck_hub_0/img/3.png" alt="Profile 1" class="profile-pic rounded-full" />
                        <h3 class="font-semibold text-xl text-blue-800">{{ $data['client_3_name_female'] }}</h3>
                        <p class="font-semibold text-lg">
                        {{ $data['client_3_occupation'] }}
                        </p>
                        <p class="text-gray-800">
                        {{ $data['client_3_bio_20words'] }}
                        </p>
                        <!-- <a href="#" class="info-link">more info</a> -->
                    </div>
                </div>
            </div>
        </div>
        @endif

















        <div id="cats">
            <div class="mt-6 space-y-6 text-center px-4 py-10 md:px-80 ">
                <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['header_for_categories'] }}</h2>
                <p class="text-xl text-center text-gray-600 mb-8">
                {{ $data['description_for_categories_55words'] }}
                </p>
            </div>
    
    
    
            <div class="grid md:grid-cols-2 gap-4 p-4">
                <!-- Card 1 -->
                <div class="relative rounded-lg overflow-hidden shadow-lg">
                    <img
                        src="{{ $data['image_for_category1_url'] }}"
                        alt="IT Image"
                        class="w-full h-96 object-cover"
                    />
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-60 hover:bg-opacity-75 cursor-pointer flex flex-col justify-end p-4">
                        <h2 class="text-white text-2xl font-bold">
                            {{ $data['category1_name'] }}
                        </h2>
                        <p class="text-white text-sm">
                            {{ $data['category1_description'] }}
                        </p>
                    </div>
                </div>
            
                <!-- Card 2 -->
                <div class="relative rounded-lg overflow-hidden shadow-lg">
                    <img
                        src="{{ $data['image_for_category2_url'] }}"
                        alt="Theater Arts Image"
                        class="w-full h-96 object-cover"
                    />
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-60 hover:bg-opacity-75 cursor-pointer flex flex-col justify-end p-4">
                        <h2 class="text-white text-2xl font-bold">
                            {{ $data['category2_name'] }}
                        </h2>
                        <p class="text-white text-sm">
                            {{ $data['category2_description'] }}
                        </p>
                    </div>
                </div>
    
                <div class="relative rounded-lg overflow-hidden shadow-lg">
                    <img
                        src="{{ $data['image_for_category3_url'] }}"
                        alt="Theater Arts Image"
                        class="w-full h-96 object-cover"
                    />
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-60 hover:bg-opacity-75 cursor-pointer flex flex-col justify-end p-4">
                        <h2 class="text-white text-2xl font-bold">
                            {{ $data['category3_name'] }}
                        </h2>
                        <p class="text-white text-sm">
                            {{ $data['category3_description'] }}
                        </p>
                    </div>
                </div>
    
                <div class="relative rounded-lg overflow-hidden shadow-lg">
                    <img
                        src="{{ $data['image_for_category4_url'] }}"
                        alt="Theater Arts Image"
                        class="w-full h-96 object-cover"
                    />
                    <div class="absolute inset-0 bg-blue-900 bg-opacity-60 hover:bg-opacity-75 cursor-pointer flex flex-col justify-end p-4">
                        <h2 class="text-white text-2xl font-bold">
                            {{ $data['category4_name'] }}
                        </h2>
                        <p class="text-white text-sm">
                            {{ $data['category4_description'] }}
                        </p>
                    </div>
                </div>
    
            </div>
        </div>





        




    </div>


    <div class="bg-gray-100 py-8 p-6 md:p-10">
        <div class="mt-6 space-y-6 text-center">
            <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['header_how_the_interaction_with_product_occur'] }}</h2>
            <p class="text-xl text-center text-gray-600 mb-8">
                {{ $data['description_how_the_interaction_with_product_occur'] }}
            </p>
        </div>
    
        <div class="grid md:grid-cols-3 gap-4 p-12 mt-8 ">
            <!-- Step 1 -->
            <div class="text-center md:text-left flex flex-col justify-center items-center ">
                <div class="p-4 bg-brand rounded-full">
                    <img width="50" src="https://penfanion.website/ck_hub_0/img/icons/icon-2.png" alt="Step 1 Icon">
                </div>
              <h3 class="text-lg text-brand-2 font-bold mb-2">
              {{ $data['step1_name'] }}
              </h3>
              <p class="text-gray-600 text-lg text-center">
              {{ $data['step1_description'] }}
              </p>
            </div>
          
            <!-- Arrow -->
            
          
            <!-- Step 2 -->
            <div class="text-center md:text-left flex flex-col justify-center items-center">
                <div class="p-4 bg-brand rounded-full">
                    <img width="50" src="https://penfanion.website/ck_hub_0/img/icons/icon-4.png" alt="Step 1 Icon" >
                </div>
              <h3 class="text-lg text-brand-2 font-bold mb-2">
              {{ $data['step2_name'] }}
              </h3>
              <p class="text-gray-600 text-lg text-center">
              {{ $data['step2_description'] }}
              </p>
            </div>
          
            <!-- Arrow -->
            
          
            <!-- Step 3 -->
            <div class="text-center md:text-left flex flex-col justify-center items-center">
                <div class="p-4 bg-brand rounded-full">
                    <img width="50" src="https://penfanion.website/ck_hub_0/img/icons/ok.png" alt="Step 1 Icon" >
                </div>
              <h3 class="text-lg text-brand-2 font-bold mb-2">
              {{ $data['step3_name'] }}
              </h3>
              <p class="text-gray-600 text-lg text-center">
              {{ $data['step3_description'] }}
              </p>
            </div>


        </div>
    </div>


    <div class="p-10 space-y-6">

        <div>
            <h2 class="text-5xl text-center my-6">{{ $data['header_for_gallery'] }}</h2>

            <div class="grid grid-cols-2 gap-6 md:grid-cols-3 pt-4">

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_1_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_2_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_3_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_4_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_5_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>

                <div class="relative group w-full cursor-pointer">
                    <img src="{{ $data['image_gallery_6_url'] }}" alt="Hover Effect Image" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">                
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-xl font-bold">+</p>
                    </div>
                </div>
                

            </div>
        </div>

    </div>


    <div id="form" class="flex justify-center bg-gray-100 py-12">
        <div class="px-4 md:px-80">
                  <!-- Title -->
                <h2 class="text-3xl md:text-5xl text-center mb-4">{{ $data['contact_us_header'] }}</h2>
                <p class="text-xl text-center text-gray-600 mb-8">
                {{ $data['contact_us_description'] }}
                </p>
              
                  <!-- Form -->
                  <form class="mt-6 space-y-4" action="./accepted.html" method="GET">
                    <!-- Name and Email -->
                    <div class="flex flex-col sm:flex-row sm:space-x-4">
                      <div class="flex-1">
                        <input placeholder="{{ $data['name'] }}" type="text" id="name" class="mt-1 block w-full border  rounded-md shadow-sm outline-blue-500  p-3 focus:border-indigo-500 focus:ring-indigo-500">
                      </div>
                      <div class="flex-1 mt-4 sm:mt-0">
                        <input placeholder="{{ $data['email'] }}" type="email" id="email" class="mt-1 block w-full border  rounded-md shadow-sm outline-blue-500 p-3 focus:border-indigo-500 focus:ring-indigo-500">
                      </div>
                    </div>
              
                    <!-- Comment -->
                    <div>
                      <textarea placeholder="{{ $data['comment'] }}" id="comment" rows="4" class="mt-1 block w-full border rounded-md shadow-sm outline-blue-500 p-3 focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                    </div>
              
                    <!-- Submit Button -->
                    <div>
                      <button type="submit" class="w-full py-2 bg-brand text-white font-medium rounded-md shadow-sm hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      {{ $data['send'] }}
                      </button>
                    </div>
              
                    <!-- Privacy Policy -->
                    <div class="flex items-start space-x-2">
                      <input type="checkbox" id="privacy" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                      <label for="privacy" class="text-sm text-gray-600">
                      {{ $data['agree_to_privacy'] }}
                        </label>
                    </div>
                  </form>
              


        </div>
    </div>
    




    


    
    <div id="contacts" class="flex flex-col items-center justify-center text-lg space-y-6 py-16">
        <img width="130" src="./assets/logo.png" alt="">
        <div class="flex flex-col md:flex-row justify-center items-center space-x-8">
            <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#cats">{{ $data['cat1'] }}</a>
            <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#faq">{{ $data['cat2'] }}</a>
            <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#team">{{ $data['cat3'] }}</a>
            <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#contacts">{{ $data['cat4'] }}</a>
            <a class="block text-lg font-light uppercase hover:border-b-2 border-blue-300" href="#form">{{ $data['cat5'] }}</a>

        </div>
        <div class="flex items-center space-x-3">
            <i class="fa-solid fa-phone"></i>
            <span>{{ $data['phone_number_based_on_the_country'] }}</span>
        </div>

        <div class="flex items-center space-x-3 text-gray-800">
            <i class="fa-solid fa-map"></i>
            <span>{{ $data['address_of_company_based_on_the_country'] }}</span>
        </div>

    </div>






    
      



    <footer class="flex justify-between bg-gray-800 text-white text-center p-4 px-6 mt-6">
        <div>©2024 {{ $data['copyright'] }}</div>
        <div class="flex items-center space-x-6">
            <i class="text-sm fa-solid fa-phone"></i>
            <i class="fa-solid fa-envelope"></i>
        </div>
        <a class="underline" href="./privacy.html">{{ $data['privacy'] }}</a>
    </footer>



    <div class="hidden bg-white w-full cookies border-2 bottom-0 fixed flex flex-col justify-center items-center p-3">
        <div class="text-lg me-3 text-center">{{ $data['cookies_text'] }}</div>
        <div class="w-full flex justify-center">
            <button class="px-4 py-2 bg-brand-2 text-white cookies_acc">{{ $data['cookies_accept'] }}</button>
        </div>
    </div>






    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const scrollableDiv = document.querySelector(".scrollable");
        if (scrollableDiv) {
            scrollableDiv.scrollBy({
            left: 80, // Scroll 80px to the right
            behavior: "smooth" // Smooth scrolling animation
            });
        }
        });


        $('.menu_btn').on('click', () => {
            $('.mobile_menu').slideToggle();
        })


        $(document).ready(function() {
            console.log("Страница загружена и готова!");

            $('.cookies').fadeToggle();
            // Ваш код здесь
        });

        $('.cookies_acc').on('click', () => {
            $('.cookies').fadeToggle();
        })


    </script>




</body>
</html>
