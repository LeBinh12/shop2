<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/dog.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sun.css">
    <script src="https://kit.fontawesome.com/5fa66840aa.js"></script>

    <title>Document</title>
</head>
<body>  

<header>

            
            <div class="stick-bottom">
                <ul>
                    <li><a id="home" href="index.php">
                        <img src="https://matpetfamily.com/wp-content/uploads/2022/01/home-icon-1.png" width="72" height="72" scale="0">
                    </a></li>
                    <li><a id="zalo" href="#">
                        <img src="https://matpetfamily.com/wp-content/uploads/2022/01/zalo-icon-1.png" width="72" height="72">
                    </a></li>
                    <li>
                        <a id="fb" href="https://www.facebook.com/profile.php?id=100080241985839">
                            <img src="https://matpetfamily.com/wp-content/uploads/2022/01/mess-icon-1.png" width="72" height="72">
                        </a>
                    </li>
                    <li>
                        <a id="phone" href="tel://0328075014">
                            <img src="https://matpetfamily.com/wp-content/uploads/2022/01/call-icon-1.png" width="72" height="72">
                        </a>
                    </li>
                </ul>
            </div>

        </header>
        <?php 
        require 'conn.php';
        ?>
   
   <div class="container">
   <div class="search">
        <?php
            require 'page/head.php'
        ?>
    </div>

    
    
    <div class="dog">
        <?php
        require 'page/dog.php'
        ?>
    </div>

    <div class="inmain">
        <?PHP
        require "main/main.php"
            ?>
    </div>
    
</div>

</body>
</html>