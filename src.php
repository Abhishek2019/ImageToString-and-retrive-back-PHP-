<?php
error_reporting(E_ALL ^ E_WARNING);
$img_file = 'animal.jpg';

// Read image path, convert to base64 encoding
$imgData = base64_encode(file_get_contents($img_file));

echo($imgData);

echo "<BR>";
echo "<BR>";
echo "<BR>";

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;

// Echo out a sample image
echo '<img src="'.$src.'">';

?>