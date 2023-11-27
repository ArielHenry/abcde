<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4caf50, #2196F3);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            flex-direction: column; /* Mengubah arah layout menjadi vertikal */
            align-items: center;
            width: 400px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            transition: transform 0.3s ease-in-out;
        }

        form:hover {
            transform: scale(1.05);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
        }

        input:focus {
            border-color: #4caf50;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .create-account {
            margin-top: 10px;
            text-align: center;
            color: #fff;
        }

        .create-account a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out; /* Menambahkan efek transisi pada perubahan warna */
        }

        .create-account a:hover {
            color: #45a049; /* Warna saat dihover */
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .checkbox-label input {
            margin-right: 8px;
        }

        .checkbox-label label {
            margin: 0;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <form>
        <div class="login-text">Login</div>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <div class="create-account">
        <p>Don't have an account? <a href="signup.html">Create an Account</a></p>
    </div>
</div>

</body>
</html>
