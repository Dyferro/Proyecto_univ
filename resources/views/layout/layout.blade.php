<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>

    <!--favicon-->
    <!--estilos-->
    <style>
        .active {
            color: brown;
            font-weight: bold;
        }
    </style>
</head>
<body>


    <div class="container mx-auto">
        <div class="grid gap-y-2">
             <!--header-->
             @include('components.header')

            <!--cont-->
            <div class="grid grid-cols-4 gap-x-4 gap-y-1">
                <div class="bg-green-100 col-span-2">
                    @yield('content')
                </div>
                <div class="bg-green-300">c</div>
                <div class="bg-green-400">d</div>
            </div>
            <!--footer-->
            @include('components.footer')

        </div>



    </div>





    <!--scripts-->
</body>
</html>

