<?php
  require_once 'connect.php';

  if(isset($_REQUEST['del'])){
    $id=intval($_GET['del']);
    $sql="DELETE FROM clients WHERE id=:id";

  $query=$dbh->prepare($sql);

  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->execute();

  if ($query->execute()) {
    // If successful, redirect to the table page
    echo "<script>alert('deleted successfully!');</script>";
    echo "<script>window.location.href='tables.php'</script>";
  } else {
    // If failed, display an error message
    echo "<script>alert('Failed to delete record.');</script>";
  }


  }
?>