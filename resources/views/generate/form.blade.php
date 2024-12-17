@extends('layouts.app')

@section('title') Генерация страниц @endsection

@section('content')
<div class="container p-8 md:px-80">
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border text-xl border-green-400 text-green-700 rounded-md">
            {!! session('success') !!}
        </div>
    @endif
    <h1 class="text-2xl font-bold mb-6">Генерация страниц</h1>
    <form action="{{ route('generate.page') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Имя компании</label>
            <input 
                id="name" 
                name="name" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
                
        </div>
        <div>
            <label for="logo" class="block text-sm font-medium text-gray-700">Загрузите лого</label>
            <input 
                type="file"
                accept="image/*"
                id="logo" 
                name="logo" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            />
                
        </div>
        <div>
            <label for="language" class="block text-sm font-medium text-gray-700">Язык</label>
            <select 
                id="language" 
                name="language" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            >

                <option value="english">English</option>
                <option value="spanish">Español</option>
                <option value="chinese">中文</option>
                <option value="hindi">हिन्दी</option>
                <option value="arabic">العربية</option>

                <option value="Русский">Русский</option>
                <option value="kazakh">Қазақша</option>
                <option value="belarusian">Беларуская</option>
                <option value="uzbek">O‘zbekcha</option>
                <option value="kyrgyz">Кыргызча</option>
                <option value="armenian">Հայերեն</option>
                <option value="azerbaijani">Azərbaycan dili</option>
                <option value="tajik">Тоҷикӣ</option>
                <option value="moldovan">Română (Moldovenească)</option>
                <option value="turkmen">Türkmençe</option>

                
            </select>

        </div>
        <div>
            <label for="country" class="block text-sm font-medium text-gray-700">Страна</label>
            <select 
                id="country" 
                name="country" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            >


                <option value="usa">США</option>
                <option value="spain">Испания</option>
                <option value="china">Китай</option>
                <option value="india">Индия</option>
                <option value="saudi_arabia">Саудовская Аравия</option>
                <option value="russia">Россия</option>
                <option value="kazakhstan">Казахстан</option>
                <option value="belarus">Беларусь</option>
                <option value="uzbekistan">Узбекистан</option>
                <option value="kyrgyzstan">Киргизия</option>
                <option value="armenia">Армения</option>
                <option value="azerbaijan">Азербайджан</option>
                <option value="tajikistan">Таджикистан</option>
                <option value="moldova">Молдова</option>
                <option value="turkmenistan">Туркменистан</option>

                
            </select>

        </div>
        <div>
            <label for="keywords" class="block text-sm font-medium text-gray-700">Ключевые слова для сайта</label>
            <textarea 
                id="keywords" 
                name="keywords" 
                rows="4" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            ></textarea>
        </div>
        <div>
            <label for="country" class="block text-sm font-medium text-gray-700">Выберите нужный блок</label>
            <select 
                id="free_block" 
                name="free_block" 
                required 
                class="border outline-blue-700 p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
            >
                <option value="testimonials">Отзывы</option>
                <option value="team">Про команду</option>
                
            </select>
        </div>
        <div class="space-y-2 flex flex-col">
            <label for="country" class="block text-sm font-medium text-gray-700">Выберите нужны страницы</label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="pages[]" value="Aion" class="form-checkbox text-blue-500">
                <span class="ml-2">Главная</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="pages[]" value="Avatr" class="form-checkbox text-blue-500">
                <span class="ml-2">Политика конфиденциальности</span>
            </label>
            <label class="inline-flex items-center">
                <input type="checkbox" name="pages[]" value="Bj-Hyundai" class="form-checkbox text-blue-500">
                <span class="ml-2">Пользовательское соглашение</span>
            </label>
        </div>
            
        <button 
            type="submit" 
            class="flex justify-center items-center w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-md hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
        >
            <img src="/assets/magicpen.svg" alt="" class="me-4">
            Сгенерировать
        </button>
    </form>

    
</div>
@endsection
