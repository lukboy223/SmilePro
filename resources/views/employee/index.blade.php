<x-layout>

    {{-- gives the page a custom title, see line 8 from layout.blade.php --}}
    <x-slot:title>
        Overview employees
    </x-slot:title>
    @if (session('success'))
            <div class="alert alert-success w-10/12 m-auto text-center">
                {{ session('success') }}
            </div>
        @endif
    <h1 class="OverzichtTitel">Medewerker overzicht</h1>
    <div class="HomeLine"></div>

    <section>

        <table class="OverzichtTable">
            <tr class="OverzichtTableHeader">

                <th>
                    Medewerker ID
                </th>
                <th>
                    Functie
                </th>
                <th>
                    Specialisatie
                </th>
                <th>
                    Medewerker nummer
                </th>
                <th>
                    Naam
                </th>

            </tr>
            @if($employees->isEmpty())
            <tr>
                <td colspan="5" class="errorTableRow">
                    Geen werknemers kunnen vinden, probeer het later opnieuw
                </td>
            </tr>
            @else

            @foreach($employees as $employee)
            <tr>
                <td>
                    {{$employee->id}}
                </td>
                <td>
                    {{$employee->EmployeeType}}
                </td>
                <td>
                    {{$employee->Specialization}}
                </td>
                <td>
                    {{$employee->Number}}
                </td>
                <td>
                    {{$employee->FirstName}} {{$employee->middleName}} {{$employee->LastName}}
                </td>
            </tr>
            @endforeach
            @endif

        </table>
        {{-- pagination buttons --}}
        <div>
            {{$employees->links()}}
        </div>
        <div class="overviewButtons">
            <a href="{{ route('employee.create')}}">Medewerker toevoegen</a>
            <a href="{{ route('dashboard') }}">Back to dashboard</a>
        </div>
    </section>
</x-layout>