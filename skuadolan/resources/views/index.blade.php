<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>skuadolan.com</title>

        @include('layouts.cssExternal')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            @include('layouts.articlesContainerHome')

            @include('layouts.footer')
        </div>
        @include('layouts.scriptExternal')
    </body>
</html>