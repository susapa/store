<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <?php
    include("/ConDB.php");
    include("/ClassUser.php");
    ?>
    <body>
        <?php
        echo $_POST["firstname"];
        $createuser = new user();
        $createuser->setFirstName($_POST["firstname"]);
        $createuser->setLastName($_POST["lastname"]);
        $createuser->setBirthDate($_POST["birthdate"]);
        $createuser->setTitle($_POST["title"]);
         $createuser->setSex($_POST["sex"]);
         $createuser->add();
        ?>
    </body>
</html>
