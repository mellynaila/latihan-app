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

        .card h3 {
            margin-top: 10px;
            color: #6b1386;
        }

        /* info box */

        .info {
            display: flex;
            justify-content: space-around;
            margin-top: 25px;
        }

        .box {
            background: #f4f6ff;
            padding: 15px;
            border-radius: 8px;
            width: 90px;
        }

        /* logout button */

        button {
            margin-top: 25px;
            padding: 10px 25px;
            border: none;
            background: #6b0f7e;
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

            <p>Anda berhasil login ke dashboard.</p>

        </div>

    </div>

</body>

</html>