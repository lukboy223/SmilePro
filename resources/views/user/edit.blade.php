<x-layout>
    <x-slot:title>
        Edit User
    </x-slot:title>
    <section class="OverzichtSectionForm">
    <h2 class="text-3xl font-bold">Edit User</h2>
    <form class="" action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required class="form-control">
            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required  class="form-control">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"  class="form-control" placeholder="Leave blank to keep the current password">
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

        <button class="bg-[#5F1A37] hover:bg-[#721B43] text-white py-2 px-4 rounded" type="submit">Account bijwerken</button>
    </form>
    <div class="overviewButtons">
        <a href="{{ route('user.index') }}" >Back to User List</a>
        <a href="{{ route('user.index') }}" >Back to Dashboard</a>
    </div>

</section>
</x-layout>