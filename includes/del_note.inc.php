<?php
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    //pages to includes
    include 'autoloader.inc.php';


	$orderObj = new ViewOrders();

	$uid = $_GET['delNote'];

	$orderObj->delNote($uid);
	