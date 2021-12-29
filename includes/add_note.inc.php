<?php
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    //pages to includes
    include 'autoloader.inc.php';


	$orderObj = new ViewOrders();

	$note = $_POST['note'];
	$uid = $_POST['uid'];

	$orderObj->addnote($uid, $note);