<?php
  require_once 'config.php';

  if(isset($_REQUEST['del'])){
    $id=intval($_GET['del']);
    $sql="DELETE FROM reservation WHERE id_reservation=:id_reservation";

  $query=$dbh->prepare($sql);

  $query->bindParam(':id_reservation',$id,PDO::PARAM_STR);
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
