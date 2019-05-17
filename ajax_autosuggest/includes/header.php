<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajax Autosuggest</title>
    <link rel="stylesheet" media="all" href="ajax_autosuggest/assets/public.css" />
    <script src="ajax_autosuggest/assets/public.js"></script>
  </head>
  <body>

    <div id="main">

      <div id="header">

        <div id="navigation">
          <a href="/ajax_autosuggest">Main page</a>
        </div>

        <div id="search-area">

          <form id="search-form" action="search.php" method="GET">
            <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
            <input id="search" type="text" name="q" value="<?php echo htmlspecialchars($q); ?>" />
            <input type="submit" value="Search" />
          </form>

          <ul id="suggestions">
          </ul>

        </div>

      </div>
