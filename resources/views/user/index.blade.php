<!-- resources/views/user/index.blade.php -->
<x-layout>
    <x-slot:title>
        User Overview
    </x-slot:title>
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
                            <td class="px-4 py-2 border border-gray-300" colspan="4">Kan accounts niet laden. Probeer het later opnieuw</td>
                        </tr>
                        @else
                        @foreach ($users as $user)
                        <tr class="text-center hover:bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">{{ $user->id }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->role_id }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->name }}</td>
                            <td class="px-4 py-2 border border-gray-300">{{ $user->email }}</td>
                            <td class="px-4 py-2 border border-gray-300">
                                <a href="{{ route('user.edit', $user->id) }}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                            </td>
                            <td class="px-4 py-2 border border-gray-300">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-[#5F1A37] hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Delete</button>
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
</x-layout>