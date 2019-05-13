<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">

  <title>Ajax+PHP</title>
</head>
<body>
<div id="main">
  This is the original text when the page first loads
</div>

<button id="ajax-button" type="button">Update content with Ajax</button>

<script>
  function replaceText(e) {
      e.preventDefault();

      const xhr = new XMLHttpRequest();
      xhr.open("GET", 'ajax_json/new_content.php', true);
      xhr.onreadystatechange = function() {
          console.log(`readyState: ${xhr.readyState}`);
          if (xhr.readyState == 2) {
              console.log('Request sent, received by server');
          }
          if (xhr.readyState == 4 && xhr.status == 200) {
              const json = JSON.parse(xhr.responseText);
              const target = document.getElementById('main');
              console.log(json);
              target.innerHTML = json.long;
          }

      };
      xhr.send();

  }

  const button = document.getElementById('ajax-button');
  button.addEventListener("click", replaceText)
</script>
</body>
</html>