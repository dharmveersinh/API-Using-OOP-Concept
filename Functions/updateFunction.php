<?php
  class Update{
    public function update2($db,$id,$num)
    {
      $query="UPDATE mst_admin SET MobileNo = $num WHERE ID = $id;";
      $stmt=mysqli_query($db,$query);
      if($stmt)
      {
        return "Sucess";
      }
      else
      {
        return "Failed";
      }
    }
  }
?>
