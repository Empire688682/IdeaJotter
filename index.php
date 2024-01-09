<?php
include_once 'header.php'
?>

    <section class="ideasJotter">
        <div class="container">
            <?php
                if(isset($_SESSION["useruid"])) {
                    echo " <h2 style='text-transform: capitalize;'> Welcome back ".$_SESSION["useruid"] ." <i class='fa fa-heart' style='color:red; margin-left:10px;'></i> </h2>";
                };
            ?>
                <div class="ideasJotter-homepage">
                    <h1>Welcome to ideasjoter</h1>
                    <h2>Preserve Your Innovative Concepts for Future Exploration</h2>
                    <p>Jot down ideas you think is great</p>
            <?php
                if(isset($_SESSION["useruid"])) {
                    echo " <a class='btn' href='add.php'>Add Your Note</a>";
                }
                else{
                    echo " <a class='btn' href='signup.php'>Add Your Note</a>";
                }
            ?>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img src="image/notejot gif.gif">
                    </div>
                    <div class="col-2">
                        <h1>Ideas Rule the World you know</h1>
                    </div>
                </div>
        </div>
    </section>
    <?php
    include_once 'footer.php'
    ?>
</body>
</html>