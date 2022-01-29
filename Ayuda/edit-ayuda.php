<!DOCTYPE html>
<?php
require_once '../Connection/validate.php';
require '../Connection/session.php';
?>
<html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ayuda</title>
    <link rel="stylesheet" type="text/css" href="ayuda.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<header>
    <div class="log_out">
        <a href="../Logout/logout.php" class="logout_btn"><h5>LOG OUT</h5></a>
    </div>
    <div class="title">
        <h5>BARANGAY PANDEMIC MANAGEMENT SYSTEM</h5>
    </div>
    <div class="logobox">
        <img src="logo1.png" class="logo">
    </div>

</header>
<div class="sidebar">
    <a href="../home page/home.php"><span>Home</span></a>
    <a href="../ExitPass/exitpass.php"><span>Exit Pass</span></a>
    <a href="../Ayuda/Ayuda.php" id="main"><span>Ayuda</span></a>
    <a href="../Food pack/Food pack.php"><span>Food Packs</span></a>
</div>

<div class="content">
    <div class="Cheader">
        <label>Search Bar</label>
        <input type="text" name="searchbar" id="searchbar" placeholder="Input text here!">
        <button>Search</button>
    </div>
    </p>
    <?php
    require '../Connection/db_conn.php';
    $query = $conn->query("SELECT * FROM `ayuda` WHERE `ayudaID` = '$_REQUEST[ayudaID]'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    ?>
    <form method="POST">
        <div class="Add" style="display: flex">
            <label style="margin-right: 4px">User ID</label>
            <input type="text" name="userID" id="userID" value = "<?php echo $fetch['userID']?>" >
            <label style="margin-right: 4px">Amount</label>
            <input type="text" name="amount" id="Amount" value = "<?php echo $fetch['amount']?>"?>
            <label style="margin-right: 4px">Date to Claim</label>
            <div class='input-group date' id='datetimepicker1' style="width: 200px">
                <input type='text' class="form-control input-group-addon" id="date_toclaim" value = "<?php echo $fetch['date_toclaim']?>" name="date_toclaim"/>
                <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
            </div>
            <label style="margin-right: 4px">Date Claimed</label>
            <input type="Date" name="date_claimed"  value = "<?php echo $fetch['date_claimed']?>" id="date_claimed">
            <button type="submit" name="edit-ayuda" class="submit">Save</button>
        </div>

    </form>
    <?php require_once 'edit-query-ayuda.php'?>
</body>
</html>