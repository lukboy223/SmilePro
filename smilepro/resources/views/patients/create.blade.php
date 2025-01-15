{{-- filepath: /C:/Users/bilag/Herd/smilepro/resources/views/patients/create.blade.php --}}
<x-layout>
    <x-slot:title>
        Create Patient
    </x-slot:title>

    <h1>Create Patient</h1>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div>
            <label for="person_id">Person ID:</label>
            <input type="text" id="person_id" name="person_id" required>
        </div>
        <div>
            <label for="number">Number:</label>
            <input type="text" id="number" name="number" required>
        </div>
        <div>
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required>
        </div>
        <div>
            <label for="medical_record">Medical Record:</label>
            <input type="text" id="medical_record" name="medical_record" required>
        </div>
        <div>
            <button type="submit">Create Patient</button>
        </div>
    </form>
</x-layout>9