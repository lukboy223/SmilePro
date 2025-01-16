{{-- filepath: /C:/Users/bilag/Herd/smilepro/resources/views/patients/create.blade.php --}}
<x-layout>
    <x-slot:title>
        Create Patient
    </x-slot:title>

    <section class="OverzichtSectionForm">

        <h2>Create Patient</h2>
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf


            <label for="person_id">Person ID:</label>
            <input class="form-control" type="number" id="person_id" name="person_id" required>
            @error('person_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="first_ame">First Name:</label>
            <input class="form-control" type="number" id="first_name" name="first_name" required>
            @error('first_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="middle_name">Middle Name:</label>
            <input class="form-control" type="number" id="middle_name" name="middle_name" required>
            @error('middle_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="last_name">Last Name:</label>
            <input class="form-control" type="number" id="last_name" name="last_name" required>
            @error('last_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror


            <label for="number">Number:</label>
            <input class="form-control" type="text" id="number" name="number" required>
            @error('number')
                <div class="text-danger">{{ $message }}</div>
            @enderror


            <label for="birth_date">Birth Date:</label>
            <input class="form-control" type="date" id="birth_date" name="birth_date" required>
            @error('birth_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror


            <label for="medical_record">Medical Record:</label>
            <input class="form-control" type="text" id="medical_record" name="medical_record" required>
            @error('medical_record')
                <div class="text-danger">{{ $message }}</div>
            @enderror


            <button type="submit" style="background-color: #5F1A37;"
                class="m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition">patient
                toevoegen</button>

                <button type="button" style="background-color: #5F1A37;"
                class="m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition"
                onclick="window.location.href='/patients'">
            Patient overzicht
        </button>
                
            <div class="flex justify-end mt-4">
                <a type="submit" href="/" style="background-color: #5F1A37;"
                    class="m-0 mt-3 mb-3 mr-3 text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
            </div>





        </form>
    </section>
</x-layout>
