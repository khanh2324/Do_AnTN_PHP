<?php

include_once 'configs.php';

$url_redirect = isset ($_SESSION['USER_LOGGED']) ? "/admin/product.php" : "/admin-login.php"; 

header ("location: ".$url_redirect);
die();