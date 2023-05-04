<?php
include '../Controller/eventC.php';
$eventC = new eventC();




$error = "";



// create client


// create an instance of the controller 



if (
    isset($_POST["type"]) &&
    isset($_POST["place"]) &&
    isset($_POST["capacity"]) &&
    isset($_POST["date"])&&
    isset($_POST["description"]) 
  
) {
 
  
    if (
     
        !empty($_POST["type"]) &&
        !empty($_POST["place"])  &&
        !empty($_POST["capacity"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["description"])
    ) {
      
      
   
    

// File upload path





        $event = new event(
            null,
            $_POST['type'],
            $_POST['place'],
            $_POST['capacity'],
            $_POST['date'],
            $_POST['description']
        );
        $eventC->updateEvent($event, $_POST['id_event']);
            
       
        echo "<br>";
        echo "t3ada";
      //  C:\xampp\htdocs\5edma\back\pages\tables.php
        
        header('Location:list.php');
    } else {
        $error = "Missing information";
}
} 

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listevent.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_event'])) {
        $event = $eventC->showevent($_POST['id_event']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="type">type:
                        </label>
                    </td>
                    <td><input type="text" name="type" id="type" value="<?php echo $event['type']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="place">place:
                        </label>
                    </td>
                    <td><input type="text" name="place" id="place" value="<?php echo $event['place']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="capacity">capacity:
                        </label>
                    </td>
                    <td><input type="number" name="capacity" id="capacity" value="<?php echo $event['capacity']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">date:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date" value="<?php echo $event['date']; ?>" id="date">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description" value="<?php echo $event['description']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>