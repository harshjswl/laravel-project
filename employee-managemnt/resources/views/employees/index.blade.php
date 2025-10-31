@extends('layouts.app')

@section('content')
<h1>All Employees</h1>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('employees.create') }}" class="btn btn-success">+ Add New Employee</a>

<table border="1" cellpadding="8" cellspacing="0" width="100%" style="margin-top:10px; border-collapse:collapse;">
    <thead style="background:#007bff; color:white;">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Position</th><th>Salary</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->position }}</td>
                <td>{{ $employee->salary }}</td>
                <td>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align:center;">No employees found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
