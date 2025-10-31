@extends('layouts.app')

@section('content')
<h2>Add New Employee</h2>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('employees.store') }}">
    @csrf
    <div>
        <label>Name:</label><br>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Email:</label><br>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Phone:</label><br>
        <input type="text" name="phone">
    </div>
    <div>
        <label>Position:</label><br>
        <input type="text" name="position" required>
    </div>
    <div>
        <label>Salary:</label><br>
        <input type="number" name="salary" step="0.01" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Add Employee</button>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
