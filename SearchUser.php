<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Edit User</title>
   <?php
    include("/ConDB.php");
    include("/ClassUser.php");
    ?>
 </head>
 <body>
     <?php
     $findUser = new user();
     $findUser->search();
     ?>
    </body>
</html>
