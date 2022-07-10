<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./resources/js/app.js"></script>

    <title>Back Office des stars</title>

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

<a class="ml-4" href="index.php">HOME</a>

@if($stars)
    @foreach($stars as $star) <!-- Affichage Stars -->
    <div>
        <details class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl">
            <summary class="bg-inherit px-5 py-3 text-lg cursor-pointer">{{$star['Prenom']}} {{ $star['Nom'] }}
                <div class="img-fluid" style="display: flex; align-content: space-around; float: right;">
                    <a href="viewAddStars"><img style="max-width: 40%;height: auto;" src="../public/img/icons/add.png"></a>
                    <a><img style="max-width: 40%;height: auto; margin-left: 5%; margin-right: 5%" src="../public/img/icons/edit.png"></a>
                    <form method="POST" action="{{ route('stars.destroy', $star->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Etes vous sur de vouloir supprimer?')" ><img style="max-width: 40%;height: auto;" src="../public/img/icons/remove.png"></button>
                    </form>
                </div>
            </summary>
            <div class="bg-white px-5 py-3 border border-gray-300 text-sm font-light img-fluid" style="align-content: space-around;">
                <div style="display: flex; align-content: space-around; margin-left: 1%;">
                    <img class="object-scale-down h-48 w-96 md:object-scale-down img-fluid" src="../public/img/{{ $star['Image'] }}" alt="star">
                    <p class="mt-2 ml-2 text-gray-500 float-right dark:text-gray-400"> {{ $star['Description'] }}</p>
                </div>
            </div>
        </details>
    </div>
    @endforeach
@endif


<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>