<!DOCTYPE HTML>
<html>
<head>
    <title>Full Motion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./view/style.css">
    <script>const projectName = 'portfolio';</script>
    <style>
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;

            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>

</head>
<body>
<link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous"
/>
<link
    href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap"
    rel="stylesheet"
/>
<link
    href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap"
    rel="stylesheet"
/>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="index.php?do=login">
            <input name="txtUsername" type="text" placeholder="username" value="" required/>
            <input name="txtPassword" type="password" placeholder="password" value="" required/>
            <button type="submit">login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>

    </div>
</div>
<?php include_once "footer.php"; ?>
</body>
</html>