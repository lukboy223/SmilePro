<x-layout>
    <x-slot:title>
        Werknemer toevoegen
    </x-slot:title>

    <section class="OverzichtSectionForm">
        <h2>Werknemer toevoegen</h2>
        <form action="{{ route('employee.store') }}" method="POST">
            @csrf
            @method('POST')

            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username" class="form-control">
            @error('username')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="FirstName">Voornaam</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control">
            @error('FirstName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="middleName">Tussenvoegsel</label>
            <input type="text" name="middleName" id="middleName" class="form-control">
            @error('middleName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="LastName">Achternaam</label>
            <input type="text" name="LastName" id="LastName" class="form-control">
            @error('LastName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="EmployeeType">Functie</label>
            <select name="EmployeeType" id="EmployeeType" class="form-control">
                <option value="Tandarts">Tandarts</option>
                <option value="Assistent">Assistent</option>
                <option value="Managment">Managment</option>
            </select>
            @error('EmployeeType')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Specialization">Specialisatie</label>
            <input type="text" name="Specialization" id="Specialization" class="form-control">
            @error('Specialization')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Number">Medewerker nummer</label>
            <input type="text" name="Number" id="Number" class="form-control">
            @error('Number')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>

        <div class="overviewButtons">
            <a href="{{ route('employee.index') }}">Terug naar overzicht</a>
            <a href="{{ route('dashboard') }}">Terug naar dashboard</a>
        </div>
    </section>
</x-layout>