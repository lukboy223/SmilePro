<x-layout>
    <x-slot:title>
        Communications
    </x-slot:title>

    <div class="container mx-auto py-8">
        <h1 class="text-bordeaux text-2xl font-bold text-center mb-6">Overzicht berichten</h1>

        <!-- Bericht weergeven als een sessie een 'success'-bericht bevat -->
        @if(session()->has('success'))
            <div class="bg-green-100 text-green-800 border border-green-200 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel met alle beschikbaarheden -->
        <div class="overflow-x-auto mx-auto max-w-6xl">
            <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md">
                <thead style="background-color: #5F1A37;" class="text-white">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">PatientId</th>
                        <th class="px-4 py-2 border border-gray-300">EmployeeId</th>
                        <th class="px-4 py-2 border border-gray-300">Bericht</th>
                        <th class="px-4 py-2 border border-gray-300">VerzondenDatum</th>
                        <th class="px-4 py-2 border border-gray-300">Edit</th>
                        <th class="px-4 py-2 border border-gray-300">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($communications as $communication)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->PatientId }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->EmployeeId }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->Message }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $communication->SentDate }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('communications.index', ['communication' => $communication]) }}" 
                                   class="text-[#5F1A37] font-semibold hover:underline">
                                    Edit
                                </a>
                            </td>
                            <td class="px-4 py-2 border border-gray-300">
                                <form method="POST" action="{{ route('communications.index', ['communication' => $communication]) }}">
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
                class="bg-[#5F1A37] text-white px-6 py-2 rounded font-semibold shadow-md transition">Home pagina</a>
            </div>
            <!-- Paginatie Links -->
            <div class="mt-6">
                {{ $communications->links() }}
            </div>
    </div>
    </div>

</x-layout>