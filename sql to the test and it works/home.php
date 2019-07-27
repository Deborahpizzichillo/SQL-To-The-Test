<?php
require_once('header.php');

if(isset($_SESSION['login_user']))
{
    echo 'Welcome: ' . $_SESSION['login_user']['username'];
}
else
{
    echo 'You are not logged in!';
}
?>
<html>
<body>
<?php echo $_SESSION['username']; ?>,
<br><br><br><br>
<a href="logout.php">logout</a>
</body>
</html> 