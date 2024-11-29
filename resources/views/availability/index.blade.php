<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beschikbaarheid</title>
    @vite('resources/css/app.css') <!-- Zorg dat je deze regel toevoegt -->
</head>
<body class="bg-gray-100 text-white-800">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold text-center mb-6">Beschikbaarheid</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md">
                <thead class="bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">MedewerkerId</th>
                        <th class="px-4 py-2 border border-gray-300">Datum vanaf</th>
                        <th class="px-4 py-2 border border-gray-300">Datum tot en met</th>
                        <th class="px-4 py-2 border border-gray-300">Tijd vanaf</th>
                        <th class="px-4 py-2 border border-gray-300">Tijd tot en met</th>
                        <th class="px-4 py-2 border border-gray-300">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($availabilities as $availability)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{$availability->EmployeeId}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$availability->FormDate}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$availability->ToDate}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$availability->FormTime}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$availability->ToTime}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$availability->Status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>