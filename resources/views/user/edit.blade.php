<x-layout>
    <x-slot:title>
        Edit User
    </x-slot:title>
    <section class="bg-gray-100 text-white-800">
    <h1 class="text-3xl font-bold">Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-4">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-4">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <small>Leave blank to keep the current password</small>
        </div>
        <button class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded" type="submit">Update User</button>
    </form>
    <a href="{{ route('user.index') }}" class="bg-[#5F1A37] hover:bg-[#721B43] text-white font-bold py-2 px-4 rounded mx-4">Back to User List</a>
</section>
</x-layout>