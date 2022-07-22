<?php
	include 'db.php';
	$url = $_GET['cut_link'];
	$bool = false;
	if (strlen($_GET['cut_link'])!=null) {
		$token = token();
		$sql = "INSERT INTO links(link, token)VALUES('".$url."', '".$token."')";
		if (isset($sql)) {
			$conn->exec($sql);
			$bool = true;
		}
		if($bool){
			$_GET['cut_link'] = $_SERVER['SERVER_NAME'].'/'.$token.'/';
		}

	}
	else{
		$url = $_SERVER['REQUEST_URI'];
		$substr = substr($url, 1);
		$token = substr_replace($substr, "", -1);
		if (strlen($token) > 0) {
			$sql = "SELECT * FROM links WHERE token = '".$token."'";
			$all = $conn->query($sql);
			foreach ($all as $one){
				header("Location: ".$one['link']);
			}
		}
	}

	function token(){
		$elements = "absdefjhklmnopqstuvwxyzABSDEFJHKLMNOPQSTUVWXYZ0123456789";
		$array = str_split($elements);
		$count = rand(6, 9);
		$text='';
		for ($i=0; $i < $count; $i++) { 
			$text = $text."".$array[rand(0, $count)];
		}
		return $text;
	}
?> 