<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 1</title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            background-color: #D3D3D3;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #box{
            background-color: #E5EDEB;
            font-family: Calibri;
            text-align: center;
            width: 99%;
            height: 95%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #buttons{
            width: 40%;
            height: 20%;
            display: flex;
            justify-content: space-between;
        }
        #buttons #btn{
            width: 200px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="box">
        <p style="font-size: 18pt;">
            <br><br>
            Aplikasi Pengelolaan Keuangan
            <br>
        <p>
        <p style="font-size: 30pt; margin-bottom: 10px;">
            Selamat Datang di Aplikasi Pengelolaan Keuangan
        <p>
        <div id="buttons">
            <a href="./login.php">
                <div id="btn" style="background-color: #99D6ED;">
                <h1>LOGIN</h1>
                </div>
            </a>
            <a href="./register.php">
                <div id="btn" style="background-color: #C6ED99;">
                    <h1>REGISTER</h1>
                </div>
            </a>
        </div>
    </div>
    
</body>
</html>