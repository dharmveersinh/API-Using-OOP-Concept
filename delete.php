<?php
  include_once 'config/conn.php';
  include_once 'Functions/deleteFunction.php';

  $database = new Database();
  $db = $database->getconn();

  $id=$_GET['id'];

  $deleteo = new Delete();
  $delete = $deleteo->deletebyid($db,$id);

  $array=array("Responce"=>$delete);

  echo json_encode($array);
  
?>
