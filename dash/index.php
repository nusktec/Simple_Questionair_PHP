<?php
if (isset($_POST['token']) && $_POST['token'] == '12345678') {
    session_start();
    $_SESSION['token'] = true;
    header("location: dash.php");
} else if (isset($_POST['token'])) {
    echo "Invalid Admin.Token";
}
?>
<html>
<form action="" method="post">
    <input value="" name="token" placeholder="Admin.Token">
    <br/>
    <input type="submit" value="Login"/>
</form>
</html>