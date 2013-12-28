<?php

class user {

    public static $firstname;
    public static $lastname;
    // public $address;
    public static $birthdate;
    public static $title;
    public static $sex;
    public static $pass;
    //public static $resultQuery;
    public static $status;
    public static $id;

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function setFirstName($firstname) {
        $this->firstname = $firstname;
    }

    function getFirstName() {
        return $this->firstname;
    }

    function setLastName($lastname) {
        $this->lastname = $lastname;
    }

    function getLastName() {
        return $this->lastname;
    }

    function setBirthDate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function getBirthDate() {
        return $this->birthdate;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function getTitle() {
        return $this->title;
    }

    function setSex($sex) {
        $this->sex = $sex;
    }

    function getSex() {
        return $this->sex;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function getStatus() {
        return $this->status;
    }

    public function add() {
        $sql = "INSERT INTO users (firstname,lastname,title,sex,birthdate)
                    VALUES ('$this->firstname','$this->lastname','$this->title','$this->sex','$this->birthdate')";
        if (!mysql_query($sql)) {
            die('ERROR : ' . mysql_error($sql));
        }
    }

    public function search() {
        $sql = "SELECT * FROM USERS";
        $result = mysql_query($sql);
        echo '<table border="1"><caption>รายชื่อ ลูกค้า</caption><tr>';
        echo '<th>ชื่อ</th><th>นามสกุล</th><th>อายุ</th><th>เพศ</th><th>ประเภท</th><th>สถานะ</th><th>แก้ไข</tr>';
        while ($resultQuery = mysql_fetch_array($result)) {
            echo '<td>' . $resultQuery["title"] . '&nbsp;&nbsp;' . $resultQuery["firstname"] . '</td>';
            echo '<td>' . $resultQuery["lastname"] . '</td>';
            echo '<td>' . $resultQuery["birthdate"] . '</td>';
            echo '<td>' . $resultQuery["sex"] . '</td>';
            echo '<td>' . $resultQuery["type"] . '</td>';
            echo '<td>' . $resultQuery["status"] . '</td>';
            echo '<td><a href="EditUser.php?id=' . $resultQuery["id"] . '">แก้ไข</a></td></tr>';
        }
        echo '</table>';
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = ";
        if (!mysql_query($sql)) {
            die() . mysql_error($sql);
        }
    }

    public function edit($id) {
        $sql = "SELECT * FROM USERS WHERE id =" . $id;
        $result = mysql_query($sql);
        $resultQuery = mysql_fetch_array($result);
        $this->firstname = $resultQuery["firstname"];
        $this->lastname = $resultQuery["lastname"];
        $this->title = $resultQuery["title"];
        $this->birthdate = $resultQuery["birthdate"];
        $this->sex = $resultQuery["sex"];
        $this->status = $resultQuery["status"];
        $this->id = $resultQuery["id"];
    }

    public function update($id,$firstname,$lastname) {
        $sql = "UPDATE users SET firstname ='" .$firstname. "',lastname='" .$lastname. "' WHERE ID=" . $id;
        if (!mysql_query($sql)) {
            die() . mysql_error($sql);
        } else {
            echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
        }
    }

}
?>
        
