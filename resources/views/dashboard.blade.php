<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f1f4f9;
        }

        /* navbar */

        .navbar {
            background: #6b045a;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        /* container */

        .container {
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        /* card */

        .card {
            background: white;
            padding: 35px;
            width: 420px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* logout button */

        button {
            margin-top: 25px;
            padding: 10px 25px;
            border: none;
            background: #f11101;
            color: white;
            border-radius: 5px;
            font-size: 14px;
        }

        button:hover {
            background: #a00c98;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <div class="navbar">

        <h2>Dashboardku!</h2>

        <form method="POST" action="/logout">
            @csrf
            <button>Logout</button>
        </form>

    </div>

    <div class="container">

        <div class="card">

            <h2>Selamat Datang</h2>

            <p>Naila berhasil login ke dashboard.</p>

        </div>

    </div>

</body>

</html>