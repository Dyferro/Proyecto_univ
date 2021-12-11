@extends('layout.layout')

@section('title','Insertar Profesor')

@section('content')
<!-- Estilos -->
<style>
    .-z-1 {
      z-index: -1;
    }

    .origin-0 {
      transform-origin: 0%;
    }

    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }

    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
</style>

<!-- Formulario -->
<div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
        <h1 class="text-2xl font-bold mb-8">Insertar Profesor</h1>

        <form action="{{route('profesors.store')}}" method="POST" novalidate>
            @csrf

            <!-- Nombre y Apellidos -->
            <div class="relative z-0 w-full mb-5">
                <input
                  type="text"
                  name="nombre"
                  value="{{old('nombre')}}"
                  placeholder=" "
                  required
                  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nombre y Apellidos </label>
               @error('nombre')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>

            <!-- Direccion Particular -->
            <div class="relative z-0 w-full mb-5">
                <input
                  type="text"
                  name="direccion"
                  value="{{old('direccion')}}"
                  placeholder=" "
                  required
                  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Dirección particular </label>
                
                @error('direccion')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>

            <!-- Asignatura -->
            <div class="relative z-0 w-full mb-5">
                <select placeholder=" "
                required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                 name="asignatura"
                 value=""
                 onclick="this.setAttribute('value', this.value);"
                 id="">
                 <option value="" selected disabled hidden> </option>
                    @foreach ($asignaturas as $asignatura)
                        <option  value="{{$asignatura->nombre}}">{{$asignatura->nombre}}</option>
                    @endforeach
                </select>

                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Asignatura</label>
                 @error('asignatura')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>

            <!-- Radiobuttons -->
            <fieldset class="relative z-0 w-full p-px mb-5">
                <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Es guía</legend>
                <div class="block pt-3 pb-2 space-x-4">
                  <label>
                    <input
                      type="radio"
                      name="esguia"
                      id="siguia"
                      value="1"
                      class="mr-2 text-indigo border-2 border-gray-300 focus:border-gray-300 focus:ring-indigo"
                       />
                    Sí
                  </label>
                  <label>
                    <input
                      type="radio"
                      name="esguia"
                      id="noguia"
                      value="0"
                      class="mr-2 text-indigo border-2 border-gray-300 focus:border-gray-300 focus:ring-indigo"
                     />
                    No
                  </label>
                   @error('esguia')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
                </div>
              
            </fieldset>
           

            <!-- Seleccionar el Nombre del grupo -->
            <div class="relative z-0 w-full mb-5" name="blogru"  id="mostrargrupo" style="display: none">
                <select
                placeholder=" "
                required
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                name="grupo"
                value=""
                onclick="this.setAttribute('value', this.value);"
                id="selgrupo">
                <option value="" selected disabled hidden></option>
                @foreach ($grupos as $grupo)
                <option  value="{{$grupo->nombregrupo}}">{{$grupo->nombregrupo}}</option>
                @endforeach                   
                    
                </select>

                <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Grupo </label>
                 @error('grupo')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>

             <!-- No Grupo -->
            <div class="relative z-0 w-full mb-5" id="singrupo" style="display: none">
                <input
                  type="text"
                  name="grupo"
                  value=" - "
                  readonly
                  id="ngrupo"
                  placeholder=" "
                  required
                  class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500"> Sin Grupo  </label>
                
            </div> 


            <!-- Catedra -->
            <div class="relative z-0 w-full mb-5">
                <select placeholder=" "
                required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" name="catedra" id="">
                <option value=""></option>
                <option value="Ciencias Sociales"> Ciencias Sociales</option>
                <option value="Ciencias Exactas"> Ciencias Exactas</option>
                <option value="Lenguas Extrangeras"> Lenguas Extrangeras</option>
                <option value="Cultura General Integral"> Cultura General Integral</option>
                </select>

                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Cátedra </label>
                @error('catedra')
                <br/>
                <x-alert>
                        *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>

            <!-- Edad OK -->
            <div class="relative z-0 w-full mb-5">
                <input
                  type="number"
                  name="edad"
                  value="{{old('edad')}}"
                  placeholder=" "
                  required
                  class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                />
                <label  class="absolute duration-300 top-3  -z-1 origin-0 text-gray-500">Edad : </label>
                
                 @error('edad')
                <br/>
                <x-alert>
                    *{{$message}}
                </x-alert>
                <br/>
                @enderror 
            </div>


            <br/>
            <br/>
            <button id="button"
             class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-indigo-500 hover:bg-indigo-600 hover:shadow-lg focus:outline-none" 
             type="submit">
             Insertar
            </button>

        </form>
    </div>
</div>

@endsection

@section('javascript')

<script type="text/javascript">

document.getElementById('siguia').addEventListener('click', Mostrar);
document.getElementById('noguia').addEventListener('click', NoMostrar);

function Mostrar() {
  // Show error message
  document.getElementById('mostrargrupo').style.display= 'block';
  document.getElementById('singrupo').style.display= 'none';
  document.getElementById('ngrupo').setAttribute('name','nuevo');
  }

  function NoMostrar() {
  // Show error message
  document.getElementById('mostrargrupo').style.display= 'none';
  document.getElementById('singrupo').style.display= 'block';
  }
</script>

@endsection
