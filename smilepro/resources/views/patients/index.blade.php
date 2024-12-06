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
            @foreach($person as $persons)
            <tr>
                <td class="py-2 px-4 border-b border-gray-200">{{ $persons->FirstName }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection