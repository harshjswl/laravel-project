<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            margin: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        .btn {
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            color: white;
        }
        .btn-primary { background-color: #007bff; }
        .btn-secondary { background-color: gray; }
        .btn-success { background-color: #28a745; }
        .btn-warning { background-color: #ffc107; color: black; }
        .btn-danger { background-color: #dc3545; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
