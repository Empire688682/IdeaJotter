<?php
include_once 'header.php'
?>
<section class="sign-up">
    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <div>
                <input type="text" placeholder="Full Name" name="name">
            </div>
            <div>
                <input type="text" placeholder="Username" name="username">
            </div>
            <div>
                <input type="email" placeholder="Your Email" name="email">
            </div>
            <div>
                <input type="password" placeholder="Password" name="pwd">
            </div>
            <div>
                <input type="password" placeholder="Repeat Password" name="pwdRepeat">
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Fill all the required fields</p>';
            } 
            else if ($_GET["error"] == "invaliduid") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Invalid username!</p>';
            } 
            else if ($_GET["error"] == "invalidemail") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Invalid email!</p>';
            } 
            else if ($_GET["error"] == "password!match") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Password did not match!</p>';
            }
            else if ($_GET["error"] == "passwordtooshort") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Password must be above 6 character!</p>';
            }
             else if ($_GET["error"] == "usernametaken") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Username taken!</p>';
            } 
            else if ($_GET["error"] == "none") {
                echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Sign up successfully<i class="fas fa-thumbs-up" style="color:white; margin-left:10px;"></i></p>';
                header("location: login.php");
            }
        }
   ?>

</section>

<?php
include_once("footer.php")
?>