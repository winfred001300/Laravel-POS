@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')

    <h1>User Accounts</h1>

    <p>List of registered system users.</p>

    <a href="{{ route('users.create') }}">Create New User</a>

    <br><br>

    @if (session('success'))
        <p style="color:green;">
            {{ session('success') }}
        </p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>

                    <td>
                        @if ($user->avatar)
                            <img
                                src="{{ asset('storage/' . $user->avatar) }}"
                                alt="{{ $user->username }} Avatar"
                                width="60"
                                height="60"
                                style="object-fit:cover; border-radius:50%; display:block;"
                                onerror="this.style.display='none';"
                            >
                        @else
                            No Avatar
                        @endif
                    </td>

                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
