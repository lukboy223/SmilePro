<x-layout>
    <x-slot:title>
        Werknemer Updaten
    </x-slot:title>

    <section class="OverzichtSectionForm">
        <h2>Werknemer {{ $employee->FirstName}} {{$employee->MiddleName}} {{$employee->LastName}} aanpassen</h2>
        <form action="/Employee/Update/{{$employee->id}}" method="POST">
            @csrf
            @method('PATCH')

            <label for="Email">Email</label>
            <input type="Email" name="Email" id="Email" class="form-control" value="{{ old('Email', $employee->Email) }}">
            @error('Email')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Username">Gebruikersnaam</label>
            <input type="text" name="Username" id="Username" class="form-control" value="{{ old('Username', $employee->Name) }}">
            @error('Username')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="FirstName">Voornaam</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{ old('FirstName', $employee->FirstName) }}">
            @error('FirstName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="MiddleName">Tussenvoegsel</label>
            <input type="text" name="MiddleName" id="MiddleName" class="form-control" value="{{ old('MiddleName', $employee->MiddleName) }}">
            @error('MiddleName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="LastName">Achternaam</label>
            <input type="text" name="LastName" id="LastName" class="form-control" value="{{ old('LastName', $employee->LastName) }}">
            @error('LastName')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="DateOfBirth">Gebboorte datum</label>
            <input type="Date" name="DateOfBirth" id="DateOfBirth" class="form-control" value="{{ old('DateOfBirth', $employee->DateOfBirth) }}">
            @error('DateOfBirth')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="EmployeeType">Functie</label>
            <select name="EmployeeType" id="EmployeeType" class="form-control" value="{{ old('EmployeeType', $employee->EmployeeType) }}">
                <option value="Tandarts">Tandarts</option>
                <option value="Assistent">Assistent</option>
                <option value="Managment">Managment</option>
            </select>
            @error('EmployeeType')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Specialization">Specialisatie</label>
            <input type="text" name="Specialization" id="Specialization" class="form-control" value="{{ old('Specialization', $employee->Specialization) }}">
            @error('Specialization')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Number">Medewerker nummer</label>
            <input type="text" name="Number" id="Number" class="form-control" value="{{ old('Number', $employee->Number) }}">
            @error('Number')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            </div>

            <button type="submit" class="btn-primary">Updaten</button>
        </form>

        <div class="overviewButtons">
            <a href="{{ route('employee.index') }}">Terug naar overzicht</a>
            <a href="{{ route('dashboard') }}">Terug naar dashboard</a>
        </div>
    </section>
</x-layout>