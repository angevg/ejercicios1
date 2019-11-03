<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <m
    eta charset="utf-8">
    <title>script1</title>
    <style media="screen">

    </style>

  </head>
  <body>
<?php

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
echo "http://" . $host . $url;
?>

    <header>
    </header>

  </body>
</html>