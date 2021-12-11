<!-- Dark Header component -->
 <!-- Fontswesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>

 <header class="text-gray-100 bg-gray-800 body-font shadow w-full rounded-lg">
     <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
         <nav class="flex lg:w-4/5 flex-wrap items-center text-base md:ml-auto">
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{ route('home') }}">Inicio</a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{route('asignaturas.index')}}" >Asignaturas</a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{route('grupos.index')}}">Grupos </a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{ route('plan-estudios') }}">Plan de estudios</a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{route('profesors.index')}}">Profesores</a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{route('estudiantes.index')}}">Estudiantes</a>
            <a class="mr-5 hover:text-gray-500 cursor-pointer border-b border-transparent hover:border-indigo-600" href="{{route('contacto.index')}}">Contacto</a>
         </nav>



     </div>
 </header>
