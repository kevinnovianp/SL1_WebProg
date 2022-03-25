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
        #title{
            margin-bottom: 0;
        }
        #note{
            margin-top: 10pt;
            font-size: 20pt;
        }
        #ok{
            background-color: #ADF59F;
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
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_SESSION)){
            if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
                echo "
                <div id='box'>
                    <p id='title'>Login Gagal!</p>
                    <p id='note'> Silahkan Register terlebih dahulu!</p>
                    <a href='./login.php'>
                        <div id='ok'>
                            OK
                        </div>
                    </a>
                </div>
                ";
            }
            else if(($_POST['username'] == $_SESSION['username']) && ($_POST['password'] == $_SESSION['password'])){
                echo "
                    <div id='box'>
                        <p>Login Berhasil!<br></p>
                        <a href='./home.php'>
                            <div id='ok'>
                                OK
                            </div>
                        </a>
                    </div>
                ";
            }
            else{
                echo "
                    <div id='box'>
                        <p id='title'>Login Gagal!</p>
                        <p id='note'> Silahkan input username dan password lagi yang benar!</p>
                        <a href='./login.php'>
                            <div id='ok'>
                                OK
                            </div>
                        </a>
                    </div>
                ";
            }
        }
    }
?>