<x-layout>
    <x-slot:title>
        Appointment Statistics
    </x-slot:title>

    <section class="text-white-800">
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold">Overview Statistieken</h1>
            <p class="text-gray-600">Hier vindt u een overzicht van alle afspraken en de details, gecategoriseerd per jaar.</p>
    
            <div class="overflow-x-auto">
                <table class="table-auto w-6/7 mx-auto bg-white border-collapse border border-gray-200 shadow-md">
                    <thead class="bg-[#5F1A37] text-white">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300">Jaar</th>
                            <th class="px-4 py-2 border border-gray-300">Datum</th>
                            <th class="px-4 py-2 border border-gray-300">Verdiensten</th>
                            <th class="px-4 py-2 border border-gray-300">Beschrijving</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paginatedGroupedTreatments as $year => $treatments)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300" colspan="4">{{ $year }}</td>
                            </tr>
                            @foreach($treatments as $treatment)
                                <tr>
                                    <td class="px-4 py-2 border border-gray-300"></td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $treatment->Date }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $treatment->cost }}</td>
                                    <td class="px-4 py-2 border border-gray-300">{{ $treatment->description }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="px-4 py-2 border border-gray-300 font-bold" colspan="2">Totale inkomsten voor {{ $year }}</td>
                                <td class="px-4 py-2 border border-gray-300 font-bold" colspan="2">€{{ $totalCosts[$year] }}</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border border-gray-300 font-bold" colspan="2">Totaal aantal afspraken voor {{ $year }}</td>
                                <td class="px-4 py-2 border border-gray-300 font-bold" colspan="2">{{ $totalAppointments[$year] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Add pagination links -->
            <div class="mt-4">
                {{ $paginatedGroupedTreatments->links() }}
            </div>
        </div>
    </section>
</x-layout>