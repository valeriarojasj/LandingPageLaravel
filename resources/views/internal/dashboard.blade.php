<x-app-layout>
    <x-slot name="head">
    <link rel="stylesheet" href="{{ asset('css/candidates-table.css') }}">
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
