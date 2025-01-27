<x-layout>
    <x-slot:title>
        Communications
    </x-slot:title>


    <!-- Centraal uitgelijnd formulier -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center text-[#5F1A37] mb-6">Maak een nieuwe bericht aan</h1>

            <!-- Toont validatiefouten, indien aanwezig -->
            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('communications.store') }}" class="space-y-4">
                @csrf
                @method('post')

                <!-- Patient ID veld -->
                <div class="flex flex-col">
                    <label for="PatientId" class="font-semibold text-lg">PatientId</label>
                    <input type="number" name="PatientId" id="PatientId" placeholder="PatientId" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>
                
                <!-- Employee ID veld -->
                <div class="flex flex-col">
                    <label for="EmployeeId" class="font-semibold text-lg">MedewerkerId</label>
                    <input type="number" name="EmployeeId" id="EmployeeId" placeholder="MedewerkerId" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- De bericht -->
                <div class="flex flex-col">
                    <label for="Message" class="font-semibold text-lg">Bericht</label>
                    <input type="string" name="Message" id="Message" placeholder="Een bericht schrijven" class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Verzonden datum -->
                <div class="flex flex-col">
                    <label for="SentDate" class="font-semibold text-lg">Verzonden datum</label>
                    <input type="date" name="SentDate" id="SentDate" required class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5F1A37] focus:border-transparent">
                </div>

                <!-- Verzendknop -->
                 <div class="flex justify-end mt-4">
                <div class="flex justify-end">
                    <button type="submit" class="bg-[#5F1A37] text-white px-6 py-2 rounded-md shadow-md hover:bg-[#7a284d] transition">
                        Opslaan
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>

    <!-- teste -->

</x-layout>