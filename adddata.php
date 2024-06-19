<?php

	include 'conn.php';
	
	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	
	$diskon= $_POST['diskon'];
	
	$connect->query("
		INSERT INTO tb_item 
		(item_code,item_name,price,stock,diskon) 
		VALUES (
			'".$itemcode."',
			'".$itemname."',
			'".$price."',
			'".$diskon."',
			'".$diskon."'
		)")

?>