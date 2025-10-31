@extends('layouts.app')

@section('content')
<h2>Edit Employee</h2>

<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $employee->name) }}" required>
    </div>
    <div>
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $employee->email) }}" required>
    </div>
    <div>
        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}">
    </div>
    <div>
        <label>Position:</label><br>
        <input type="text" name="position" value="{{ old('position', $employee->position) }}" required>
    </div>
    <div>
        <label>Salary:</label><br>
        <input type="number" name="salary" value="{{ old('salary', $employee->salary) }}" required>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
