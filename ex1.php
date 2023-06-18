<!DOCTYPE html>
<html>
<body>

<form method="post">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }

?>

</body>
</html>