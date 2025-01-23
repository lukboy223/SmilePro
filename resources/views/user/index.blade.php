<!-- resources/views/user/index.blade.php -->
<x-layout>
    <x-slot:title>
        User Overview
    </x-slot:title>
    @if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p>{{ session('success') }}</p>
    </div> 
    @endif
    <section class="text-white-800">
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold">User Overview</h1>
            <p class="text-gray-600">This is an overview of all users.</p>

            <div class="overflow-x-auto">
                <table class="table-auto w-4/5 mx-auto bg-white border-collapse border border-gray-200 shadow-md">
                    <thead class="bg-[#5F1A37] text-white">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300">ID</th>
                            <th class="px-4 py-2 border border-gray-300">Role Id</th>
                            <th class="px-4 py-2 border border-gray-300">Name</th>
                            <th class="px-4 py-2 border border-gray-300">Email</th>
                            <th class="px-4 py-2 border border-gray-300">Edit</th>
                            <th class="px-4 py-2 border border-gray-300">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isEmpty())
                        <tr>
                            <td class="px-4 py-2 border border-gray-300" colspan="6">Kan accounts niet laden. Probeer het later opnieuw</td>
                        </tr>
                        @else
                        @foreach ($users as $user)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $user->id }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->role }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->name }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->email }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('user.edit', $user->id) }}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded">
                                    wijzigen 
                                </a>
                            </td>
                            <td class="px-4 py-2 border border-gray-300">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="bg-red-600 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" onclick="showModal('{{ $user->id }}')">Verwijder</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $users->links() }}
                <div class="w-4/5 mx-auto flex justify-end mt-6">
                    <a href="{{ route('admin')}}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded">
                        Dashboard
                    </a>
                </div>
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

        function showModal(userId) {
            formToSubmit = document.querySelector(`form[action="{{ route('user.destroy', '') }}/${userId}"]`);
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