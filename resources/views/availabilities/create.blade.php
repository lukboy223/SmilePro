<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Availability</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Centraal uitgelijnd formulier -->
    <div class="flex items-center justify-center min-h-screen">
        <!-- Witte sectie met beperkte breedte -->
        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center text-[#5F1A37] mb-6">Create Availability</h1>

            <!-- Toont validatiefouten, indien aanwezig -->
            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('availability.store') }}" class="space-y-4">
                @csrf
                @method('post')

                <!-- Employee ID veld -->
                <div class="flex flex-col">
                    <label for="EmployeeId" class="font-semibold text-lg">MedewerkerId</label>
                    <input type="number" name="EmployeeId" id="EmployeeId" placeholder="MedewerkerId" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Startdatum -->
                <div class="flex flex-col">
                    <label for="FormDate" class="font-semibold text-lg">Datum vanaf</label>
                    <input type="date" name="FormDate" id="FormDate" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Einddatum -->
                <div class="flex flex-col">
                    <label for="ToDate" class="font-semibold text-lg">Datum tot en met</label>
                    <input type="date" name="ToDate" id="ToDate" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Starttijd -->
                <div class="flex flex-col">
                    <label for="FormTime" class="font-semibold text-lg">Tijd vanaf</label>
                    <input type="time" name="FormTime" id="FormTime" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Eindtijd -->
                <div class="flex flex-col">
                    <label for="ToTime" class="font-semibold text-lg">Tijd tot en met</label>
                    <input type="time" name="ToTime" id="ToTime" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Status veld -->
                <div class="flex flex-col">
                    <label for="Status" class="font-semibold text-lg">Status</label>
                    <select name="Status" id="Status" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                        <option value="Aanwezig">Aanwezig</option>
                        <option value="Afwezig">Afwezig</option>
                        <option value="Ziek">Ziek</option>
                        <option value="Verlof">Verlof</option>
                    </select>
                </div>

                <!-- Verzendknop -->
                 <div class="flex justify-end mt-4">
                <div class="flex justify-end">
                    <button type="submit" class="bg-[#5F1A37] text-white px-6 py-2 rounded-md shadow-md hover:bg-[#7a284d] transition">
                        Opslaan
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>