<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head> 
    <?php
    include("/ConDB.php");
    include("/ClassProduct.php");
    ?>
    <body>
        <?php
         $showProduct = new Product();
         $showProduct->add($_POST["nameproduct"], $_POST["typeproduct"], $_POST["detailproduct"], $_POST["priceproduct"],$_POST["qtyproduct"]);
        $showProduct->search();
        ?>

    </body>
</html>
