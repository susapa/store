<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            div{
                margin-top:50px;
                margin-left:350px;
            }
            label {
                width:100px;
                float:left;
                font-size:12px;
                line-height:24px;
                font-weight:bold;

            }
            input {
                width:300px;
                margin-bottom:5px;
                line-height:18px;
                padding:2px 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border:1px solid #CCC;
            }
            /*General rules*/
            #form3 input {
                line-height:18px;
            }
            /*Text, email & tel input fields*/
            #form3 input[type=nameproduct],
            #form3 input[type=email],
            #form3 input[type=tel] {
                width:300px;
                margin-bottom:8px;
                padding:2px 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border:1px solid #CCC;
            }
            /*Just the tel field*/
            #form3 input[type=tel] {
                width:150px;
            }
            /*The Submit Button */
            #form3 input[type=button] {
                margin-top:5px;
                margin-left:60px;
                padding:2px 20px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border:2px solid #06C;
                background-color:#09F;
                color:#fff;
                font-weight:bold;
                width:150px;
            }
            #form3 input[type=text]:focus,
            #form3 input[type=email]:focus,
            #form3 input[type=tel]:focus{
                border:1px solid #09F;
                -webkit-box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.3);
                -moz-box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head> 
    <?php
    include("/ConDB.php");
    include("/ClassProduct.php");
    ?>
    <body>
        <div>
            <form id="form3" name="form1" method="post" action="AddProduct_do.php">
                <label for="Email">Name:</label><input name="nameproduct" id="nameproduct" type="text" /><br />
                <label for="Name">หมวดหมู่สินค้า:</label><select name="typeproduct">
                    <option vaule="เครื่องใช้สำนักงาน">เครื่องใช้สำนักงาน</option>
                </select><br />
                <label for="Phone">Detail:</label><input name="detailproduct" id="detailproduct" type="text" /><br />
                <label for="Price">จำนวน:</label><input name="qtyproduct" id="qtyproduct" type="text" /><br />
                <label for="Price">ราคา:</label><input name="priceproduct" id="priceproduct" type="text" /><br />
                <input name="submit" type="submit" value="Submit" />
            </form>
        </div>
    </body>
</html>
