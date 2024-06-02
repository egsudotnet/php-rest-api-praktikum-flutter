<?php

header('Access-Control-Allow-Origin: *');
$connect = new mysqli("localhost:3306","root","","my_store");

if($connect){
	 
}else{
	echo "Connection Failed";
	exit();
}