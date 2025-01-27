<x-layout>
    <x-slot:title>
        Communications
    </x-slot:title>

    <div class="container mx-auto py-8">
        <h1 class="text-bordeaux text-2xl font-bold text-center mb-6">Overzicht berichten</h1>

        <!-- Bericht weergeven als een sessie een 'success'-bericht bevat -->
        @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <!-- Tabel met alle berichten -->
        <div class="overflow-x-auto mx-auto max-w-6xl">
            <!-- Link om een nieuwe beschikbaarheid te creëren -->
            <div class="justify-end mb-4">
                <a href="{{ route('communications.create') }}" 
                class="bg-[#5F1A37] text-white px-6 py-2 rounded shadow-md transition hover:bg-[#7a284d]">
                    Maak een nieuwe bericht aan
                </a>
            </div>
            <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md">
                <thead style="background-color: #5F1A37;" class="text-white">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">PatientId</th>
                        <th class="px-4 py-2 border border-gray-300">EmployeeId</th>
                        <th class="px-4 py-2 border border-gray-300">Bericht</th>
                        <th class="px-4 py-2 border border-gray-300">VerzondenDatum</th>
                    </tr>
                </thead>
                <tbody>
                    @if($communications->isEmpty())
                        <tr>
                            <td class="px-4 py-2 border border-gray-300 text-center bg-blue-100 align-middle h-16" colspan="6">Geen berichten gevonden</td>
                        </tr>
                    @else
                    @foreach($communications as $communication)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->PatientId }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->EmployeeId }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->Message }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->SentDate }}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
                <!-- Knop naar dashboard -->
                <div class="flex justify-end mt-4">
                <a href="/"
                class="bg-[#5F1A37] text-white px-6 py-2 rounded font-semibold shadow-md transition">Home pagina</a>
            </div>
            <!-- Paginatie Links -->
            <div class="mt-6">
                {{ $communications->links() }}
            </div>
    </div>
    </div>

</x-layout>