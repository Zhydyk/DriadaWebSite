<?php

	$db=new mysqli("localhost","root","qwerty","simpledata");
	$db->query("set names utf8");
	if(mysqli_connect_errno()){
		printf("DB Error: %s\n",mysqli_connect_error());
		exit();
	}

?>