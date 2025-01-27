<x-layout>
    <x-slot:title>
        Patient Bewerken
    </x-slot:title>

    <h1 class="text-center mt-4">Patient Bewerken</h1>

    <div class="p-4">
        <form action="{{ route('patients.update', $patient->id) }}" method="POST" class="bg-white p-6 rounded shadow-md mx-auto" style="max-width: 600px;">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="Number" class="block text-gray-700">Patient nummer</label>
                <input type="text" name="Number" id="Number" class="w-full px-4 py-2 border rounded" value="{{ $patient->Number }}" required>
            </div>
            @error('Number')
                <div class="mb-4">
                    <p class="text-red-500">{{ $message }}</p>
                </div>
            @enderror
            <div class="mb-4">
                <label for="FirstName" class="block text-gray-700">Voornaam</label>
                <input type="text" name="FirstName" id="FirstName" class="w-full px-4 py-2 border rounded" value="{{ $person->FirstName }}" required>
            </div>
            @error('FirstName')
            <div class="mb-4">
                <p class="text-red-500">{{ $message }}</p>
            </div>
        @enderror
            <div class="mb-4">
                <label for="MiddleName" class="block text-gray-700">Tussenvoegsel</label>
                <input type="text" name="MiddleName" id="MiddleName" class="w-full px-4 py-2 border rounded" value="{{ $person->MiddleName }}">
            </div>
            @error('MiddleName')
            <div class="mb-4">
                <p class="text-red-500">{{ $message }}</p>
            </div>
        @enderror
            <div class="mb-4">
                <label for="LastName" class="block text-gray-700">Achternaam</label>
                <input type="text" name="LastName" id="LastName" class="w-full px-4 py-2 border rounded" value="{{ $person->LastName }}" required>
            </div>
            @error('LastName')
            <div class="mb-4">
                <p class="text-red-500">{{ $message }}</p>
            </div>
        @enderror
            <div class="mb-4">
                <label for="DateOfBirth" class="block text-gray-700">Geboortedatum</label>
                <input type="date" name="DateOfBirth" id="DateOfBirth" class="w-full px-4 py-2 border rounded" value="{{ $person->DateOfBirth }}" required>
            </div>
            @error('DateOfBirth')
            <div class="mb-4">
                <p class="text-red-500">{{ $message }}</p>
            </div>
        @enderror

            <div class="mb-4">
                <label for="MedicalRecord" class="block text-gray-700">Medisch dossier</label>
                <textarea name="MedicalRecord" id="MedicalRecord" class="w-full px-4 py-2 border rounded" required>{{ $patient->MedicalRecord }}</textarea>
            </div>
            @error('MedicalRecord')
            <div class="mb-4">
                <p class="text-red-500">{{ $message }}</p>
            </div>
        @enderror
            <button type="submit" style="background-color: #5F1A37;" class="text-white px-4 py-2 rounded">Opslaan</button>
        </form>
    </div>
</x-layout>