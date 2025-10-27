<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body{
            font-family: 'poppins',sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8fafc;
        }
        h1{
            font-size: 3rem;
            color: #333;
        }
        p{
            color: #555;
            font-size: 1.2rem;
        }
        img{
            width: 300px;
            margin: 20px 0;
        }
        a{
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            transition: background 0.3s;
        }
          a:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <img src="{{ asset('assets/404.png') }}" alt="Page Not Found">
    <h1>Oops! Page Not Found</h1>
    <p>The page you are looking for doesn’t exist.</p>
    <a href="{{ url('/') }}">Go Back Home</a>
</body>
</html>