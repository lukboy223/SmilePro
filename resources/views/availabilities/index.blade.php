<x-layout>
        {{-- gives the page a custom title, see line 8 from layout.blade.php --}}
        <x-slot:title>
            Overview beschikbaarheid
        </x-slot:title>
    <div class="container mx-auto py-8">
        <h1 class="text-bordeaux text-2xl font-bold text-center mb-6">Beschikbaarheid</h1>

        <!-- Bericht weergeven als een sessie een 'success'-bericht bevat -->
        @if(session()->has('success'))
            <div class="bg-green-100 text-green-800 border border-green-200 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel met alle beschikbaarheden -->
        <div class="overflow-x-auto mx-auto max-w-6xl">
        <!-- Link om een nieuwe beschikbaarheid te creëren -->
        <div class="justify-end mb-4">
            <a href="{{ route('availability.create') }}" 
               class="bg-[#5F1A37] text-white px-6 py-2 rounded shadow-md transition hover:bg-[#7a284d]">
                Create Availability
            </a>
        </div>
            <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md">
                <thead style="background-color: #5F1A37;" class="text-white">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">MedewerkerId</th>
                        <th class="px-4 py-2 border border-gray-300">Datum vanaf</th>
                        <th class="px-4 py-2 border border-gray-300">Datum tot en met</th>
                        <th class="px-4 py-2 border border-gray-300">Tijd vanaf</th>
                        <th class="px-4 py-2 border border-gray-300">Tijd tot en met</th>
                        <th class="px-4 py-2 border border-gray-300">Status</th>
                        <th class="px-4 py-2 border border-gray-300">Edit</th>
                        <th class="px-4 py-2 border border-gray-300">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($availabilities as $availability)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->EmployeeId }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->FormDate }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->ToDate }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->FormTime }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->ToTime }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $availability->Status }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('availability.edit', ['availability' => $availability]) }}" 
                                   class="text-[#5F1A37] font-semibold hover:underline">
                                    Edit
                                </a>
                            </td>
                            <td class="px-4 py-2 border border-gray-300">
                                <form method="POST" action="{{ route('availability.destroy', ['availability' => $availability]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" 
                                            class="text-red-600 font-semibold hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                <!-- Knop naar dashboard -->
                <div class="flex justify-end mt-4">
                <a href="/"
                class="bg-[#5F1A37] text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
            </div>
            <!-- Paginatie Links -->
            <div class="mt-6">
                {{ $availabilities->links() }}
            </div>
    </div>
    </div>
</x-layout>
