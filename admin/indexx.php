<?php session_start();?>
<html>
    <head>
        <title>Admin Sekolah</title>
        <link rel="stylesheet" href="style.css"></link>
    </head>
    <body>
        <div id="header">
            HALAMAN ADMIN
        </div> 
        <?php
            if(isset($_SESSION['username'])){
        ?>
        <div id="menuu">
            <?php include "menuu.php"?>
        </div>
        <div id="isii">
            <?php include "isii.php"?>
        </div>
        <?php
            }else include "login.php";
        ?>
        <div id="footer">
            Copyright 2023 by Shafira
        </div>
    </body>
</html>