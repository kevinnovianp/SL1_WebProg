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
            text-align: center;
            width: 99%;
            height: 95%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #box2{
            background-color: #ACE6FD;
            width: 50%;
            height: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 16pt;
        }
        table,tr,td{
            /* border: 1px solid black; */
            text-align: left;
            vertical-align: top;
        }
        td{
            height: 30px;
        }
        #td1{
            width: 120px;
        }
        #td2{
            width: 300px;
        }
        input[type=text],input[type=password]{
            font-size: 12pt;
            width: 90%;
        }
        #buttons{
            margin-top: 30px;
            width: 80%;
            height: 20%;
            display: flex;
            justify-content: space-between;
        }
        #loginBtn, #backBtn{
            width: 100px;
            height: 30px;
            font-size: 13pt;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px 5px 5px;
            border: 1.5px solid black;
            box-shadow: 3px 3px 5px gray;
        }
        #loginBtn:hover, #backBtn:hover{
            cursor: pointer;
        }
        #errorMsg{
            height: 12pt;
            padding-left: 5px;
            padding-top: 20px;
            align-self: flex-start;
            color: red;
            font-size: 12pt;
        }
    </style>
</head>
<body>
    <div id="box">
        <p style="font-size: 30pt; margin-top: 15px;">
            Login
        </p>
        <br>
        <div id="box2">
            <form action="./prosesLogin.php" method="post" id="formLogin">
                <table>
                    <tr>
                        <td id="td1">Username</td>
                        <td id="td2"><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td id="td1">Password</td>
                        <td id="td2"><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="buttons">
                            <input type="submit" id="loginBtn" value="Login" name="Login" onclick="event.preventDefault(); submitForm();" style="background-color: #ADF59F;">
                            <input type="button" id="backBtn" value="Kembali" name="Kembali" onclick="back()" style="background-color: #FDD7AC;">
                        </td>
                    </tr>
                </table>
            </form>
            <div id="errorMsg"></div>
        </div>
    </div>
</body>
    <script>
        let id = (id) => document.getElementById(id)
        let formLogin = id("formLogin"),
            username = id("username"),
            password = id("password"),
            errorMsg = id("errorMsg")

        function validate(){
            if(username.value.trim() === "" || password.value.trim() === ""){
                errorMsg.innerHTML = "* Username and Password must be filled!"
                return false
            }
            errorMsg.innerHTML = ""
            return true
        }

        function submitForm(){
            if(validate()){
                formLogin.submit()
            } else{
                returnToPreviousPage()
                return false
            }
        }

        function back(){
            location = "./welcome.php"
        }
    </script>
</html>