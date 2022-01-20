<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
   
    <div class="container">
    <!-- code here -->
    <div class="card">
        <div class="card-image">    
            <h2 class="card-heading">
                Welcome!
                <small>To the<br>Barangay Pandemic Management System</small>
            </h2>
        </div>
        <form class="card-form" action="login-check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
            <div class="input">
                <input type="text" name="userID" class="input-field" required/>
                <label class="input-label">User ID</label>
            </div>
                        <div class="input">
                <input type="password" name="password" class="input-field" required/>
                <label class="input-label">Password</label>
            </div>
            <div class="action">
                <button name="submit"class="action-button">LOGIN</button>
            </div>
        </form>
        <div class="card-info">
            <p>By signing up you are agreeing to our <a href="terms.html">Terms and Conditions</a></p>
        </div>
    </div>
</div>
<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
             <section id="header">
        <div class="container">
            <img src="logo1.png" class="logo">
        </div>
    </section>
        </div>
        <div class="footer-right-col">
            <p>© The Barangay Pandemic Management System</p>
        </div>
    </div>
</section>

</body>

</html>

