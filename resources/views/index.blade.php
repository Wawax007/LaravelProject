<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./resources/js/app.js"></script>

    <title>Ajouter Star</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
<a class="ml-4" href="backoffice">BACK OFFICE</a>
@if($stars)
    @foreach($stars as $star) <!-- Affichage Stars -->
    <div>
        <details class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl">
            <summary class="bg-inherit px-5 py-3 text-lg cursor-pointer">{{$star['Prenom']}} {{ $star['Nom'] }}</summary>
            <div class="bg-white px-5 py-3 border border-gray-300 text-sm font-light" style="align-content: space-around;">
                <div style="display: flex; align-content: space-around; margin-left: 1%;">
                    <img class="object-scale-down h-48 w-96 md:object-scale-down sm:object-scale-down lg:object-scale-down" src="../public/img/{{ $star['Image'] }}" alt="{{$star['Prenom']}} {{ $star['Nom'] }}">
                    <p class="ml-2 text-gray-500 float-right dark:text-gray-400 md:text-sm "> {{ $star['Description'] }}</p>
                </div>
            </div>
        </details>
    </div>
    @endforeach
@endif



</body>
</html>
