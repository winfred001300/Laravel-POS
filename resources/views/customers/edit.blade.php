@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')

    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Full Name:</label>
            <input type="text" name="full_name"
                value="{{ old('full_name', $customer->full_name) }}">

            @error('full_name')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Email:</label>
            <input type="text" name="email"
                value="{{ old('email', $customer->email) }}">

            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Phone:</label>
            <input type="text" name="phone"
                value="{{ old('phone', $customer->phone) }}">

            @error('phone')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Update Customer</button>

        <a href="{{ route('customers') }}">Cancel</a>
    </form>

@endsection