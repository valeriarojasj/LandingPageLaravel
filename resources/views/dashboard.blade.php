<x-app-layout>
    <x-slot name="head">
    </x-slot>
    <!-- <x-slot name="header">
        <h2 class="text-xl font-bold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->
    <x-slot name="slot">
        <livewire:candidates-table />
    </x-slot>
</x-app-layout>
