<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berichten</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 text-white-800">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold text-center mb-6">Berichten</h1>
        <div class="overflow-x-auto mx-auto max-w-6xl">
            <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
                <thead style="background-color: #5F1A37;" class="text-white">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">PatientId</th>
                        <th class="px-4 py-2 border border-gray-300">GebruikerId</th>
                        <th class="px-4 py-2 border border-gray-300">Bericht</th>
                        <th class="px-4 py-2 border border-gray-300">VerzondenDatum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($communications as $Communication)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{$Communication->patient_id}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$Communication->employee_id}}</td>     
                            <td class="px-4 py-2 border border-gray-300">{{$Communication->Message}}</td>
                            <td class="px-4 py-2 border border-gray-300">{{$Communication->SentDate}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Knop naar dashboard -->
            <div class="flex justify-end mt-4">
                <a href="/"
                class="bg-[#5F1A37] text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>