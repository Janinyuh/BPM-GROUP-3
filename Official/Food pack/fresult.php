<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Food Pack</title>
    <link rel="stylesheet" type="text/css" href="Food pack.css">
</head>
<body>
    <header>
        <div class="log_out">
            <a href="../logout.php" class="logout_btn"><h5>LOG OUT</h5></a>
        </div>
        <div class="title">
            <h5>BARANGAY PANDEMIC MANAGEMENT SYSTEM</h5>
        </div>
        <div class="logobox">
            <img src="logo1.png" class="logo">
        </div>
        
    </header>
    <div class="sidebar">
        <a href="../home page/home.html"><span>Home</span></a>
        <a href="../ExitPass/exitpass.php"><span>Exit Pass</span></a>
        <a href="../Ayuda/Ayuda.php"><span>Ayuda</span></a>
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
    <table class="table1">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Date Claimed</th>
            <th>Action</th>

        </tr>
        </thead>
<tbody>
                    <?php
                        require_once '../Connection/db_conn.php';
                        $search = $_GET['search'];
                        $query = $conn->query("SELECT * FROM foodpacks WHERE userID LIKE '%$search%' OR name3 LIKE '%$search%' ORDER BY fpackID DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>  
                        <tr>
                            <td><?php echo $fetch['fpackID']?></td>
                            <td><?php echo $fetch['name3']?></td>
                            <td><?php echo $fetch['quantity']?></td>
                            <td><?php echo $fetch['date_claimed']?></td>
                            <td><center></a><a href = "edit-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button>Edit</button></a><a onclick = "confirmationDelete(this); return false;" href = "delete-foodpack.php?fpackID=<?php echo $fetch['fpackID']?>"><i></i><button> Delete</button></a></center></td>
                        </tr>
                <?php
                    }
                ?>
</body>
<script src = "../js/jquery.js"></script>   
<script type = "text/javascript">
    function confirmationDelete(anchor){
        var conf = confirm("Are you sure you want to delete this record?");
        if(conf){
            window.location = anchor.attr("href");
        }
    } 
</script>
</html>
