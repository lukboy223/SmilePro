<x-layout>
    <x-slot:title>
        Edit User
    </x-slot:title>
    <section class="OverzichtSectionForm">
    <h2 class="text-3xl font-bold">afspraak wijzigen</h2>
    <form class="" action="{{ route('treatment.update', $treatments->id) }}" method="POST">
        @csrf
        @method('PATCH')
            <label for="EmployeeId">Medewerker Id:</label>
            <input type="text" id="EmployeeId" name="EmployeeId" value="{{ old('EmployeeId', $treatments->EmployeeId) }}" required class="form-control">
            @error('EmployeeId')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="Date">Datum:</label>
            <input type="date" id="Date" name="Date" value="{{ old('Date', $treatments->Date) }}" required  class="form-control">
            @error('Date')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="Time">tijd:</label>
            <input type="time" id="Time" name="Time" value="{{ old('Time', $treatments->Time) }}" class="form-control" >
            @error('Time')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="treatmentType">Behandeling type:</label>
            <input type="text" id="treatmentType" name="treatmentType" value="{{ old('treatmentType', $treatments->treatmentType) }}" required class="form-control" >
            @error('treatmentType')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="description">Behandeling beschrijving:</label>
            <input type="text" id="description" name="description" value="{{ old('description', $treatments->description) }}" required class="form-control" >
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="Status">Behandeling status:</label>
            <input type="text" id="Status" name="Status" value="{{ old('Status', $treatments->Status) }}" required class="form-control" >
            @error('Status')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="cost">Behandeling kosten:</label>
            <input type="text" id="cost" name="cost" value="{{ old('cost', $treatments->cost )}}" required class="form-control" >
            @error('cost')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        <button class="bg-[#5F1A37] hover:bg-[#721B43] text-white py-2 px-4 rounded" type="submit">afspraak bijwerken</button>
    </form>
    <div class="m-5">
        <a class="bg-[#5F1A37] hover:bg-[#721B43] text-white py-3 px-4 rounded" href="{{ route('treatment.index') }}" >terug naar overzicht</a>
        <a class="bg-[#5F1A37] hover:bg-[#721B43] text-white py-3 px-4 rounded" href="{{ route('admin') }}" >terug naar Dashboard</a>
    </div>

</section>
</x-layout>