<?php
if(!empty($_POST['name']))
    $name=$_POST['name'];
    else
    $name="not entered";
    echo <<<END

<html>
<body>
<h1>check for string</h1>
<form method="post" action="formstring.php">
enter your name:
<input type="text" name="name">
<br>
<input type="submit" name="submit"><br>
name:$name
<br>
</form>
</body>
</html>
END;
?>