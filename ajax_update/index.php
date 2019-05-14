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
<div class="container">
    <div id="form">
        <p>Pick a category</p>
        <select id="category-select">
            <option disabled selected>Please Select</option>
            <option value="1">Furniture</option>
            <option value="2">Lighting</option>
            <option value="3">Accessories</option>
        </select>
        <select  id="subcategory-select">

        </select>
    </div>

</div>

<script>
  function updateSubcategories() {
      const cat_select = document.getElementById("category-select");
      const subcat_select = document.getElementById("subcategory-select");

      let cat_id = cat_select.options[cat_select.selectedIndex];

      let url = 'subcategories.php?category_id' + cat_id;

      const xhr = new XMLHttpRequest();

      xhr.open('GET', url, true);
      xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
              subcat_select.innerHTML = xhr.responseText;
          }
      };
      xhr.send();
  }
  let cat_select = document.getElementById("category-select");
  cat_select.addEventListener("change", updateSubcategories);
</script>
</body>
</html>