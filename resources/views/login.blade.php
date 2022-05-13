<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Project Warisan Budaya</title>
    <link rel="icon" href="{{ asset('images/balinese.png') }}">
</head>

<body>
    <form action="/login" method="POST">
        @csrf
        <div class="imgcontainer">
            <img src="{{ asset('images/balinese.png') }}" alt="Avatar" class="avatar">
            <h1>Project Warisan Budaya</h1>
        </div>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Masukan username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Masukan password" name="password" required>

            <button type="submit">Login</button>
        </div>
    </form>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');

        body {
            font-family: "Noto Serif", Arial, Helvetica, sans-serif;
            margin: auto;
            padding: 0;
            max-width: 80vw;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        /* Extra style for the cancel button (red) */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the avatar image inside this container */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        .imgcontainer h1 {
            font-family: "Dancing Script", Arial, Helvetica, sans-serif;
            font-size: 2.5em;
        }

        /* Avatar image */
        img.avatar {
            width: 40%;
            max-width: 20vw;
            border-radius: 50%;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text */
        span.password {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.password {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

    </style>
</body>

</html>
