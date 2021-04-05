<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>

    <!--favicon-->
    <!--estilos-->
</head>
<body>


    <div class="container mx-auto">
        <div class="grid gap-y-2">
             <!--header-->
            <div class="bg-green-200">
                <a href="{{ route('home') }}">
                    <h1>Proyecto Universidad</h1>
                </a>
            </div>
            <!--nav-->
            <div class="bg-green-400">

                    <h1>Menu</h1>

            </div>
            <!--cont-->
            <div class="grid grid-cols-4 gap-x-4 gap-y-1">
                <div class="bg-green-100 col-span-2">
                    @yield('content')
                </div>
                <div class="bg-green-300">c</div>
                <div class="bg-green-400">d</div>
            </div>
            <!--footer-->
            <div class="grid grid-flow-col grid-rows-3 gap-x-4 gap-y-1">
                <div class="bg-blue-100">1</div>
                <div class="bg-blue-200">2</div>
                <div class="bg-blue-300">3</div>

            </div>

        </div>



    </div>





    <!--scripts-->
</body>
</html>

