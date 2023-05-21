<?php
$page_title = "User Authentication - Homepage";
include_once 'partials/headers.php';
?>
<head>
    
<div class="container">

    <div class="flag">
        <h1>User Authentication System</h1>
        <p class="lead">Learn to Code A login and registration System with PHP.<br> Enhance you PHP skills and make more cash.</p>

        <?php if (!isset($_SESSION['username'])): ?>
            <p class="lead">You are currently not signedin <a href="login.php">Login</a> Not yet a member? <a href="signup.php">signup</a> </p>
        <?php else: ?>
            <p class="lead">You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a> </p>
        <?php endif ?>

        <?php //echo $_SERVER['REMOTE_ADDR'] . "<br>" . $_SERVER['HTTP_USER_AGENT'];
        //echo "<br>".time();
        //if(isset($_SESSION['last_active'])){
           //echo "<br>".$_SESSION['last_active'];
          //};
          
        ?>
    </div>

</div>

<?php include_once 'partials/footers.php' ?>
</body>
</html>
