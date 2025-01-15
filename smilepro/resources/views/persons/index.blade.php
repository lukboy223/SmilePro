<!-- resources/views/persons/index.blade.php -->

<x-layout>

    <x-slot:title>
        Patients Overview
    </x-slot:title>

    <!-- Main Content -->
    <div class="container mx-auto py-8 w-7/8 p-8">
        <h1 class="text-2xl font-bold text-center mb-6">Patients</h1>
        <div class="flex justify-center">
            <div class="w-full max-w-6xl">

                <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
                    <thead style="background-color: #5F1A37;" class="text-white">
                        <tr>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Patient Number</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">First Name</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Middle Name</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Last Name</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Birth Date</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Medical Record</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($persons->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center px-2 py-1 border border-gray-300"> Er is een probleem opgetreden bij het ophalen van de Patienten. Probeer het later
                                    opnieuw.</td>
                            </tr>
                        @else
                            @foreach ($persons as $person)
                                <tr class="text-center hover:bg-gray-50">
                                    <td class="px-2 py-1 border border-gray-300">{{ $person->Number }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $person->FirstName }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $person->MiddleName }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $person->LastName }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $person->BirthDate }}</td>
                                    <td class="px-2 py-1 border border-gray-300"
                                        style="min-width: 400px; max-width: 600px;">{{ $person->MedicalRecord }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <!-- Pagination Links for Persons -->
                
                <div class="mt-4">
                    {{ $persons->links() }}
                </div>
                <!-- Dashboard button -->
                <div class="flex justify-end mt-4">
                    <a href="/" style="background-color: #5F1A37;"
                        class="text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
