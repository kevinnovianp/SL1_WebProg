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
            background-color: #FBFDAC;
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
        #box1{
            font-family: Calibri;
            font-size: 16pt;
            text-align: center;
            width: 100%;
            height: 9%;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        #title{
            padding-left: 50px;
            width: 55%;
            text-align: left;
        }
        #box2{
            background-color: #CAD1FF;
            font-family: Calibri;
            font-size: 16pt;
            text-align: center;
            width: 100%;
            height: 91%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        a{
            width: 15%;
            text-align: center;
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
    echo "
        <div id='box'>
            <div id='box1'>
                <div id='title'>
                    Aplikasi Pengelolaan Keuangan
                </div>
                <a href='./home.php'>
                    <div id='home'>Home</div>
                </a>
                <a href='./profile.php'>
                    <div id='profile'>Profile</div>
                </a>
                <a href='./logout.php'>
                    <div id='logout'>Logout</div>
                </a>  
            </div>
            <div id='box2'>
                <p>Halo <b>".$_SESSION['namaDepan']." ".$_SESSION['namaTengah']." ".$_SESSION['namaBelakang']."</b>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>
            </div>
        </div>
    ";
?>