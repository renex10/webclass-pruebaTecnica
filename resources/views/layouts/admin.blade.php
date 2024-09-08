<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('backend/admin/webclass-logo-nuevo.ico') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('backend/admin/webclass-logo-nuevo.ico') }}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!----FONTAWESONE--->
        <script src="https://kit.fontawesome.com/8c5fb25a16.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" 
    :class="{'overflow-hidden':open}"
    x-data = "{open:false}">



@include('layouts.includes.admin.nav')
@include('layouts.includes.admin.aside')
          

          
          <div class="p-4 sm:ml-64">
             <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

               {{ $slot }}
               
             </div>
          </div>
          


  

{{--         <div class="min-h-screen bg-gray-100"> --}}
    {{--         @livewire('navigation-menu') --}}



            <!-- Page Content -->
    {{--         <main>
                {{ $slot }}
            </main> --}}
{{--         </div> --}}

        @stack('modals')

        @livewireScripts
        @if (session('swal'))
        <script>

            Swal.fire(@json(session('swal')));
  
        </script>
    @endif
    
      
    </body>
</html>
