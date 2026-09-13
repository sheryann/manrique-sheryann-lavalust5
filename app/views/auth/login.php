<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 90%;
            max-width: 780px;
            background-color: white;
            padding: 55px 70px;
            border-radius: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .system-title {
            text-align: center;
            color: #e91e63;
            font-size: 34px;
            margin: 0;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            color: #555;
            font-size: 21px;
            margin-top: 8px;
        }

        .login-title {
            text-align: center;
            color: black;
            font-size: 45px;
            margin-top: 55px;
            margin-bottom: 10px;
        }

        .description {
            text-align: center;
            color: #777;
            font-size: 20px;
            margin-bottom: 45px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: black;
            font-size: 19px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 16px;
            border: 2px solid #f48fb1;
            border-radius: 10px;
            font-size: 17px;
            outline: none;
        }

        input:focus {
            border-color: #e91e63;
        }

        input::placeholder {
            color: #999;
        }

        .login-button {
            width: 100%;
            padding: 16px;
            margin-top: 10px;
            background-color: #e91e63;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #c2185b;
        }

        .footer {
            text-align: center;
            color: #777;
            font-size: 17px;
            margin-top: 45px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h1 class="system-title">
            Product Management System
        </h1>

        <p class="subtitle">
            CRUD LAVALUST LAB5
        </p>

        <h2 class="login-title">
            Login
        </h2>

        <p class="description">
            Sign in to manage product records.
        </p>

        <form action="<?= site_url('/login') ?>" method="POST">

            <div class="form-group">
                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Enter username"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter password"
                    required
                >
            </div>

            <button class="login-button" type="submit">
                Sign In
            </button>

        </form>

        

    </div>

</body>
</html>