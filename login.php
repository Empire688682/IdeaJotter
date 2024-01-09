<?php
include_once 'header.php';
?>
    <section class="sign-up">
       <div class="container">
        <form action="includes/login.inc.php" method="post">
            <div>
                <input type="text" placeholder="Username/Email....." name="uid">
            </div>
            <div>
                <input type="password" placeholder="Password" name="pwd">
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
       </div>
       <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Fill all the required fields</p>';
                } else if ($_GET["error"] == "wronglogin") {
                    echo '<p style="text-align: center; color: white; background-color:black; padding: 10px 10px; width:100%; max-width:300px; margin:10px auto;">Wrong login details!</p>';
                }
            }
       ?>
    </section>

</body>
</html>