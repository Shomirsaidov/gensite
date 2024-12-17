
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/brand/logo.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta property="og:title" content="mavlono.tj - шеърҳо" /> 
    <meta property="og:description" content="Нахустин сомонаи иҷтимоӣ барои ҳаводорони шеъри тоҷикӣ" /> 
    <meta property="og:type" content="website" /> <meta property="og:url" content="https://mavlono.tj" />
    <meta property="og:image" content="https://mavlono.tj/assets/brand/logo.png" /> 
    <meta property="og:site_name" content="mavlono.tj" />
    
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    
    
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/assets/final.css" rel="stylesheet">
</head>
<body>
    

    @yield('content')


</body>
</html>