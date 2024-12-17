<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница в генерации...</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <div class="flex items-center justify-center mb-6">
            <div class="w-16 h-16 border-4 border-t-blue-500 border-gray-300 rounded-full animate-spin"></div>
        </div>
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Страница в генерации </h1>
        <p class="text-2xl font-semibold text-gray-700 animate-pulse">Архив с файлами скачается автоматически (это может занять около минуты)</p>
        <div class="mt-6">
            <a href="{{ url('/generate') }}" class="px-6 py-3 bg-blue-500 text-white text-lg rounded-lg hover:bg-blue-600 transition duration-300">
                Сгенерировать новую страницу
            </a>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.reload();
        }, 10000);
    </script>


</body>
</html>
