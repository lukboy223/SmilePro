<!-- resources/views/treatment/create.blade.php -->
<x-layout>
    <x-slot:title>
        Create Treatment
    </x-slot:title>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Create Treatment</h1>
        <form action="{{ route('treatment.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="EmployeeId" class="block text-gray-700">Employee ID:</label>
                <input type="text" name="EmployeeId" id="EmployeeId" class="w-full border border-gray-300 p-2 rounded" value="{{ old('EmployeeId') }}">
                @error('EmployeeId')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="PatientId" class="block text-gray-700">Patient ID:</label>
                <input type="text" name="PatientId" id="PatientId" class="w-full border border-gray-300 p-2 rounded" value="{{ old('PatientId') }}">
                @error('PatientId')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Date" class="block text-gray-700">Date:</label>
                <input type="date" name="Date" id="Date" class="w-full border border-gray-300 p-2 rounded" value="{{ old('Date') }}">
                @error('Date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Time" class="block text-gray-700">Time:</label>
                <input type="time" name="Time" id="Time" class="w-full border border-gray-300 p-2 rounded" value="{{ old('Time') }}">
                @error('Time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="treatmentType" class="block text-gray-700">Treatment Type:</label>
                <input type="text" name="treatmentType" id="treatmentType" class="w-full border border-gray-300 p-2 rounded" value="{{ old('treatmentType') }}">
                @error('treatmentType')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 p-2 rounded">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cost" class="block text-gray-700">Cost:</label>
                <input type="number" name="cost" id="cost" class="w-full border border-gray-300 p-2 rounded" value="{{ old('cost') }}" step="0.01">
                @error('cost')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Status" class="block text-gray-700">Status:</label>
                <input type="text" name="Status" id="Status" class="w-full border border-gray-300 p-2 rounded" value="{{ old('Status') }}">
                @error('Status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded">afspraak aanmaken</button>
            </div>
        </form>
    </div>
</x-layout>