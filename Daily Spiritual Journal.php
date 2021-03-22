<?php
//Click the submit button

if(isset($_POST['submit'])) {

//Connect to the database 
$con = mysqli_connect("shareddb-v.hosting.stackcp.net", "wordpress-31343728b7", "Yolo*1234", "wordpress-31343728b7");

//Display error if there is no connection
     if(mysqli_connect_error()) {
         
         echo "There was an error connecting to the database.";     
    }

//Creating variable 
        $entry = $_POST['floatingTextarea'];
        $ounces = $_POST['Water'];
        $exercise = $_POST['Exercise'];
        $mediation = $_POST['Meditation'];
        $pray = $_POST['Pray'];
        $quote = $_POST['daily-quote'];
        $author = $_POST['author'];
        $timestamp = date('Y-m-d');
        //$date = $_POST['dayofweek'];

//Execute the query
        $sql = "INSERT INTO Journal (Daily, Water, Exercise, Meditation, Pray, Quote, Author, Today) VALUES ('$entry','$ounces', '$exercise', '$mediation','$pray', '$quote', '$author', '$timestamp')";

//Check if data was entered into the table  
         if ($con->query($sql) === TRUE) {
             echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
  }
}

   /* if mysqli_query($con,$sql) {
             echo  "Data has not saved";
         } else {
             echo "Data is saved sucessfully";
       }
    }  */
   //header("location: index.php"); exit;

    //mysqli_close($con); // Close connection
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous">

    <link href="Daily Spiritual Journal.css" rel="stylesheet">
    <link href="calendar.html">
    <link href="Daily Spiritual Journal.php">
    <script src="https://kit.fontawesome.com/ec6f837621.js"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Spiritual Journal</title>
</head>
<body>
<form method="POST" action="">
    <!-- Made a container the hold everything except date and quote -->
    <div class="container">
        <!--Made divs for quote and date-->
        <div id="dayofweek" class="date"></div>
        <br><br>
        <div id="daily-quote" class="quote"></div>
        <div id="author" class="author-quote"></div>
        <br><br>
        <h2>Daily Journal</h2>
        <br>
        <div> 
        <label for="floatingTextarea"><strong>Prayers, Thoughts, or Lessons Learned</strong></label>
         <textarea wrap="hard" rows="10" class="form-control" name="floatingTextarea" id="floatingTextarea"></textarea>
            
</div> 

        <br><br>

<!--Create a table with rows to align label, images, and inputs-->
      
<table class="container">

<tr>
       
   <td><label for="Exercise"><strong>Did you exercise today? (Y/N)</strong></label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</td>
    <td><label for="Meditation"><strong>Did you meditate today? (Y/N)</strong></label>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</td>
    <td><label for="Pray"><strong>Did you pray today? (Y/N)</strong></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
    <td><label for="Water"><strong>How many ounces of water did you drink today?</strong></td>

</tr>
<tr>

   <td><i class="fas fa-running fa-7x"data-bs-toggle="tooltip" data-bs-placement="left" title="Type the Y or N in the text box below">
  </i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
   </td>

  <td><i class="fas fa-peace fa-7x"data-bs-toggle="tooltip" data-bs-placement="left" title="Type the Y or N in the text box below"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
  
  <td><i class="fas fa-pray fa-7x"data-bs-toggle="tooltip" data-bs-placement="left" title="Type the Y or N in the text box below"></i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
  
  <td><i class="fas fa-glass-whiskey fa-7x"data-bs-toggle="tooltip" data-bs-placement="left" title="Type the Y or N in the text box below"></i></td>

</tr>
   
<tr>
   <td> <input type="text" id="Exercise" name="Exercise" size="2" maxlength="2">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
    
    <td><input type="text" name="Meditation" size="2" maxlength="2">
    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</td>
    
    <td><input type="text" name="Pray"size="2" maxlength="2" ></td>
    
    <td><input type="number" min="0"  max="150"name="Water"><td><!--Come back to this piece to only allow user to type in 3 characters-->

</tr>


    
</table>

    <br><br>

    

    <button type="submit" name="submit" value="Submit" id="save-button"><strong>Save</strong></button>
    </form>
    <br><br>

    <?php   
 /*if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $con->error;
}
?>*/

    <!--<button onclick="document.location='calendar.html'"><strong>Go To
            Calendar</strong></button>-->
     </div>
    <!--This is the javascript file-->
    <script src="Daily Spiritual Journal.js" type="module"></script>

</body>

</html>