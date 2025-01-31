<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon"  sizes="64x64" href="logo/dom-san.png" />
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #5CCEFF; /* Warna biru muda */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            text-align: center;
            padding-bottom: 50px;
        }

        .login-container img {
            width: 180px;
            margin: 0;
            bottom: 0;
            padding: 0;
        }

        .login-container h2 {
            font-style: italic;
            font-size: 16px;
            color: black;
            margin-bottom: 60px; 
        }

        .login-container p { 
            font-size: 12;
            font-style: light;
            text-align: left;
            margin: 0;
            bottom: 0;
            padding: 0;
        }

        .login-container input {
            margin-top: 5px;
            width: 95%;
            padding: 7px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 15px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #5CCEFF;
            margin-bottom: 20px;
        }

        .login-container button {
            margin-top: 50px;
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .login-container button:hover {
            background-color: #333;
        }

        .login-container .guide {
            display: block;
            padding: 7px;
            background-color: white;
            color: black;
            border: 1px solid black;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;  
        }

        .login-container .guide:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo/dom-san.png" alt="">
        <h2>Sebelum masuk, silahkan login dahulu ....</h2>
        <form action="ceklogin.php" method="post">
            <p>Username </p>
            <input type="text" name="username" placeholder="Username" >
            <p>Password </p>
            <input type="password" name="password" placeholder="Password" >
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
