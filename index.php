<?php   session_start();
            include 'login_exist.php';
            if (!$_SESSION['loggued_on_user'] || $_SESSION['loggued_on_user'] == "")
                $_SESSION["guest"] = "OK";
            if ($_GET[user] && $_GET[product])
            {
                $tab = unserialize(file_get_contents("private/passwd"));
                $i = login_exist($tab, $_GET[user]);
                $tab[$i]['order'][] = $_GET[product];
                if ($i != -1)
                    file_put_contents("private/passwd", serialize($tab));
            }
            if ($_SESSION["guest"] == "OK")
            {
                if (!isset($_SESSION["tmp"]))
                {
                    $tmp = array();
                    $_SESSION["tmp"] = $tmp;
                }
                if ($_GET[product])
                    array_push($_SESSION["tmp"], $_GET[product]);
            }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peoples for sale</title>
    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="css/body.css">
     <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/sign.css">
    <style type="text/css">
    	body {
    		background-position: center;
    		background-image: url(img/background-global2.jpg);
            background-size: contain;
    	}
    	
    </style>
</head>
<body>
<div id="block-body">
<?php
    include("include/block-header.php");
?> 

<div class="content-global">
    <div class="block-right">
    <?php 
        $total_count = 0;
        if (isset($_SESSION['basket'])){
            foreach($_SESSION['basket'] as $row){
                $total_count += $row['count'];
            }
        }
        echo "Рабов в корзине: $total_count";
    ?>
    </div>
    <div class="block-content">
     <?php
    $tab = unserialize(file_get_contents("private/products"));
    //print_r($tab);
    $i = 0;
    echo("<div ");
    while ($tab[$i])
    {
        $prod = $tab[$i]['id'];
        $photo = $tab[$i]['photo'];
        $name = $tab[$i]['name'];
        $desc = $tab[$i]['desc'];
        echo(" class='goods'>");
        echo("<img src=".$photo." width='200px'>");
        echo("<ul class='good-block'>");
        echo("<li class='goods-header'>".$name."</li>");
        echo("<li class='goods-body'><p>".$desc."</p></li>");
        echo("<li class='goods-price'><a href=''>".$prod."</a></li>");
        echo ("<form id='basket' method='POST' action='cart.php'>
            <input class='button' type='submit' name='cart' value=".$i.">
            </form>");
        echo("</ul>");
        echo("</div>");
        $i++;
        if ($tab[$i]){
            echo("<div ");
        }
    }
    ?>
    </div>
</div>

<?php
include("include/block-footer.php");
?>
</div>
</body>
</html>