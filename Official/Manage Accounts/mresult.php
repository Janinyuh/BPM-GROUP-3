<!DOCTYPE html>
<?php
    require_once '../validate.php';
    require '../session.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Accounts</title>
    <link rel="stylesheet" type="text/css" href="Maccounts.css">
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
        <a href="../home page/home.php"><span>Home</span></a>
        <a href="../Add account/add account.php"><span>Add account</span></a>
        <a href="../Manage Accounts/Maccounts.php" id="main"><span>Manage Accounts</span></a>
    </div>
    <div class="content">
        <form action="mresult.php" method="get">
        <div class="Cheader">
            <label>Search Bar</label>
            <input type="text" name="search" id="searchbar" placeholder="Input text here!">
            <button type="submit" >Search</button>
        </div>
        </form>
    <table class="table1">
        <thead>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Purok</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
        </thead>
<tbody>
                    <?php
                        require_once '../Connection/db_conn.php';
                        $search = $_GET['search'];
                        $query = $conn->query("SELECT * FROM users WHERE userID LIKE '%$search%' OR Fname LIKE '%$search%' OR Mname LIKE '%$search%' OR Lname LIKE '%$search%' AND role != admin ORDER BY userID DESC") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>  
                        <tr>
                            <td><?php echo $fetch['userID']?></td>
                            <td><?php echo $fetch['Fname']?></td>
                            <td><?php echo $fetch['Mname']?></td>
                            <td><?php echo $fetch['Lname']?></td>
                            <td><?php echo $fetch['age']?></td>
                            <td><?php echo $fetch['sex']?></td>
                            <td><?php echo $fetch['purok']?></td>
                            <td><?php echo $fetch['phonenum']?></td>
                            <td><center></a><a href = "edit-user.php?userID=<?php echo $fetch['userID']?>"><i></i><button>Edit</button></a><a onclick = "confirmationDelete(this); return false;" href = "delete-user.php?userID=<?php echo $fetch['userID']?>"><i></i><button> Delete</button></a></center></td>
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
