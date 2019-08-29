<?php
  header("Content-Type: application/json; charset=UTF-8");
  include_once 'config/conn.php';
  include_once 'Functions/readFunction.php';


  // instantiate database and product object
  $database = new Database();
  $db = $database->getconn();
  $ro = new read();

  $stmt =$ro->readi($db);

  $num=mysqli_num_rows($stmt);

  if($num>0){

      $data_arr=array();

      while ($row = mysqli_fetch_assoc($stmt))
      {
          $product_item=array(
              "id" => $row['ID'],
              "username" => $row['UserName'],
              "name" => $row['Name'],
              "email" => $row['Email'],
              "mobile" => $row['MobileNo']
              );

          array_push($data_arr, $product_item);
      }
      $array = array("Result"=>"Sucess","data"=>$data_arr);
      echo json_encode($array,JSON_PRETTY_PRINT);
  }

  else{
      echo json_encode(
          array("message" => "No products found.")
      );
  }

?>
