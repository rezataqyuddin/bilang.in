<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bilangin.ai</title>
    <meta name="keywords" content="AI, NLP, Sentiment Analysis">
    <meta name="description" content="An AI Engine to extract Sentiment Analysis from input Review / Comments">
    <meta name="author" content="Reza Taqyuddin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css') }}/normalize.css" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="min-h-screen py-6 w-24 flex flex-col justify-center sm:py-12">
        <div class="py-3 sm:max-w-xl sm:mx-auto">
            @if(session()->has('message'))
            <div class="flex-col bg-green-300 p-2 rounded-md">
                <p class="text-green-600">{{session()->get('message')}}</p>
            </div>
            @endif
            <div class="min-w-max flex flex-col rounded-xl">
                <div class="px-12 py-5">
                    <h2 class="text-gray-800 text-5xl font-semibold">Your opinion <br> matters</h2>
                </div>
                <div class="w-full flex flex-col items-center">
                    <div class="w-1 flex flex-col">
                        <form action="" method="post">
                            @csrf
                            <textarea rows="3" name="comments" class="p-4 text-gray-500 ring ring-green-500 border-0 rounded-xl resize-none">Leave a message, if you want</textarea>
                            <br>
                            <button class="py-3 my-8 text-lg rounded-xl" type="submit">Rate now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>