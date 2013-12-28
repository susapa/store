<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            #createuser p label {
                width: 150px;
                display: block;
            }
            fieldset {
                margin: auto;
                width: 640px;
                height: 480px;
                background: none repeat scroll 0 0 #F1F1F1;
                border: 1px solid #E5E5E5;
                padding: 20px 25px 15px;
            }
            #createuser p #login {
                font-size: 13px;
                height: 32px;
                margin: 0 1.5em 1.2em 0;
                background-color: #4D90FE;
                background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED);
                border: 1px solid #3079ED;
                color: #FFFFFF;
                text-shadow: 0 1px rgba(0, 0, 0, 0.1);
                cursor: pointer;
            }
            input[name="username"], input[name="password"],input[name="firstname"],input[name="lastname"],input[name="title"],select[name="sex"]{
                -moz-border-bottom-colors: none;
                -moz-border-image: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                -moz-box-sizing: border-box;
                background: none repeat scroll 0 0 #FFFFFF;
                border-color: #C0C0C0 #D9D9D9 #D9D9D9;
                border-radius: 1px 1px 1px 1px;
                border-right: 1px solid #D9D9D9;
                border-style: solid;
                border-width: 1px;
                display: inline-block;
                height: 29px;
                margin: 0;
                padding: 0 8px;
            }
            .box {
                margin-top: 60px;
                margin-right: 35px;
                margin-bottom: 35px;
                margin-left: 35px;
            }
        </style>
    </head> 
    <?php
    include("/ConDB.php");
    include("/ClassUser.php");
    if(isset($_POST["firstname"])){
        $updateUser = new user();
        //$updateUser->setFirstName($_POST["firstname"]);
       // $updateUser->setLastName($_POST["lastname"]);
        $updateUser->update($_POST["id"],$_POST["firstname"],$_POST["lastname"]);
    }
   ?>
    <body>
        <div class="box">
            <fieldset>
                <form id="createuser" name="createuser" method="post" action="CreateUser_do.php">
                    <p>
                        <label for="username">สร้างผู้ใช้</label>
                        UserName &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="username" />
                    </p>
                    <p> PassWord &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="password" id="password" /> </p>
                    <p> คำนำหน้า &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title" id="title" /></p>
                    <p> ชื่อ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstname" id="firstname" /></p>
                    <p> นามสกุล &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" id="lastname" /></p>
                    <p> วันเกิด &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="birthdate" id="birthdate" /></p>
                    <p> เพศ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;
                             <select name="sex" id="sex">
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                             </select></p>
                    <p>
                        <input type="submit" name="login" id="login" value="ตรวจสอบชื่อผู้ใช้" />
                    </p>
                </form>
            </fieldset>
        </div>
    </body>
</html>
