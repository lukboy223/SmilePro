<!-- resources/views/Patient/index.blade.php -->

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Patients</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $people)
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->FirstName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->MiddleName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->LastName }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->BirthDate }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->IsActive }}</td>
                <td class="py-2 px-4 border-b border-gray-200">{{ $people->Note }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection