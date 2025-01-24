<x-layout>

    {{-- gives the page a custom title, see line 8 from layout.blade.php --}}
    <x-slot:title>
        Overview treatments
    </x-slot:title>
    <h1 class="OverzichtTitel">Behandelingen overzicht</h1>
    <div class="HomeLine"></div>

    <section>


        {{-- table with all the treatments --}}
        <table class="OverzichtTable">
            <tr class="OverzichtTableHeader">

                <th>
                    Medewerker naam
                </th>
                <th>
                    Patient naam
                </th>
                <th>
                    Behandeling datum en tijd
                </th>
                <th>
                    Behandeling type
                </th>
                <th>
                    Behandeling beschrijving
                </th>
                <th>
                    Behandeling status
                </th>
                <th>
                    Behandeling kosten
                </th>
                <th>
                    Behandeling wijzigen
                </th>
                <th>
                    Behandeling Annuleren
                </th>
            </tr>
            @if($treatments->isEmpty())
            <tr>
                <td colspan="7" class="errorTableRow">
                    Er is een probleem opgetreden bij onze database, probeer het later opnieuw.
            </tr>
            @else
            @foreach($treatments as $treatment)
            <tr>
                <td>
                    {{$treatment->employee_first_name}} {{$treatment->employee_middle_name}} {{$treatment->employee_last_name}}
                </td>
                <td>
                    {{$treatment->patient_first_name}} {{$treatment->patient_middle_name}} {{$treatment->patient_last_name}}
                </td>
                <td>
                    {{$treatment->Date}}<br> 
                    {{$treatment->Time}}
                </td>
                <td>
                    {{$treatment->treatmentType}}
                </td>
                <td>
                    {{$treatment->description}}
                </td>
                <td>
                    {{$treatment->Status}}
                </td>
                <td>
                    {{$treatment->cost}}
                </td>
                <td>
                    <a href="{{ route('treatment.edit', $treatment->id) }}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded"
                    >Wijzigen</a>
                </td>
                <td>
                    <form action="{{ route('treatment.destroy', $treatment->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="bg-red-600 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" onclick="showModal('{{ $treatment->id }}')">Verwijder</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif

        </table>
        {{-- pagination buttons --}}
        <div>
            {{$treatments->links()}}
        </div>
        <div class="overviewButtons">
        {{-- Create button --}}
        <div class="mb-4">
            <a href="{{ route('treatment.create') }}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded">
                Afspraak aanmaken
            </a>
        </div>
        <a class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded" href="{{ route('dashboard') }}">Back to dashboard</a>   
        </div>
    </section>
    <div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Verwijder gebruiker</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Weet je zeker dat je deze gebruiker wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="bg-red-600 hover:bg-red-900 text-white font-bold py-2 px-4 mt-3 rounded" onclick="confirmDelete()">Verwijder</button>
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-gray-400 py-2 px-4 mt-3 bg-gray-100 text-base font-medium text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm" onclick="hideModal()">Annuleer</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let formToSubmit;

        function showModal(treatmentId) {
            formToSubmit = document.querySelector(`form[action="{{ route('treatment.destroy', '') }}/${treatmentId}"]`);
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function hideModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function confirmDelete() {
            formToSubmit.submit();
        }
    </script>
</x-layout>