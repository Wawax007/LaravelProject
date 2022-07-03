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
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="flex flex-col justify-center items-center mb-4">
    <form  id="addStars" action="addStars" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
            @csrf
        <h4 class="font-medium leading-tight text-2xl mt-0 mb-2 text-blue-600">Ajouter une star :</h4>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Nom">
                Nom
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Nom" name="Nom" type="text" placeholder="Nom">
        </div>
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Prenom">
                Prénom
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="Prenom" name="Prenom" type="text" placeholder="Prénom">
        </div>
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="file_input">Importer l'image</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="image/png, image/gif, image/jpeg"  id="file_input" name="Image" type="file">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Description">
                Description
            </label>
            <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="Description" name="Description" rows="3"></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded focus:outline-none focus:shadow-outline" type="submit">
                Ajouter la star
            </button>
        </div>
    </form>
</div>
</body>
</html>
