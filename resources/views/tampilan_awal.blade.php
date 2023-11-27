<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Awal</title>
    <style>
        body {
            background: linear-gradient(to right, #4caf50, #2196F3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .menu-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .menu-link {
            display: block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }
        .menu-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <h2>Welcome to library!</h2>
        <a href="/login" class="menu-link">Login</a>
        <a href="/daftar" class="menu-link">Daftar</a>
    </div>
</body>
</html>
