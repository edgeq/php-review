<?php
$content = [
  'short' => 'New Content',
  'regular' => 'This is new content which has been loaded by ajax',
  'long' => 'This content is the result of making an ajax query to a PHP page which dynamically generates text as a response',
];

echo  json_encode($content);




