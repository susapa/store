<?php

class Product {

    public static $id;
    public static $name;
    public static $type;
    public static $detail;
    public static $price;

    function setId($id) {
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    public function add($name, $type, $detail, $price,$qty) {
        $sql = "INSERT INTO product (name,type,detail,price,qty)
                    VALUES ('$name','$type','$detail','$price','$qty')";
      if (!mysql_query($sql)) {
            die('ERROR : ' . mysql_error($sql));
        }
    }

    public function search() {
        $sql = "SELECT * FROM product";
        $result = mysql_query($sql);
        echo '<table border="1"><caption>รายการสินค้าในคลัง</caption><tr>';
        echo '<th>ชื่อ</th><th>หมวดหมู่</th><th>รายละเอียด</th><th>ราคา</th><th>คงเหลือ</th><th>วันรับสินค้า</th></tr>';
        while ($productResult = mysql_fetch_array($result)) {
            echo '<tr><td>' . $productResult["name"] . '</td>';
            echo '<td>' . $productResult["type"] . '</td>';
            echo '<td>' . $productResult["detail"] . '</td>';
            echo '<td>' . $productResult["price"] . '</td>';
            echo '<td>' . $productResult["qty"] . '</td>';
            echo '<td>' . $productResult["datecreate"] . '</td>';
          }
        echo '</tr></table>';
    }

}

?>
