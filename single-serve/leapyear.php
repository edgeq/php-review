<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Leap Year</title>
</head>
<body>
  <h1>Leap Year</h1>
    <?php

      function is_leap_year($year)
      {
        if ($year % 4 > 0) {
          return false; //2015
        } elseif ($year % 100 > 0) {
          return true; //1984
        } elseif ($year % 400) {
          return false; //2100
        } else {
          return true; //2000
        }

      }

      if (isset($_GET["year"])) {
        $year = intval($_GET["year"]);
      } else {
        $year = date('Y');
      }

      if (is_leap_year($year)) {
        echo "<h3>Yes. {$year} is a leap year</h3>";
      } else {
        echo "<h3>No. {$year} is not a leap year</h3>";
      }

    ?>

    <form action="" method="get">
       <label for="year">Enter a year to determine if it's a leap year</label>
       <input id="year" name="year" type="text" value="<?php echo $year ?>">
       <input type="submit" value="submit">
    </form>



</body>
</html>