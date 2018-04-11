<?php
	$name = $_POST['name'];
	$surename = $_POST['surename'];
	$patronimic = $_POST['patronimic'];
	$birthday = $_POST['birthday'];
	$adress = $_POST['adress'];
	$parentname = $_POST['parentname'];
	$size = $_POST['size'];
	$info = $_POST['info'];
	$sex = $_POST['sex'];
	$zayizdu = $_POST['zayizdu'];
	$backurl = "http://www.litodriada.com.ua"; 
	
	

	if(isset($name, $surename, $patronimic, $birthday, $adress, $parentname,$size, $info, $sex, $zayizdu)) {

   		
   		include('config.php'); 
		$result = $db->query("INSERT INTO `anketa`(`id`, `name`, `surename`, `patronimic`, `birthday`,`adress`,`parentname`,`size-tshirt`,`info`,`sex`,`zayizdu`) VALUES (NULL,'$name','$surename','$patronimic','$birthday','$adress','$parentname','$size','$info','$sex','$zayizdu')");
				
   		if($result){
    		echo "Ваші дані успішно добавлені";
			print " <p>Повідомлення відправлено, зараз ви будете перенаправлені на головну сторінку</p> <script language='Javascript'> function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000);</script>";
		}
		else{echo "Ваші дані не добавлені";}
	}
	
	
?>