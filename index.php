<?php
 /**
  * Reference: https://thecodedeveloper.com/calculate-the-number-of-days-between-two-dates-in-php/
  */

  require "func.php"
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./style.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  
  <title>wololo</title>


</head>

<header>
  <h1>Calculate Your Days</h1>
</header>
<body>

  <br>

  <h3>Today is <? echo $datumJetzt ?></h3>

  <br>

  <form name="GeburtWann" method="POST">
  <div class="rainbow"><p>When are you born? </p></div>
  <input type="date" name="geburt" value="<?php echo date("d.m.Y"); ?>"/> 
  <input name="submit" type="submit" value="Calculate My Days!" class="button" />  
  </form>


  <br>

  <?php
  //check if the user did not set their birthdate
    if (isset($_POST['submit']) && $datumGeburt = date("d.m.Y", strtotime("01.01.1970"))) {
      echo "<p>Please enter your birthday!";
  //show the result
    } elseif (isset($_POST['submit'])) {
      $datumGeburt = date("d.m.Y", strtotime($_POST['geburt']));
    
      $datumUnterschied = rechnenDays($datumJetzt, $datumGeburt);

      echo "<p>Your birthdate is " . $datumGeburt;
      echo "<br>";
      echo "<p>You are: <b>" . $datumUnterschied . "</b> Days old ";
  //show nothing
    } else {
      
    }
  ?>


</body>

</html>