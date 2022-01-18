<!DOCTYPE html>
<?php
    require_once 'validate.php';
    require 'session.php';
?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay Pandemic Management System</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
    <section id="header">
        <div class="container">
            <h1>Dashboard</h1>

        </div>
        <section id="boxes">
        <div class="boxleft">

            <button class="boxa" onclick="document.location='ayuda.php'">
                <h3>A Y U D A</h3>
            </button>
            <button class="boxb" onclick="document.location='fpack.php'">
                <h3>F O O D  <br>P A C K S</h3>
            </button>
            <button class="boxc" onclick="document.location='exitpass.php'">
                <h3>E X I T <br>P A S S</h3>
            </button>
        </div>

        <div class="boxright">
            <div class="box1">
                <h3>Announcements</h3>
            </div>
            <div class="announcement">
                <textarea style="overflow: auto;resize: none;"readonly="readonly" id="says" name="says" rows="5" cols="40">
  The Barangay Pandemic Management System, offers easy transactions of giving ayuda to the residents, easily distributing the Exit Passes,Food Packs will be given in order.
  </textarea>
            </div>
            
        </div>
    </section>

    </section>
    

    <nav id="sideNav">
        <ul>
            <li><a href="settings.php">SETTINGS</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
        </ul>
    </nav>
    <img src="images/menu.png" id="menu">

<section id="footer">
    <div class="container footer-row">
        <hr>
        <div class="footer-left-col">
            <img src="images/logo1.png" class="logo">
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