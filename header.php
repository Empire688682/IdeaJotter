 <?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is IdeaJotter App developed by JayEmpire">
    <meta name="author" content="JayEmpire">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/LogoMakr-0cwNzS.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>IdeaJotter</title>
</head>
<body>
    <div class="navbar-container">
        <div class="navbar">
            <div class="logo logo-container">
                <a href="index.php">
                    <img src="image/notejot logo.png">
                </a>
                <?php
                    if(isset($_SESSION["useruid"])) {
                        echo "<li> ".$_SESSION["useruid"] ."  </li>";
                    }
                ?>
            </div>

            <nav>
                <ul id="menuBox">
                    <div>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </div>

                    <div class="log-in-register">
                        <?php
                        if(isset($_SESSION["useruid"])) {
                            echo '  <li><a href="includes/logout.inc.php">Log out</a></li>';
                        }
                        else{
                            echo '<li><a href="signup.php">Sign Up</a></li>';
                            echo '<li><a href="login.php">Log In</a></li>';
                        }
                        ?>
                    </div>
                </ul>
            </nav>
           
            <div class="menu menu-close">
                <img id="menuIcon" src="image/menu-bar-black.png">
            </div>
            
        </div>
        <script>
            const menuBox = document.getElementById("menuBox");
            const menuIcon = document.getElementById("menuIcon");

            menuIcon.onclick = function(){
                menuBox.classList.toggle("show-mobile-menu");
                if(menuBox.classList.contains("show-mobile-menu")){
                    menuIcon.src = "image/menu-close-black.png"
                }
                else{
                    menuIcon.src = "image/menu-bar-black.png"
                }
            }
        </script>
    </div>
