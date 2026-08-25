

<form method="post">
    <input type="text" name="username" placeholder="Enter your name">
    <button type="submit">Send</button>
</form>

<?php
if (isset($_REQUEST['username'])) {
    echo "Hello " . $_REQUEST['username'];
}
?>

