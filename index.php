<?php
require_once('Database.php');

$apiKey=$_GET['apiKey'];
  $symbol=$_GET['symbol'];

  $sql = "SELECT value FROM today WHERE symbol = '$symbol'";
  $conn = $db->getConnection();
  $query = $conn -> prepare($sql);
  $query -> execute();
  $results = $query -> fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount()>0)
  {
    $currentValue = $results[0]->value;
    echo $currentValue;
  }
  else
  {
    header("HTTP/1.0 404 Not Found");
    echo 'err';
    die();
  }

?>