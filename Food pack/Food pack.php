<!DOCTYPE html>
<?php
require_once '../Connection/validate.php';
require '../Connection/session.php';
?>
<html>
<html>
<head>
    <meta charset="utf-8">
    <title>Food Pack</title>
    <link rel="stylesheet" type="text/css" href="Food pack.css">
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
    <a href="../Ayuda/ayuda.php"><span>Ayuda</span></a>
    <a href="../Food pack/Food pack.php" id="main"><span>Food Packs</span></a>
</div>

<div class="content">
    <form action="fresult.php" method="get">
        <div class="Cheader">
            <label>Search Bar</label>
            <input type="text" name="search" id="searchbar" placeholder="Input text here!">
            <button type="submit" >Search</button>
        </div>
    </form>
    <form action="addfpack-check.php" method="POST">
        <div class="Add" style="display: flex">
            <label style="margin-right: 4px">User ID</label>
            <input type="text" name="userID" id="userID" placeholder="User ID" >
            <label style="margin-right: 4px">Quantity</label>
            <input type="text" name="quantity" id="quantity" placeholder="Quantity">
            <label style="margin-right: 4px">Date to Claim</label>
            <div class='input-group date' id='datetimepicker1' style="width: 200px">
                <input type='text' class="form-control input-group-addon" id="date_toclaim" name="date_toclaim"/>
                <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
            </div>
            <label style="margin-right: 4px">Date Claimed</label>
            <input type="Date" name="date_claimed" id="date_claimed">
            <button type="submit" name="add-foodpack" class="submit">Add</button>
        </div>

    </form>
    <table class="table1">
        <tr>
            <th>#</th>
            <th>Names</th>
            <th>Quantity</th>
            <th>Date to Claim</th>
            <th>Date Claimed</th>
            <th>Action</th>
        </tr>
        <tbody>
        <?php
        require '../Connection/db_conn.php';
        $query = $conn->query("SELECT *  FROM `foodpacks` WHERE barangay = ('$barangay');") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
            ?>
            <tr>
                <td><?php echo $fetch['fpackID']?></td>
                <td><?php echo $fetch['name3']?></td>
                <td><?php echo $fetch['quantity']?></td>
                <td><?php echo $fetch['date_toclaim']?></td>
                <td><?php echo $fetch['date_claimed']?></td>
                <td><center></a><a href = "edit-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button>Edit</button></a><a onclick = "confirmationDelete(this); return false;" href = "delete-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button> Delete</button></a></center></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
<script src = "../js/jquery.js"></script>
<script type = "text/javascript">
    function confirmationDelete(anchor){
        var conf = confirm("Are you sure you want to delete this record?");
        if(conf){
            window.location = anchor.attr("href");
        }
    }
    $(function() {
        $('#datetimepicker1').datetimepicker();
    });
</script>
</html>