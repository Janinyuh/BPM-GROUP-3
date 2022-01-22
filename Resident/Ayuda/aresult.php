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
        <form action="aresult.php" method="get">
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
            <th>Amount</th>
            <th>Date Claimed</th>
            <th>Action</th>

        </tr>
        </thead>
<tbody>
                    <?php
                        require_once '../Connection/db_conn.php';
                        require '../Connection/session.php';
                        $search = $_GET['search'];
                        $query = $conn->query("SELECT * FROM ayuda WHERE userID LIKE '%$search%' AND barangay =('$barangay') OR name2 LIKE '%$search%' AND barangay =('$barangay') ORDER BY ayudaID DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>  
                        <tr>
                            <td><?php echo $fetch['ayudaID']?></td>
                            <td><?php echo $fetch['name2']?></td>
                            <td><?php echo $fetch['amount']?></td>
                            <td><?php echo $fetch['date_claimed']?></td>
                            <td><center></a><a href = "edit-ayuda.php?ayudaID=<?php echo $fetch['ayudaID']?>"><i></i><button>Edit</button></a><a onclick = "confirmationDelete(this); return false;" href = "delete-ayuda.php?ayudaID=<?php echo $fetch['ayudaID']?>"><i></i><button> Delete</button></a></center></td>
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
