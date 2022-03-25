<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 1</title>
    <link rel="stylesheet" href="./css/prosesLogin.css">
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