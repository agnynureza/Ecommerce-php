<?php

    include_once("function/helper.php");
	$page = isset($_GET['page']) ? $_GET['page'] : false;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Weshop | barang-barang elektronik</title>
        <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css";?>" type="text/css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <a href="<?php echo BASE_URL."index.php";?>">
                    <img src="<?php echo BASE_URL."images/logo.png";?>"/>
                </a>
                <div id="menu">
                    <div id="user">
                        <a href="<?php echo BASE_URL."index.php?page=login";?>">
                            Login
                        </a>
                        <a href="<?php echo BASE_URL."index.php?page=register";?>">
                            Register
                        </a>
                    </div>
                    <a id="button-keranjang" href="<?php echo BASE_URL."index.php?page=keranjang";?>">
                        <img src="<?php echo BASE_URL."images/cart.png";?>"/>
                    </a>
                </div>
            </div>
            <div id="content">
				<?php
					$filename = "$page.php";
					if(file_exists($filename)){
						include_once($filename);
					}else{
						echo "Soory, page not found";
					}
				?>
            </div>
            <div id="footer">
                <p>copyright Weshop 2019</p>
            </div>
        </div>
    </body>
</html>    