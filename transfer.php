<?php
	$name = $_POST['name'];
	$surename = $_POST['surename'];
	$patronimic = $_POST['patronimic'];
	$birthday = $_POST['birthday'];
	$parentname = $_POST['parentname'];
	$transfer = $_POST['info'];
	$info = $_POST['info'];
	$backurl = "http://www.litodriada.com.ua"; 
	
	

	if(isset($name, $surename, $patronimic, $birthday, $parentname, $transfer, $info)) {

   		
   		include('config.php'); 
   		
		$result = $db->query("INSERT INTO `transfer` (`id`, `name`, `surename`, `patronimic`, `birthday`,`parentname`,`transfer`,`info`) VALUES (NULL,'$name','$surename','$patronimic','$birthday','$parentname','$transfer','$info')");
				
   		if($result){
    		echo "Ваші дані успішно добавлені";
?>
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="css/style5.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    
</head>

<body>
    <div class="wrapper">
    <div class="background1">    
        <div class="main-wrapper">
          <div class="background-color">
            <div class="main-text1">
                <div class="main-title">
                    Червень
                </div>
                <div class="button-wrapper col-12">
                  <a class="top-button button" href="">
                    02.06 - 09.06 (7 повних днів)<br>
                    4000 грн
                  </a>
                  <a class="top-button button" href="">
                    21.06 - 01.07 (10 повних днів)<br>
                    5500 грн
                  </a>
                </div>
            </div>
          </div>
            <div class="main-text2">
              <div class="main-title">
                    Липень
                </div>
                <a class="top-button button" href="">
                    01.07 - 11.07 (10 повних днів)<br>
                    5500 грн
                </a>
                <a class="top-button button" href="">
                    11.07 - 21.07 (10 повних днів)<br>
                    5500 грн
                </a>
                <a class="top-button button" href="">
                    21.07 - 31.07 (10 повних днів)<br>
                    5500 грн
                </a>
            </div>
            <div class="main-text3">
              <div class="main-title">
                    Серпень
                </div>
                <a class="top-button button" href="">
                    31.07 - 10.08 (10 повних днів)<br>
                    5500 грн
                </a>
                <a class="top-button button" href="">
                    10.08 - 20.08 (10 повних днів)<br>
                    5500 грн
                </a>
                <a class="top-button button" href="">
                    20.08 - 30.08 (10 повних днів)<br>
                    5500 грн
                </a>
            </div>
          </div>
        </div>
    </div>    
  </body>

</html>
<?php
		}
		else{echo "Ваші дані не добавлені";}
	}
	
	
?>