<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <title>Browser Mirror</title>

</head>
<body>

<div class="collection with-header">

  <h1 class="collection-header center-align">Browser Mirror</h1>
  <p class="collection-item">Remote IP: <?php echo $_SERVER['HTTP_X_FORWARDED_FOR'] ?></p>
  <p class="collection-item">User Agent: <?php echo $_SERVER['HTTP_USER_AGENT'] ?></p>

        <?php date_default_timezone_set('America/Chicago'); ?>
  <!--  <?php echo date_default_timezone_get(); ?> -->

  <p class="collection-item">Request Time <strong>UNIX</strong>: <?php echo $_SERVER['REQUEST_TIME'] ?></p>
  <p class="collection-item">Request Time <strong>Formatted</strong>: <?php echo date('F j, Y, g:i a', $_SERVER['REQUEST_TIME']) ?></p>

  <p class="collection-item">Request URL: <?php echo $_SERVER['REQUEST_URI'] ?></p>
  <p class="collection-item">Request Method: <?php echo $_SERVER['REQUEST_METHOD'] ?></p>
  <p class="collection-item">Query String: <?php echo $_SERVER['QUERY_STRING'] ?></p>
  <p class="collection-item">HTTP Accept: <?php echo $_SERVER['HTTP_ACCEPT'] ?></p>
  <p class="collection-item">HTTP Encoding: <?php echo $_SERVER['HTTP_ACCEPT_ENCODING'] ?></p>
  <p class="collection-item">HTTPS: <?php if (isset($_SERVER['HTTPS'])) {echo 'secure';} else {echo 'not secure';}  ?></p>
  <p class="collection-item">Remote Port: <?php echo $_SERVER['REMOTE_PORT'] ?></p>

</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>