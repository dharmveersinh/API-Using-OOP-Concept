<?php
class read{
  function readi($db)
  {
    $query ="Select * from mst_admin";
    $stmt = mysqli_query($db,$query);
      return $stmt;
  }
  function readone($db,$id)
  {
    $query = "SELECT * FROM mst_admin WHERE ID = $id";
    $stmt = mysqli_query($db,$query);
    return $stmt;
  }
}
?>
