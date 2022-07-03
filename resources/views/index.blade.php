<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<a href="addStars">CLICK HERE</a>>
@if($stars)
    @foreach($stars as $star) <!-- Affichage Stars -->
        <div id="accordion-open" data-accordion="open">
            <h2 id="accordion-open-heading-1">
                <button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                    <span class="flex items-center"><svg class="w-2 h-2 shrink-0 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"></svg> {{ $star['Nom'] }} {{$star['Prenom']}}</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-open-body-2" aria-labelledby="accordion-open-heading-2">
                <div class="p-5 border border-gray-200 content dark:border-gray-700 dark:bg-gray-900 border-b-0">
                    <img class="object-scale-down h-48 w-96 md:object-scale-down" src="../public/img/{{ $star['Image'] }}" alt="star">
                    <p class="mt-2 text-gray-500 text-justify float-right dark:text-gray-400"> {{ $star['Description'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endif

<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
