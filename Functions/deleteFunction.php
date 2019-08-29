<?php
  class Delete
  {
    public function deletebyid($db,$id)
    {
      $query="delete from mst_admin where ID = $id";
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
