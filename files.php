<?php
 $metaimg = array("images/1.jpg",
              "images/2.jpg",
              "images/3.jpg");
$img = $metaimg[array_rand($metaimg)];

$metadescription = array("Text description 1",
"Text description 2",
"Text description 3");
$description = $metadescription[array_rand($metadescription)];

$metatitle = array("Text title 1",
"Text title 2",
"Text title 3");
$title = $metatitle[array_rand($metatitle)];
?>
