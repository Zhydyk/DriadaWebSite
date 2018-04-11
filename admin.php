<?php
session_start();
if(!isset($_SESSION["name"])){ 
  header("location:login.php"); 
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Welcome To Admin Page</title>
</head>
<body>
    <h1>Welcome To Admin Page</h1>
    	<?php
include "config.php";
$result=$db->query("SELECT * FROM anketa");
if($result)
{
  
  echo "<table border = 1;>";
  echo "<tr><td>Ім'я</td><td>Прізвище</td><td>По-батькові</td><td>День народження</td><td>Адрес</td><td>Прізвище батьків</td><td>Стать</td><td>Заїзди</td><td></td></tr>";
  while($author = mysqli_fetch_array($result))
  {
    echo "<tr><td>".$author['name']."</td><td>".$author['surename']."
     </td><td>".$author['patronimic']."&nbsp;</td><td>".  
    $author['birthday']."&nbsp;</td><td>".$author['adress']."&nbsp;</td><td>".$author['parentname']."&nbsp;</td><td>".$author['sex']."&nbsp;</td><td>".$author['zayizdu']."&nbsp;</td><td><a href='delete.php?id=" . $author['id'] . "'>Видалити</a>&nbsp;</td></tr>";
  }
  echo "</table>";
}
$transfer = $db->query("SELECT * FROM transfer");
?>

<h3>Бланк Трансферу</h3>

<?php
if($transfer){  
  echo "<table border = 1;>";
  echo "<tr><td>Ім'я</td><td>Прізвище</td><td>По-батькові</td><td>День народження</td><td>Інформація про батьків</td><td>Трансфер з</td><td>Трансфер до</td>";
  while($bus = mysqli_fetch_array($transfer))
  {
    echo "<tr><td>".$bus['name']."</td><td>".$bus['surename']."
     </td><td>".$bus['patronimic']."&nbsp;</td><td>".  
    $bus['birthday']."&nbsp;</td><td>".$bus['parentname']."&nbsp;</td><td>".$bus['transfer']."&nbsp;</td><td>".$bus['info']."&nbsp;</td><td><a href='deletetransfer.php?id=" . $bus['id'] . "'>Видалити</a>&nbsp;</td></tr>";
  }
  echo "</table>";
}
else
{
  echo "<p><b>Error: ".mysqli_connect_errno()."</b><p>";
  exit();
}
?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>