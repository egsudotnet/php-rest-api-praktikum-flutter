<?php

	include 'conn.php';
	
	$id = $_POST['id'];
	$itemcode = $_POST['itemcode'];
	$itemname = $_POST['itemname'];
	$price = $_POST['price'];
	$stock= $_POST['stock'];
	$diskon= $_POST['diskon'];
	
	$connect->query("
		UPDATE tb_item 
		SET 
		item_code='".$itemcode."', 
		item_name='".$itemname."', 
		price='".$price."', 
		stock='".$stock."',
		diskon='".$diskon."' 
		WHERE id=". $id);

?>