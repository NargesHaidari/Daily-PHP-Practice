<?php

if (isset($_FILES['myfile'])) {
    echo "File name: " . $_FILES['myfile']['name'] . "<br>";
    echo "File type: " . $_FILES['myfile']['type'] . "<br>";
    echo "File size: " . $_FILES['myfile']['size'] . " bytes<br>";
}

?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <button type="submit">Upload</button>
</form>


