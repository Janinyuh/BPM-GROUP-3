<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="add account.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
   
    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Create Account
                <small><br>Please input the <br>needed details in the <br>fields</small>
            </h2>
        </div>
        <form class="card-form" action="add account-check.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

            <div class="input">
                <input type="text" name="userID" class="input-field" required/>
                <label class="input-label">User ID</label>
            </div>
            <div class="input">
                <input type="text" name="Fname" class="input-field" required/>
                <label class="input-label">First Name</label>
            </div>
            <div class="input">
                <input type="text" name="Mname" class="input-field" required/>
                <label class="input-label">Middle Name</label>
            </div>
            <div class="input">
                <input type="text" name="Lname" class="input-field" required/>
                <label class="input-label">Last Name</label>
            </div>
            <div class="placeholder"><br>
                <label class="option-label">Purok</label><br><br>
            <select class = "form-control" required = required name ="purok">
                                <option value = "">Choose purok</option>
                                <option value = "Purok-1">Purok-1</option>
                                <option value = "Purok-1A">Purok-1A</option>
                                <option value = "Purok-2B">Purok-2B</option>
                                <option value = "Purok-3A">Purok-3A</option>
                                <option value = "Purok-4">Purok-4</option>
                                <option value = "Purok-5">Purok-5</option>
            </select><br><br>
            <div class="input">
                <input type="text" name="phonenum" class="input-field" required/>
                <label class="input-label">Phone Number</label>
            </div>
            <div class="input">
                <input type="text" name="age" class="input-field" required/>
                <label class="input-label">Age</label>
            </div>
            <div class="placeholder"><br>
                <label class="option-label">Sex</label><br><br>
            <select class = "form-control" required = required name ="sex">
                                <option value = "">Choose sex</option>
                                <option value = "Male">Male</option>
                                <option value = "Female">Female</option>
            </select><br><br>
            <div class="input">
                <input type="password" name="password" class="input-field" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="input">
                <input type="password" name="repassword" class="input-field" required/>
                <label class="input-label">Re-Password</label>
            </div>
            <div class="action">
                <button name="submit" class="action-button">REGISTER</button>
            </div>
        </form>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="terms.html">Terms and Conditions</a></p>
        </div>
    </div>
</div>

    <nav id="sideNav">
        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
             <section id="header">
        <div class="container">
            <img src="images/logo1.png" class="logo">
        </div>
    </section>
        </div>
        <div class="footer-right-col">
            <p>© The Barangay Pandemic Management System</p>
        </div>
    </div>
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