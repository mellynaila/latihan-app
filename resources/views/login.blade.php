<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(120deg, #6a11cb, #5c0da7);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #b8086e;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
        }

        button:hover {
            background: #a815ad;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

    <div class="login-box">

        <h2>Login</h2>

        @if(session('error'))
        <p class="error">{{ session('error') }}</p>
        @endif

        <form method="POST" action="/login">
            @csrf

            <input type="text" name="username" placeholder="Username">

            <input type="password" name="password" placeholder="Password">

            <button type="submit">Login</button>

        </form>

    </div>

</body>

</html>