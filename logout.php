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
            background-color: #CAD1FF;
            font-family: Calibri;
            font-size: 30pt;
            text-align: center;
            width: 99%;
            height: 95%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #ok{
            background-color: #FBFDAC;
            width: 150px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20pt;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
</body>
</html>

<?php
    session_start();
    session_destroy();
    echo "
        <div id='box'>
            <p>Logout Berhasil!<br></p>
            <a href='./welcome.php'>
                <div id='ok'>
                    OK
                </div>
            </a>
        </div>
    ";
?>