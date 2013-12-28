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
        $findUser->edit($_GET["id"]);
        // echo $findUser->getFirstName();
        ?>

        <form name="edit" action="CreateUser.php" method="post">
            <input type="hidden" name="id" value=<?= $findUser->getId(); ?>>
            คำนำหน้า : <?= $findUser->getTitle(); ?> แก้ไขเป็น<input type="text" name="title" value=<?= $findUser->getTitle(); ?>><br>
            ชื่อ : <?= $findUser->getFirstName(); ?> แก้ไขเป็น<input type="text" name="firstname" value=<?= $findUser->getFirstName(); ?>><br>
            นามสกุล : <?= $findUser->getLastName(); ?> <input type="text" name="lastname" value=<?= $findUser->getLastName(); ?>><br>
            วันเกิด : <?= $findUser->getBirthDate(); ?><input type="text" name="birthdate" value=<?= $findUser->getBirthDate(); ?>><br>
            เพศ :<select>
                <option value=<?= $findUser->getSex() ?>><?= $findUser->getSex(); ?></option>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
            </select><br>
            Status :<select>
                <option value=<?= $findUser->getStatus() ?>><?= $findUser->getStatus(); ?></option>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
                <><br>
            </select>
            <input type="submit" value="Submit" onclick="" >
        </form> 
    </body>
</html>
