<x-app-layout>
    <x-slot name="head">
    <link rel="stylesheet" href="{{ asset('css/candidates-table.css') }}">
    <!-- Aca comienza Datatables -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!--Button Extension Datatables CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <!--Button Extension Datatables CSS-->
    <!-- Aca termina Datatables -->
    </x-slot>
    <!-- <x-slot name="header">
        <h2 class="text-xl font-bold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->
    <x-slot name="slot">
        <livewire:internal.candidates-table/>
    </x-slot>
</x-app-layout>
