<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Infinite Scroll</title>
    <style>
      #blog-posts {
        width: 700px;
      }
      .blog-post {
        border: 1px solid black;
        margin: 10px 10px 20px 10px;
        padding: 6px 10px;
      }
      #spinner {
        display: none;
      }
    </style>
  </head>
  <body>
    <div id="blog-posts">
<!--      <div id="blog-post-101" class="blog-post">-->
<!--        <h3>Blog Post 101</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>-->
<!--      </div>-->
<!--      <div id="blog-post-102" class="blog-post">-->
<!--        <h3>Blog Post 102</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>-->
<!--      </div>-->
<!--      <div id="blog-post-103" class="blog-post">-->
<!--        <h3>Blog Post 103</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>-->
<!--      </div>-->
    </div>

    <div id="spinner">
      <img src="ajax_scroll/spinner.gif" width="50" height="50" />
    </div>

    <div id="load-more-container">
      <button id="load-more" data-page="0">Load more</button>
    </div>

    <script>

      var container = document.getElementById('blog-posts');
      var load_more = document.getElementById('load-more');
      let request_in_progress = false;

      function showSpinner() {
        var spinner = document.getElementById("spinner");
        spinner.style.display = 'block';
      }

      function hideSpinner() {
        var spinner = document.getElementById("spinner");
        spinner.style.display = 'none';
      }

      function showLoadMore() {
        load_more.style.display = 'inline';
      }

      function hideLoadMore() {
        load_more.style.display = 'none';
      }
      
      function appendToDiv(div, new_html){
         //new_html gets parsed into temp div
         const temp = document.createElement('div');
         temp.innerHTML = new_html;
         // work with parsed DOM elements to get a commone class name
         const class_name = temp.firstElementChild.className;
          // return all elements with the same class_name
         const items = temp.getElementsByClassName(class_name);
         const len = items.length;
         for (let i=0; i < len; i++) {
              div.appendChild(items[0]);
          }
      }
      function setCurrentPage(page) {
          console.log('Incrementing page to: ' + page);
          load_more.setAttribute('data-page', page)
      }

      function scrollReaction() {
          let content_height = container.offsetHeight;
          let current_y = window.innerHeight + window.pageYOffset;
          console.log(`Content Height: ${content_height} && current_Y: ${current_y}`);
          if(current_y >= content_height) {
              loadMore();
          }
      }
      function loadMore() {
        if(request_in_progress) {return;}
        request_in_progress = true;
        showSpinner();
        hideLoadMore();

        let page = parseInt(load_more.getAttribute('data-page'));
        let next_page = page + 1;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'ajax_scroll/blog_posts.php?page=' + next_page, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function () {
          if(xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            console.log('Result: ' + result);

            hideSpinner();
            // append results to end of blog posts
          setCurrentPage(next_page);
           appendToDiv(container, result);
            showLoadMore();
    request_in_progress = false;
          }
        };
        xhr.send();
      }

      load_more.addEventListener("click", loadMore);
      window.onscroll = function() {
          scrollReaction();
      };

      // Load even the first page with Ajax
      loadMore();
    </script>

  </body>
</html>
