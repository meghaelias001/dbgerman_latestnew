<?php
require_once 'dbconfig.php';
if (isset($_SESSION['user_details'])) {
    header('location: set-data.php');
}
$message='';
if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password = md5($_POST['password']);
    $db->where('username', $username);
    $db->where('password', $password);
    $results = $db->get('user');
    if($db->count > 0 ) {
        foreach ($results as $result) {
            $_SESSION['user_details']= $result;
        }
        header('Location: set-data.php');
    }
    else {
        $message = "Invalid username or password..!";
    }
}
?>
<html>
<head>
    <title>
        Administrator
    </title>
    <link rel="stylesheet" href="admin_styles.css">
</head>
<body>
<div class="center">
    <div class="content">
        <form name="login" action="index.php" method="post">
            <h3>Admin Login</h3>
            <div class="form-row">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-row">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-row">
                <input type="reset" value="Reset"><input type="submit" name="login" value="Login">
            </div>
            <p> <?php echo $message; ?></p>
        </form>
    </div>

</div>
</body>
</html>
