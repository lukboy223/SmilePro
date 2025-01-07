<x-layout>
    <x-slot:title>
        Werknemer toevoegen
    </x-slot:title>

    <section class="OverzichtSectionForm">
        <h2>Werknemer toevoegen</h2>
        <form action="{{ route('employee.store') }}" method="POST">
            @csrf
            @method('POST')

            <label for="Email">Email</label>
            <input type="Email" name="Email" id="Email" class="form-control" value="{{ old('Email') }}">
            @error('Email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Username">Gebruikersnaam</label>
            <input type="text" name="Username" id="Username" class="form-control" value="{{ old('Username') }}">
            @error('Username')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Password">Wachtwoord</label>
            <input type="Password" name="Password" id="Password" class="form-control" value="{{ old('Password') }}">
            <ul>
                <li>Minimaal 8 characters</li>
            </ul>
            @error('Password')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="FirstName">Voornaam</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{ old('FirstName') }}">
            @error('FirstName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="MiddleName">Tussenvoegsel</label>
            <input type="text" name="MiddleName" id="MiddleName" class="form-control" value="{{ old('MiddleName') }}">
            @error('MiddleName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="LastName">Achternaam</label>
            <input type="text" name="LastName" id="LastName" class="form-control" value="{{ old('LastName') }}">
            @error('LastName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="DateOfBirth">Gebboorte datum</label>
            <input type="Date" name="DateOfBirth" id="DateOfBirth" class="form-control" value="{{ old('DateOfBirth') }}">
            @error('DateOfBirth')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="EmployeeType">Functie</label>
            <select name="EmployeeType" id="EmployeeType" class="form-control" value="{{ old('EmployeeType') }}">
                <option value="Tandarts">Tandarts</option>
                <option value="Assistent">Assistent</option>
                <option value="Managment">Managment</option>
            </select>
            @error('EmployeeType')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Specialization">Specialisatie</label>
            <input type="text" name="Specialization" id="Specialization" class="form-control" value="{{ old('Specialization') }}">
            @error('Specialization')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Number">Medewerker nummer</label>
            <input type="text" name="Number" id="Number" class="form-control" value="{{ old('Number') }}">
            @error('Number')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <button type="submit" class="btn-primary">Toevoegen</button>
        </form>

        <div class="overviewButtons">
            <a href="{{ route('employee.index') }}">Terug naar overzicht</a>
            <a href="{{ route('dashboard') }}">Terug naar dashboard</a>
        </div>
    </section>
</x-layout>