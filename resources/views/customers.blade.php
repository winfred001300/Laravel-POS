@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')

    <h1>Customer Accounts</h1>

    <p>List of registered customers.</p>

    @if (session('success'))
        <p style="color:green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('customers.create') }}">
        <button type="button">Add New Customer</button>
    </a>

    <br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}">
                            Edit
                        </a>

                        <form action="{{ route('customers.destroy', $customer->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('Delete this customer?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No customer records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
