<!-- resources/views/persons/index.blade.php -->


<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Persons</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">First Name</th>
                <th class="py-2 px-4 border-b border-gray-200">Middle Name</th>
                <th class="py-2 px-4 border-b border-gray-200">Last Name</th>
                <th class="py-2 px-4 border-b border-gray-200">Birth Date</th>
                <th class="py-2 px-4 border-b border-gray-200">Is Active</th>
                <th class="py-2 px-4 border-b border-gray-200">Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->FirstName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->MiddleName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->LastName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->BirthDate }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->IsActive ? 'Yes' : 'No' }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $person->Note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
