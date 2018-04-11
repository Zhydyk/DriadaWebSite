<!DOCTYPE>
<html>
<head>

<title>Видалення</title>
</head>

<body>
<?php
include("config.php");
$id = $_GET["id"];
$delete_sql=$db->query("DELETE FROM `transfer` WHERE `transfer`.`id` = $id");

echo "<p>Запис був видалений успішно!</p>";
?>
<a href="admin.php">Адмін панель</a><br/><br/>

</body>
</html>