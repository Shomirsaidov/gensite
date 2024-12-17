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
    


    <main class="px-4 md:px-12 py-12">

        <div class="flex justify-between flex-wrap items-center">
            <img src="https://img.clipart-library.com/2/clip-check-mark-gif/clip-check-mark-gif-34.gif" alt="">
            <h1 class="text-2xl font-bold">{{ $data['your_request_accepted'] }}</h1>

        </div>


        

    </main>


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
        <a class="underline" href="">{{ $data['privacy'] }}</a>
    </footer>


    <script>
        


        $('.menu_btn').on('click', () => {
            $('.mobile_menu').slideToggle();
        })


        


    </script>


</body>
</html>