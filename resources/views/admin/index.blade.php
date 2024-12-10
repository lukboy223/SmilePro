<!-- resources/views/user/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Overview</title>
</head>
<body>
    <h1>User Overview</h1>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admin.show', $admin->id) }}">View</a>
                        <a href="{{ route('admin.edit', $admin->id) }}">Edit</a>
                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>