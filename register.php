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
            background-color: #C2F0F7;
            font-family: Calibri;
            text-align: center;
            width: 99%;
            height: 95%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table,tr,td{
            /* border: 1px solid black; */
            text-align: left;
            vertical-align: top;
        }
        #td1{
            width: 110px;
        }
        #td2{
            width: 200px;
        }
        #td3{
            width: 50px;
        }
        input[type=text],input[type=password],input[type=file],input[type=date],textarea{
            width: 95%;
        }
        #err{
            height: 20px;
        }
        #err .errorMsg{
            font-size: 10pt;
            color: red;
        }
        #bottom{
            margin-right: 10px;
            display: flex;
            flex-direction: row-reverse;
        }
        #buttons .btn{
            margin-top: 30px;
            margin-left: 10px;
            margin-right: 10px;
            width: 120px;
            height: 30px;
            border-radius: 5px 5px 5px;
            border: 2px solid black;
            box-shadow: 3px 3px 5px gray;
        }
        #buttons .btn:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="box">
        <p style="font-size: 30pt; margin-top: 15px;">
            Register
        </p>
        <br>
        <form method="post" action="prosesRegister.php" enctype="multipart/form-data" id="formRegister">
            <table>
                <tr>
                    <td id="td1">Nama Depan</td>
                    <td id="td2"><input type="text" name="namaDepan" id="namaDepan"></td>
                    <td id="td3"></td>
                    <td id="td1">Nama Tengah</td>
                    <td id="td2"><input type="text" name="namaTengah" id="namaTengah"></td>
                    <td id="td3"></td>
                    <td id="td1">Nama Belakang</td>
                    <td id="td2"><input type="text" name="namaBelakang" id="namaBelakang"></td>
                </tr>
                <tr>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
                <tr>
                    <td id="td1">Tempat Lahir</td>
                    <td id="td2"><input type="text" name="tempatLahir" id="tempatLahir"></td>
                    <td id="td3"></td>
                    <td id="td1">Tgl Lahir</td>
                    <td id="td2"><input type="date" name="tglLahir" id="tglLahir"></td>
                    <td id="td3"></td>
                    <td id="td1">NIK</td>
                    <td id="td2"><input type="text" name="nik" id="nik"></td>
                </tr>
                <tr>
                    
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
                <tr>
                    <td id="td1">Warga Negara</td>
                    <td id="td2"><input type="text" name="wargaNegara" id="wargaNegara"></td>
                    <td id="td3"></td>
                    <td id="td1">Email</td>
                    <td id="td2"><input type="text" name="email" id="email"></td>
                    <td id="td3"></td>
                    <td id="td1">No HP</td>
                    <td id="td2"><input type="text" name="noHP" id="noHP"></td>
                </tr>
                <tr>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
                <tr>
                    <td id="td1">Alamat</td>
                    <td id="td2"><textarea name="alamat" id="alamat"></textarea></td>
                    <td id="td3"></td>
                    <td id="td1">Kode Pos</td>
                    <td id="td2"><input type="text" name="kodePos" id="kodePos"></td>
                    <td id="td3"></td>
                    <td id="td1">Foto Profil</td>
                    <td id="td2"><input type="file" name="fotoProfil" id="fotoProfil"></td>
                </tr>
                <tr>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
                <tr>
                    <td id="td1">Username</td>
                    <td id="td2"><input type="text" name="username" id="username"></td>
                    <td id="td3"></td>
                    <td id="td1">Password 1</td>
                    <td id="td2"><input type="password" name="password1" id="password1"></td>
                    <td id="td3"></td>
                    <td id="td1">Password 2</td>
                    <td id="td2"><input type="password" name="password2" id="password2"></td>
                </tr>
                <tr>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                    <td id="id3"></td>
                    <td id="err" colspan="2"><div class="errorMsg"></div></td>
                </tr>
            </table>
            <div id="bottom">
                <div id="buttons">
                    <input type="button" class="btn" value="Kembali" onclick="back()" style="background-color: #FDD7AC;">
                    <input type="submit" class="btn" id="register" value="Register" name="Register" onclick="event.preventDefault(); submitForm();" style="background-color: #ADF59F;">
                </div>
            </div>
        </form>
    </div>
</body>
    <script>
        let id = (id) => document.getElementById(id)
        let classes = (classes) => document.getElementsByClassName(classes)
        let formRegister = id("formRegister"),
            namaDepan = id("namaDepan"),
            namaTengah = id("namaTengah"),
            namaBelakang = id("namaBelakang"),
            tempatLahir = id("tempatLahir"),
            tglLahir = id("tglLahir"),
            nik = id("nik"),
            wargaNegara = id("wargaNegara"),
            email = id("email"),
            noHP = id("noHP"),
            alamat = id("alamat"),
            kodePos = id("kodePos"),
            fotoProfil = id("fotoProfil"),
            username = id("username"),
            password1 = id("password1"),
            password2 = id("password2"),
            errorMsg = classes("errorMsg")
        
        let engine = (id,serial,isValid,message) => {
            errorMsg[serial].innerHTML = message
        }
        let tmp=0

        function validate(){
            tmp=0
            if(namaDepan.value.trim() === ""){
                engine(namaDepan,0,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,0,true,"")

            if(namaTengah.value.trim() === ""){
                engine(namaDepan,1,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,1,true,"")

            if(namaBelakang.value.trim() === ""){
                engine(namaDepan,2,false,"Input can't be empty!")
                tmp+=1
            } else engine(namaDepan,2,true,"")

            if(tempatLahir.value.trim() === ""){
                engine(tempatLahir,3,false,"Input can't be empty!")
                tmp+=1
            } else engine(tempatLahir,3,true,"")

            if(tglLahir.value.trim() === ""){
                engine(tglLahir,4,false,"Input can't be empty!")
                tmp+=1
            } else if(new Date(tglLahir.value).getDate() >= new Date().getDate()) {
                engine(tglLahir,4,false,"Input can't be equal or greater than current date!")
                tmp+=1
            } else{
                engine(tglLahir,4,true,"")   
            }
        
            if(nik.value.trim() === ""){
                engine(nik,5,false,"Input can't be empty!")
                tmp+=1
            } else if(nik.value.match(/^[0-9]+$/)==null || nik.value.length != 16){
                engine(nik,5,false,"Input must be 16 digits!")
                tmp+=1
            } else engine(nik,5,true,"")
            
            if(wargaNegara.value.trim() === ""){
                engine(wargaNegara,6,false,"Input can't be empty!")
                tmp+=1
            } else engine(wargaNegara,6,true,"")
            
            if(email.value.trim() === ""){
                engine(email,7,false,"Input can't be empty!")
                tmp+=1
            } else if(!email.value.endsWith("@gmail.com")){
                engine(email,7,false,"Input must ended with @gmail.com!")
                tmp+=1
            } else engine(email,7,true,"")

            if(noHP.value.trim() === ""){
                engine(noHP,8,false,"Input can't be empty!")
                tmp+=1
            } else if(noHP.value.match(/^[0-9]+$/)==null || noHP.value.length != 12){
                engine(noHP,8,false,"Input must be 12 digits!")
                tmp+=1
            } else engine(noHP,8,true,"")

            if(alamat.value.trim() === ""){
                engine(alamat,9,false,"Input can't be empty!")
                tmp+=1
            } else if(!alamat.value.startsWith("Jln.")){
                engine(alamat,9,false,"Input must started with Jln.!")
                tmp+=1
            } else engine(alamat,9,true,"")

            if(kodePos.value.trim() === ""){
                engine(kodePos,10,false,"Input can't be empty!")
                tmp+=1
            } else if(kodePos.value.match(/^[0-9]+$/)==null || nik.value.length < 5){
                engine(kodePos,10,false,"Input must be at least 5 digits!")
                tmp+=1
            } else engine(kodePos,10,true,"")

            if(fotoProfil.value.trim() === ""){
                engine(fotoProfil,11,false,"Input can't be empty!")
                tmp+=1
            } else{
                var path = fotoProfil.value
                var ext = path.substring(path.lastIndexOf('.')+1).toLowerCase()
                if(!(ext == "png" || ext == "jpg" || ext == "jpeg")){
                    engine(fotoProfil,11,false,"Input format must be .png, .jpg, or .jpeg!")
                    tmp+=1
                }
                else engine(fotoProfil,11,true,"")
            }

            if(username.value.trim() === ""){
                engine(username,12,false,"Input can't be empty!")
                tmp+=1
            } else if(username.value.length < 5){
                engine(username,12,false,"Input must be at least 5 characters!")
                tmp+=1
            }else engine(username,12,true,"")

            if(password1.value.trim() === ""){
                engine(password1,13,false,"Input can't be empty!")
                tmp+=1
            } else if(password1.value.length < 8){
                engine(password1,13,false,"Input must be at least 8 characters!")
                tmp+=1
            } else engine(password1,13,true,"")

            if(password2.value.trim() === ""){
                engine(password2,14,false,"Input can't be empty!")
                tmp+=1
            } else if(password2.value != password1.value){
                engine(password2,14,false,"Input must be same as password 1!")
                tmp+=1
            } else engine(password2,14,true,"")
        }

        function submitForm(){
            tmp=0
            validate()
            if(tmp==0){
                formRegister.submit()
            }
            else{
                returnToPreviousPage()
                return false
            }
        }
        
        function back(){
            location = "./welcome.php"
        }
    </script>
</html>