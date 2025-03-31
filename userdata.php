<?php
$filename = "userdata.txt";

if (file_exists($filename)) {
    $data = file_get_contents($filename);
    echo nl2br($data); // "\n" को HTML ब्रेक में बदलता है
} else {
    echo "No data found!";
}
?>
