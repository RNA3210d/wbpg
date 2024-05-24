<?php
   header('Content-Type: text/xml');
   print file_get_contents('https://www.nasa.gov/feed/');
?>
