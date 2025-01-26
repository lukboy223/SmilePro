<x-layout>
    <x-slot:title>
        Nieuwe Patient Toevoegen
    </x-slot:title>

    <h1 class="text-center mt-4">Nieuwe Patient Toevoegen</h1>

    {{-- Form to create a new patient --}}
    
    
<div class="p-4bg-white p-6 rounded mx-auto" style="max-width: 600px;">
    
    {{-- Button to navigate to the patients overview page --}}
    <div class="flex justify-between p-4">
        <button type="button" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition"
            onclick="window.location.href='{{ route('patients.index') }}'">
            Patient overzicht
        </button>
        {{-- Link to navigate to the dashboard --}}
        <a type="submit" href="/" style="background-color: #5F1A37;"
            class="text-white px-6 py-2 rounded font-semibold shadow-md transition">
            Dashboard
        </a>
    </div>

    <div class="p-4bg-white p-6 rounded shadow-md mx-auto" >
        
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            @method('POST')
            
            {{-- First Name field --}}
            <div class="mb-4">
                <label for="FirstName" class="block text-gray-700">Voornaam:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="FirstName" name="FirstName" required>
                @error('FirstName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Middle Name field --}}
            <div class="mb-4">
                <label for="MiddleName" class="block text-gray-700">Tussenvoegsel:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="MiddleName" name="MiddleName">
                @error('MiddleName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Last Name field --}}
            <div class="mb-4">
                <label for="LastName" class="block text-gray-700">Achternaam:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="text" id="LastName" name="LastName" required>
                @error('LastName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Number field --}}
            <div class="mb-4">
                
                    <label for="Number" class="block text-gray-700">Patient nummer</label>
                    <input type="text" name="Number" id="Number" class="w-full px-4 py-2 border rounded" required>
                 @error('Number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Birth Date field --}}
            <div class="mb-4">
                <label for="DateOfBirth" class="block text-gray-700">Geboorte Datum:</label>
                <input class="form-control w-full px-4 py-2 border rounded" type="date" id="DateOfBirth" name="DateOfBirth" required>
                @error('DateOfBirth')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Medical Record field --}}
            <div class="mb-4">
                <label for="MedicalRecord" class="block text-gray-700">Medisch Dossier:</label>
                <textarea class="form-control w-full px-4 py-2 border rounded" id="MedicalRecord" name="MedicalRecord" required></textarea>
                @error('MedicalRecord')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- Submit button --}}
            <div class="mb-4">
                <button type="submit" style="background-color: #5F1A37;"
                    class="m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition">
                    Patient toevoegen
                </button>
            </div>
        </form>
    </div>

</div>
</x-layout>