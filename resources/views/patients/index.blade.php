
<x-layout>
    <x-slot:title>
        Patienten Overzicht
    </x-slot:title>

    <h1 class="text-center mt-4">Patienten Overzicht</h1>
    
    @if (session('success'))
    <div class="alert alert-success w-10/12 m-auto text-center">
        {{ session('success') }}
    </div>
    @endif
    
    {{-- Table to display the list of patients --}}
    <div class="p-4">
        {{-- Button to navigate to the create patient form --}}
        <div class="p-4">
            <button type="button" style="background-color: #5F1A37;"
            class=" m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition"
            onclick="window.location.href='{{ route('patients.create') }}'">
            Nieuwe Patient Toevoegen
        </button>
        {{-- Link to navigate to the dashboard --}}
        <a type="submit" href="/" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition">
            Dashboard
        </a>        
        <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
            <thead style="background-color: #5F1A37;" class="text-white">
            <tr>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Patient nummer</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Voornaam</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Tussenvoegsel</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Achternaam</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Geboortedatum</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"T>Medisch dossier</th>
                <th class="px-4 py-1 border border-gray-300 whitespace-nowrap text-center"A>Acties</th>
            </tr>
        </thead>
        <tbody>
            {{-- Check if there are any patients --}}
            @if ($persons->isEmpty())
                <tr>
                    <td colspan="6" class="text-center px-2 py-1 border border-gray-300">
                        Er is een probleem opgetreden bij het ophalen van de Patienten. Probeer het later opnieuw.
                    </td>
                </tr>
            @else
                {{-- Loop through each patient and display their details --}}
                @foreach ($persons as $person)
                    <tr class="text-center hover:bg-gray-50">
                        <td class="px-2 py-1 border border-gray-300">{{ $person->Number }}</td>
                        <td class="px-2 py-1 border border-gray-300">{{ $person->FirstName }}</td>
                        <td class="px-2 py-1 border border-gray-300">{{ $person->MiddleName }}</td>
                        <td class="px-2 py-1 border border-gray-300">{{ $person->LastName }}</td>
                        <td class="px-2 py-1 border border-gray-300">{{ $person->DateOfBirth }}</td>
                        <td class="px-2 py-1 border border-gray-300" style="min-width: 400px; max-width: 600px;">
                            {{ $person->MedicalRecord }}
                        </td>
                         <td class="px-2 py-1 border border-gray-300">
                            {{-- Edit button  --}}
                            <a style="background-color: #5F1A37; color: white;" href="{{ route('patients.edit', $person->id) }}" class="btn">
                                Bewerken
                            </a>
                            <form action="{{ route('patients.destroy', $person->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="background-color: #d9534f; color: white;">
                                    Verwijderen
                                </button>
                            </form>
                        </td> 
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    </div>

    {{-- Pagination links --}}
    <div class="p-4">
        {{ $persons->links() }}
    </div>

    
</div>
</x-layout>