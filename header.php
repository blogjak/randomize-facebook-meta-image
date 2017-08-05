<?php

// Randomize images
 $metaimg = array("images/1.jpg",
              "images/2.jpg",
              "images/3.jpg");
$img = $metaimg[array_rand($metaimg)];

// Randomize description texts
$metadescription = array("Text description 1",
"Text description 2",
"Text description 3");
$description = $metadescription[array_rand($metadescription)];

// Randomize title text
$metatitle = array("Text title 1",
"Text title 2",
"Text title 3");
$title = $metatitle[array_rand($metatitle)];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta property="og:description" content="<?php echo $description; ?>" />
   <meta property="og:title" content="<?php echo $title; ?>"/>
    <meta property="og:image" content="<?php echo $img; ?>"/>
 </head>
 <body>
 </body>
 </html>
    
   
     
