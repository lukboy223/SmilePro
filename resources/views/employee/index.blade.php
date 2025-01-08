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
                <th class="px-4 py-2 border border-gray-300">Edit</th>
                <th class="px-4 py-2 border border-gray-300">Delete</th>

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
                <td class="px-4 py-2 border border-gray-300">
                    <a href="{{ route('employee.edit', $employee->id) }}"
                        class="EditButton text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                </td>
                <td class="px-4 py-2 border border-gray-300">
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="deleteButton text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
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