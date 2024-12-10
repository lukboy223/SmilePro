<x-layout>

    {{-- gives the page a custom title, see line 8 from layout.blade.php --}}
    <x-slot:title>
        Overview employees
    </x-slot:title>
    <section>

        <table class="MedewerkerOverzichtTable">
            <tr class="MedewerkerOverzichtTableHeader">

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

        </table>
        <div>
            {{$employees->links()}}
       
        </div>
    </section>
</x-layout>