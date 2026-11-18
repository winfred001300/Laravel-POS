@extends('layouts.app')

@section('title', 'Create User')

@section('content')

    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="POST"
        enctype="multipart/form-data">

        @csrf

        <div>
            <label>Username:</label>
            <input type="text" name="username"
                value="{{ old('username') }}">

            @error('username')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name"
                value="{{ old('full_name') }}">

            @error('full_name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Avatar:</label>
            <input type="file" name="avatar" accept="image/*">

            @error('avatar')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Save User</button>

        <a href="{{ route('users.index') }}">Cancel</a>

    </form>

@endsection
