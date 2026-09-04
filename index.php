

<!DOCTYPE html>
<html>
<body>

<h2>PHP File Handling</h2>

<?php

$file = "data.txt";

file_put_contents($file, "Hello PHP!");

echo file_get_contents($file);

echo "<br>";

file_put_contents($file, "\nI am learning PHP.", FILE_APPEND);

echo file_get_contents($file);

?>

</body>
</html>