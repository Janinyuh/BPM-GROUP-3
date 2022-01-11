<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System - Ayuda</title>
    <link rel="stylesheet" href="exitpass.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
    <section id="header">
        <div class="container">

            <img src="images/logo1.png" class="logo">

            <div class="Ayuda">
                <h1>EXIT PASS</h1>
            </div>

        </div>
    </section>

    <nav id="sideNav">
        <ul>
            <li><a href="dashboard.html">BACK</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<!-- start table ---->
    <table class="table1">      
  <tr>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Purok</th>
  </tr>
  <tbody>
                    <?php
                        require 'Connection/db_conn.php';
                        $query = $conn->query("SELECT Fname2, Mname2, Lname2, purok2 FROM `exitpass`;") or die(mysqli_error());
                        while($fetch = $query->fetch_array()){
                    ?>
                        <tr>
                            <td><?php echo $fetch['Fname2']?></td>
                            <td><?php echo $fetch['Mname2']?></td>
                            <td><?php echo $fetch['Lname2']?></td>
                            <td><?php echo $fetch['purok2']?></td>
                        </tr>
                    <?php
                        }
                    ?>  
                    </tbody>
</table>

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

    <section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <p>..</p>
        </div>
        <div class="footer-right-col">
            <p>© The Barangay Pandemic Management System</p>
        </div>
    </div>
</section>

</body>

</html>