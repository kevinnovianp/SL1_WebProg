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
            font-size: 22pt;
            text-align: center;
            width: 100%;
            height: 91%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        table{
            margin-top: 20px;
        }
        table,tr,td{
            /* border: 1px solid black; */
            text-align: left;
            vertical-align: top;
            font-size: 12pt;
        }
        #td1{
            width: 120px;
        }
        #td2{
            width: 200px;
            font-size: 13pt;
        }
        #td3{
            width: 50px;
        }
        #err{
            height: 20px;
        }
        a{
            width: 15%;
            text-align: center;
            color: black;
            text-decoration: none;
        }
        img{
            height: 150px;
        }
    </style>
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