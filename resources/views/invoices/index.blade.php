<x-layout>

    <x-slot:title>
        Invoices Overview
    </x-slot:title>

    <!-- Main Content -->
    <div class="container mx-auto py-8 w-7/8 p-8">
        <h1 class="text-2xl font-bold text-center mb-6">Invoices</h1>
        <div class="flex justify-center">
            <div class="w-full max-w-6xl">
                <table class="table-auto w-full bg-white border-collapse border border-gray-200 shadow-md mx-auto">
                    <thead style="background-color: #5F1A37;" class="text-white">
                        <tr>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Invoice Number</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Customer Name</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Date</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Total Amount</th>
                            <th class="px-4 py-1 border border-gray-300 whitespace-nowrap">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($invoices->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center px-2 py-1 border border-gray-300">
                                    Er is een probleem opgetreden bij het ophalen van de facturen. Probeer het later
                                    opnieuw.
                                </td>
                            </tr>
                        @else
                            @foreach ($invoices as $invoice)
                                <tr class="text-center hover:bg-gray-50">
                                    <td class="px-2 py-1 border border-gray-300">{{ $invoice->Number }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $invoice->FirstName }} {{ $invoice->LastName }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $invoice->Date }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $invoice->Amount }}</td>
                                    <td class="px-2 py-1 border border-gray-300">{{ $invoice->Status }}</td>
                                </tr>
                            @endforeach
                            @endif
                    </tbody>
                </table>
                <!-- Pagination Links for Invoices -->
                <div class="mt-4">
                    {{ $invoices->links() }}
                </div>
                
                <!-- Dashboard button -->
                <div class="flex justify-end mt-4">
                    <a href="/dashboard" style="background-color: #5F1A37;"
                        class="text-white px-6 py-2 rounded font-semibold shadow-md transition">Dashboard</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
