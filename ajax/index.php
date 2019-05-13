<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Ajax+PHP</title>
</head>
<body>

<h1>Welcome to AJAX and PHP</h1>

<h2>REQUEST OBJECT</h2>
<ul>
  <li><code>var xhr = new XMLHttpRequest();</code></li>
  <li><code>xhr.open("GET", "script.php", true);</code></li>
  <ul>
    <li>.open = dial the following request...</li>
    <li>"GET" = request method</li>
    <li>"script.php" = url for sending the request</li>
    <li>true = is it async?</li>
  </ul>
</ul>


<h2>REQUEST METHODS</h2>
<ul>
  <li>GET - retrieve data</li>
  <li>POST - submit forms / sending/changing data</li>
</ul>

<h2>REQUEST HEADERS - [$_POST]</h2>
<ul>
  <li><code>setRequestHeader(header, value);</code></li>
  <li>example: <code>xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");</code></li>
</ul>

<h2>REQUEST WORKFLOW</h2>
<ul>
  <li><code>var xhr = new XMLHttpRequest();</code></li>
  <li><code>xhr.open("POST", "form_process", true);</code></li>
  <li><code>xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");</code></li>
  <li><code>xhr.send("first_name=Bob&last_name=Smith");</code></li>
</ul>
</body>
</html>