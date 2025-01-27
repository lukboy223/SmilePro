<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Je bent ingelogged!") }}
                    {{ __("Als een medewerker") }} <br> <br>
                    <a href="{{route('treatment.index')}}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded mx-4">Behandeling overzicht</a>
                    <a href="{{route('availability.index')}}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded mx-4">Beschikbaarheid overzicht</a>
                    <a href="/patients" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded mx-4 mt-3">Patient overzicht</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>