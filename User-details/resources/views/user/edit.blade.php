<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Edit User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>

        <div class="mb-3">
            <label>Skill</label>
            <input type="text" name="skill" class="form-control" value="{{ $user->skill }}" required>
        </div>

        <div class="mb-3">
            <label>Experience (years)</label>
            <input type="number" name="experience" class="form-control" value="{{ $user->experience }}" required min="0">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
