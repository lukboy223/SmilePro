<x-layout>

    {{-- gives the page a custom title, see line 8 from layout.blade.php --}}
    <x-slot:title>
        Overview treatments
    </x-slot:title>
    <h1 class="OverzichtTitel">Behandelingen overzicht</h1>
    <div class="HomeLine"></div>

    <section>

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
            </tr>
            @endforeach
            @endif

        </table>
        {{-- pagination buttons --}}
        <div>
            {{$treatments->links()}}
        </div>
        <div class="overviewButtons">
            <a href="">Behandeling toevoegen</a>
            <a href="{{ route('dashboard') }}">Back to dashboard</a>
        </div>
    </section>
</x-layout>