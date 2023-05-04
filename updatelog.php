<?php
require_once 'connect.php';

print_r($_POST);

if (isset($_POST['id_log'])){
  $lastlog=$_POST['lastlog'];
  $id_log=$_POST['id_log'];
  $duration=$_POST['duration'];
  $id=$_POST['id'];

  
  //echo($gender);

  

  // Prepare the update query with bound parameters
  $sql="UPDATE logs SET id_log=:id_log, lastlog=:lastlog, duration=:duration, id=:id  WHERE id_log=:id_log";
  $query= $dbh->prepare($sql);
  $query->bindParam(':id_log', $id_log, PDO::PARAM_STR);
  $query->bindParam(':lastlog', $lastlog, PDO::PARAM_STR);
  $query->bindParam(':duration', $duration, PDO::PARAM_STR);
  $query->bindParam(':id', $id, PDO::PARAM_STR);
  


  // Execute the query and check for errors
  if ($query->execute()) {
    // If successful, redirect to the table page
    if(isset($i)){

echo "<script>alert('Record updated successfully!');</script>";
   echo "<script>window.location.href='affichlog.php'</script>";

    }
   //echo "<script>alert('Record updated successfully!');</script>";
  // echo "<script>window.location.href='affichlog.php'</script>";
  } else {
    // If failed, display an error message
    echo "<script>alert('Failed to update record.');</script>";
  }
} 

$id=($_POST['id_log']);
$sql ="SELECT * FROM logs WHERE id_log=:id_log";
$query=$dbh->prepare($sql);
$query->bindParam(':id_log', $id_log, PDO::PARAM_INT);
$query->execute();
$result=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0) {
    $i=0;
  foreach($result as $results) {
?>
  <form method="POST"  action=""  enctype="multipart/form-data">
                      <label for="id_log">id_log:</label>
                      
                      <input type="text" id="id_log" name="id_log" value="<?php echo htmlentities($results->id_log);?>" required><br><br>
                    
                      <label for="lastlog">lastlog:</label>
                      <input type="text" id="lastlog" name="lastlog" required><br><br>
                    
                      <label for="duration">duration:</label>
                      <input type="text" id="duration" name="duration" required><br><br>
                    
                      <label for="id2">id:</label>
                      <input type="text" id="id" name="id" required><br><br>

                      
                    
                      <input type="submit" value="sign up" name="insert">
                    </form>
                    <?php
  }
} 

 