<x-layout>
    <x-slot:title>
        Facaturen toevoegen
    </x-slot:title>

    <section class="OverzichtSectionForm">
        <h2>Facaturen toevoegen</h2>
        <form action="{{ route('invoice.store') }}" method="POST">
            @csrf
            @method('POST')

            <label for="PatientId">Patient Id</label>
            <input type="number" name="PatientId" id="PatientId" class="form-control" value="{{ old('PatientId') }}">
            @error('PatientId')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="TreatmentId">Behandeling Id</label>
            <input type="number" name="TreatmentId" id="TreatmentId" class="form-control"
                value="{{ old('TreatmentId') }}">
            @error('TreatmentId')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Number">Nummer</label>
            <input type="text" name="Number" id="Number" class="form-control" value="{{ old('Number') }}">
            @error('Number')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Date">Datum</label>
            <input type="Date" name="Date" id="Date" class="form-control" value="{{ old('Date') }}">
            @error('Date')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="Amount">Hoeveelheid</label>
            <input type="decimal    " name="Amount" id="Amount" class="form-control" value="{{ old('Amount') }}">
            @error('Amount')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            
            <button type="submit" class="btn-primary">Toevoegen</button>
        </form>

        <div class="overviewButtons">
            <a href="{{ route('invoice.index') }}">Terug naar overzicht</a>
            <a href="{{ route('dashboard') }}">Terug naar dashboard</a>
        </div>
    </section>
</x-layout>