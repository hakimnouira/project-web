<?php
require_once 'connect.php';

if (isset($_POST['first_name'])){
  $id=$_POST['id'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $type=$_POST['type'];

  //echo($gender);

  

  // Prepare the update query with bound parameters
  $sql="UPDATE clients SET first_name=:first_name, last_name=:last_name, gender=:gender, phone=:phone, email=:email, type=:type WHERE id=:id";
  $query= $dbh->prepare($sql);
  $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
  $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
  $query->bindParam(':gender', $gender, PDO::PARAM_STR);
  $query->bindParam(':phone', $phone, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->bindParam(':type', $type, PDO::PARAM_INT);


  // Execute the query and check for errors
  if ($query->execute()) {
    // If successful, redirect to the table page
    echo "<script>alert('Record updated successfully!');</script>";
    echo "<script>window.location.href='tables.php'</script>";
  } else {
    // If failed, display an error message
    echo "<script>alert('Failed to update record.');</script>";
  }
}

$id=($_POST['id']);
$sql ="SELECT * FROM clients WHERE id=:id";
$query=$dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$result=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0) {
  foreach($result as $results) {
?>
  <form method="POST"  action=""  enctype="multipart/form-data">
                      <label for="id">id:</label>
                      
                      <input type="text" id="id" name="id" value="<?php echo htmlentities($results->id);?>" required><br><br>
                    
                      <label for="first_name">first_name:</label>
                      <input type="text" id="first_name" name="first_name" required><br><br>
                    
                      <label for="last_name">last_name:</label>
                      <input type="text" id="last_name" name="last_name" required><br><br>
                    
                      <label for="gender">gender:</label>
                      <input type="text" id="gender" name="gender" required><br><br>

                      <label for="phone">phone:</label>
                      <input type="text" id="phone" name="phone" required><br><br>

                      <label for="email">email:</label>
                      <input type="text" id="email" name="email" required><br><br>
                    
                      <label for="type"> type:</label> 
                      <input type="text" id="type" name="type" required><br><br>
                    
                      <input type="submit" value="sign up" name="insert">
                    </form>
                    <?php
  }
} 

 