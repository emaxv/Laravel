<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
    <?php
include_once 'tclass.php';
$conn = DB_Class::getDB();
//$conn-> exec("SET CHARACTER SET utf8");
$sql = "SELECT * FROM `LaLa`";
//$result = $conn -> query($sql);
//while ($row = $result->fetch(PDO::FETCH_ASSOC)){
  //  echo $row['ID'] . ' ' . $row['Name'];
    //echo ($row -> value);
//}

?>
</html>