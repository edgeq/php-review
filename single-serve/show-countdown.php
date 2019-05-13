<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <?php
    date_default_timezone_set('America/Chicago');
    $show = 'Newhouse';
    $today = date("F j, Y, g:i a");
    $newhouse_dates = [
      'project_dropoff' => "2019-05-13",
      'project_install' => "2019-05-14",
      'project_jury' => "2019-05-15",
      'project_gallery' => "2019-05-16",
      'project_showcase' => "2019-05-17",
    ];

  ?>
  <title><?php echo $show; ?> Dates</title>
</head>
<body>
  <h1>Is <?php echo $show; ?> over yet?</h1>
  <h2><?php echo $today; ?></h2>

<ol>
  <?php
    foreach ($newhouse_dates as $key => $date) {
      echo "<li> {$key} : {$date} </li>";
    }
    ?>
</ol>
</body>
</html>