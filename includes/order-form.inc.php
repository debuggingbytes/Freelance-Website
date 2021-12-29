<?php
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

    //pages to includes
    include 'autoloader.inc.php';


    $orderObj = new OrderDetail();
    $orderName = "";

    
    if(isset($_GET['website_type'])){
        $type = $_GET['website_type'];
    }else{
        $type = 'st';
    }

    switch ($type){
        case "st":
            $orderName = "standard_template";
			$templateActive = true;
        break;
        case "pt":
            $orderName = "premium_template";
			$templateActive = true;
        break;
        case "bc":
            $orderName = "basic_custom";
			$templateActive = false;
        break;
        case "sc":
            $orderName = "standard_custom";
			$templateActive = false;
        break;
        case "pc":
            $orderName = "premium_custom";
			$templateActive = false;
        break;
        default:
            $orderName = "basic_template";
			$templateActive = true;
        break;
    }

    $row = $orderObj->getOrderDetails($orderName);
    $template_name = $row['1'];
    $template_price = $row['2'];
    $template_responsive = $row['3'];
    $template_seo = $row['4'];
    $template_php = $row['5'];
    $template_contact = $row['6'];
    $template_sql = $row['7'];

    $template_name = ucwords(str_replace("_", " ", $template_name));

    if($template_responsive){
        $responsive = '<option class="add" value="0"> Add Responsive (INCLUDED ALREADY)</option>';
    }else{
        $responsive = '<option class="add" value="150"> Add Responsive (+$150.00)</option>';
    }
    if($template_seo){
        $seo = '<option class="add" value="0"> Add SEO/SEM (INCLUDED ALREADY)</option>';
    }else{
        $seo = '<option class="add" value="150"> Add SEO/SEM (+$150.00)</option>';
    }
    if($template_contact){
        $contact = '<option class="add" value="0"> Yes (INCLUDED ALREADY)</option>';
    }else{
        $contact = '<option class="add" value="100"> Yes (+$100.00)</option>';
    }