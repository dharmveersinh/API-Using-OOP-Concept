<?php
  include_once 'config/conn.php';
  include_once 'Functions/updateFunction.php';

  $database = new Database();
  $db = $database->getconn();

  $id=$_GET['id'];
  $number=$_GET['num'];

  $updateo = new Update();
  $update = $updateo->update2($db,$id,$number);
  $array=array("Responce"=>$update);
  echo json_encode($array);
?>
