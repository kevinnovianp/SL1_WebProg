<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL WP 1</title>
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
</body>
</html>

<?php
    session_start();
    $tglLahir2 = date("d-m-Y",strtotime($_SESSION['tglLahir']));
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
                <p>
                    <b>Profil Pribadi</b>
                </p>
                <table>
                    <tr>
                        <td id='td1'>Nama Depan</td>
                        <td id='td2'><b>".$_SESSION["namaDepan"]."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Nama Tengah</td>
                        <td id='td2'><b>".$_SESSION["namaTengah"]."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Nama Belakang</td>
                        <td id='td2'><b>".$_SESSION["namaBelakang"]."</b></td>
                    </tr>
                    <tr>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                    </tr>
                    <tr>
                        <td id='td1'>Tempat Lahir</td>
                        <td id='td2'><b>".$_SESSION['tempatLahir']."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Tgl Lahir</td>
                        <td id='td2'><b>".$tglLahir2."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>NIK</td>
                        <td id='td2'><b>".$_SESSION["nik"]."</b></td>
                    </tr>
                    <tr>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                    </tr>
                    <tr>
                        <td id='td1'>Warga Negara</td>
                        <td id='td2'><b>".$_SESSION['wargaNegara']."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Email</td>
                        <td id='td2'><b>".$_SESSION['email']."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>No HP</td>
                        <td id='td2'><b>".$_SESSION['noHP']."</b></td>
                    </tr>
                    <tr>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                    </tr>
                    <tr>
                        <td id='td1'>Alamat</td>
                        <td id='td2'><b>".$_SESSION['alamat']."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Kode Pos</td>
                        <td id='td2'><b>".$_SESSION['kodePos']."</b></td>
                        <td id='td3'></td>
                        <td id='td1'>Foto Profil</td>
                        <td id='td2'>
                            <img src='".$_SESSION['fotoProfil']."' alt=''>
                        </td>
                    </tr>
                    <tr>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                        <td id='id3'></td>
                        <td id='err' colspan='2'></td>
                    </tr>
                </table>
            </div>
        </div>
    ";
?>