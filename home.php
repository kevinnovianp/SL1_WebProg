<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 1</title>
    <link rel="stylesheet" href="./css/home.css">
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