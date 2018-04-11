<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    
</head>

<body>
    <div class="wrapper">    
        <div class="main-wrapper">
            <div class="main-text1">
                <div class="main-title">
                    Відгуки
                </div>
            </div>
            <?php
                    include ("config.php");
                    $result=$db->query("SELECT * FROM vidhyku");
                    if($result)
                    {
                      
                      echo "<table padding:20px;>";
                      echo "<tr><td></td><td></tr>";
                      while($vidhyku = mysqli_fetch_array($result))
                      {
                        echo "<tr><td>".$vidhyku['name']."</td><td>".$vidhyku['message']."&nbsp;</td></tr>";
                      }
                      echo "</table>";
                    }
                    else
                    {
                      echo "<p><b>Error: ".mysqli_connect_errno()."</b><p>";
                      exit();
                    }
                ?>

            <div class="form">
                
                 
                <form action= "message.php" method= "POST"> 
                 
                <p>Ім'я: </p><p> <input type= "text" name= "name" required> </p> 
                 
                <p>E-mail: </p><p> <input type= "text" name= "email" required></p> 
                 
                <p>Повідомлення: </p><p> <textarea rows= "10" cols= "45" name= "message" required></textarea></p> 
                 
                <input type= "submit" value= "Відправити"> 

                <div class="text"></div>
                 

            </div>
                
        </div>
    </div>    
  </body>

</html>