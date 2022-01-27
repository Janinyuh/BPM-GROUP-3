<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'session.php';
include "Connection/db_conn.php";
$user = "SELECT submit, quantity FROM exitpass WHERE userID={$_SESSION['userID']}";
$result = mysqli_query($conn, $user);
$submit = null;
$quantity = null;
while($data = mysqli_fetch_array($result)) {
    $submit= $data['submit'];
    $quantity= $data['quantity'];

}
$user_id = $_SESSION['userID'];
$sql4 = "SELECT userID from exitpass WHERE userID=$user_id";
$result4 = mysqli_query($conn, $sql4);

?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="exit.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
<div class="header-box">
    <span></span>
    <img src="images/logo1.png" class="logo">
</div>
<div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">
            <h2 class="card-heading">
                Exit Pass
                <small>Just click the <br>'submit' button</small>
            </h2>
        </div>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } if (!$data = mysqli_fetch_array($result4)){?>
        <form class="card-form" action="exitpass-check.php" method="POST">
            <div class="action">
                <input name= "submit" type="submit" class="action-button" value="SUBMIT">
            </div>
        </form>
        <?php }else{ ?>
            <?php if (isset($_GET['success']) && $_GET['success'] != null  ) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php }else if ($submit != 0 && $quantity != 0){ ?>
                <p>Your request has been sent successfully.</p>
            <?php }
            if ($quantity == 0){?>
                <p>Already used allowable exit pass request</p>
            <?php } ?>

            <?php  if($submit == 0 && $quantity != 0){ ?>
                <form class="card-form" action="exitpass-check.php" method="POST">
                    <div class="action">
                        <input name= "submit" type="submit" class="action-button" value="SUBMIT">
                    </div>
                </form>
            <?php } ?>
        <?php }?>
        <div class="card-info">
            <p>Please note that we are short on staffs so it may take awhile to process your request</p>
        </div>
    </div>
</div>

<div class="Ayuda">
    <h1>EXIT PASS</h1>
</div>

<nav id="sideNav">
    <ul>
        <li><a href="dashboard.php">BACK</a></li>
        <li><a href="settings.php">SETTINGS</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</nav>
<img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <p>© The Barangay Pandemic Management System</p>
        </div>
    </div>
</section>
</section>






<script>
    var menu = document.getElementById("menu");
    var sideNav = document.getElementById("sideNav");

    sideNav.style.right='-250px';
    menu.onclick = function(){
        if(sideNav.style.right=='-250px'){
            sideNav.style.right ="0";
        }
        else{
            sideNav.style.right = "-250px";
        }
    }
</script>

</body>

</html>