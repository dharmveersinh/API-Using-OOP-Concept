<?php
  class Database
  {
    public function getconn()
    {
      $conn = mysqli_connect("localhost","root","","demo");
      if($conn)
      {
          return $conn;
      }
      else
      {
          echo "Connection Error";
      }
    }
  }
?>
