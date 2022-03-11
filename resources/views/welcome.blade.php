<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>crmlaravel</title>

        <div id="app">

            <app-component></app-component>

        </div>

       

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.scss') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     
    </head>
    <body class="antialiased">
       <div id="app">


       </div>

       <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
