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
            new DateTime( $_POST['date']),
            $_POST['description']
        );
        $eventC->addevent($event);
            
     
        
        header('Location:listevent.php');
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
    <a href="listevent.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="type">type:
                    </label>
                </td>
                <td><input type="text" name="type" id="type" ></td>
            </tr>
            <tr>
                <td>
                    <label for="place">place:
                    </label>
                </td>
                <td><input type="text" name="place" id="place" ></td>
            </tr>
            <tr>
                <td>
                    <label for="capacity">capacity:
                    </label>
                </td>
                <td>
                    <input type="number" name="capacity" id="capacity">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Date :
                    </label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="description">description :
                    </label>
                </td>
                <td>
                    <input type="text" name="description" id="description">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>