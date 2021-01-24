<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Aca comienza Datatables -->
         <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

         <!--Regular Datatables CSS-->
         <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
         <!--Responsive Extension Datatables CSS-->
         <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
         <!--Button Extension Datatables CSS-->
         <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
         <!--Button Extension Datatables CSS-->
         
         <style>
             /* Overrides to match the Tailwind CSS */
     
             .dataTables_wrapper {
                 padding-top: 0.25rem;
                 padding-bottom: 0.25rem
             }
     
             table.dataTable.no-footer {
                 border-bottom-width: 1px;
                 border-color: #d2d6dc
             }
     
             table.dataTable tbody td, table.dataTable tbody th {
                 padding: 0.75rem 1rem;
                 border-bottom-width: 1px;
                 border-color: #d2d6dc
             }
     
             div.dt-buttons {
                 padding: 1rem 1rem 1rem 1rem;
                 display: flex;
                 align-items: center
             }
     
             .dataTables_filter, .dataTables_info {
                 padding: 1rem
             }
     
             .dataTables_wrapper .dataTables_paginate {
                 padding: 1rem
             }
     
             .dataTables_filter label input {
                 padding: 0.5rem;
                 border-width: 2px;
                 border-radius: 0.5rem
             }
     
             .dataTables_filter label input:focus {
                 box-shadow: 0 0 0 3px rgba(118, 169, 250, 0.45);
                 outline: 0
             }
     
             table.dataTable thead tr {
                 border-radius: 0.5rem
             }
     
             table.dataTable thead tr th:not(.text-center) {
                 text-align: left
             }
     
             table.dataTable thead tr th {
                 background-color: #edf2f7;
                 border-bottom-width: 2px;
                 border-top-width: 1px;
                 border-color: #d2d6dc
             }
     
             .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:not(.disabled), button.dt-button {
                 transition-duration: 150ms;
                 transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                 transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
                 letter-spacing: 0.1em;
                 text-transform: uppercase;
                 color: #374151 !important;
                 box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                 font-size: 0.75rem;
                 font-weight: 600;
                 align-items: center;
                 display: inline-flex;
                 border-width: 1px !important;
                 border-color: #d2d6dc !important;
                 border-radius: 0.375rem;
                 background: #ffffff;
                 overflow: visible;
                 margin-bottom: 0
             }
     
             .dataTables_wrapper .dataTables_paginate .paginate_button.next:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:hover:not(.disabled), button.dt-button:focus, button.dt-button:focus:not(.disabled), button.dt-button:hover, button.dt-button:hover:not(.disabled) {
                 background-color: #edf2f7 !important;
                 border-width: 1px !important;
                 border-color: #d2d6dc !important;
                 color: #374151 !important
             }
     
             .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled) {
                 background: #6875f5 !important;
                 color: #ffffff !important;
                 border-color: #8da2fb !important
             }
     
             .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                 background-color: #8da2fb !important;
                 color: #ffffff !important;
                 border-color: #8da2fb !important
             }
     
             .dataTables_length select {
                 padding: .25rem;
                 border-radius: .25rem;
                 background-color: #edf2f7;
             }
     
             .dataTables_length {
                 padding-top: 1.25rem;
             }
         </style>
         
  <!-- Aca termina Datatables -->
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    <!--- SCRIPTSSSSSS  -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script>
        {{ $head }}
    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <!-- <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div> -->
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <script type="text/javascript" src="{{ asset('js/applicationForm.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
