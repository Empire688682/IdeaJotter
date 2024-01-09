
<?php
session_start();
if(isset($_SESSION["useruid"])) {
}
else{
    header("location: signup.php");
}
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#" onclick="showMyNote()">My Notes</a></li> 

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

   <section class="add-header">
        <div class="container">
            <?php
                if(isset($_SESSION["useruid"])) {
                    echo "<h1> Add your great idea @".$_SESSION["useruid"] ." <i class='fa fa-heart' style='color:red;'></i></h1>";
                }
            ?>
        </div>
   </section>
   <div class="add-section">
        <div class="container">
            <div class="add-container">
                <h2 class="heading">That your awsome note</h2>
                <div>
                    <label for="title">Title</label>
                    <input type="text" id="title">
                </div>
                <div>
                    <label for="details">Details</label>
                    <textarea id="details" cols="30" rows="5"></textarea>
                </div>
                <button type="submit" class="submit-btn" onclick="startJot()">Submit</button>
            </div>
            <div class="user-ideas-container">
                <div class="user-ideas-details" id="note">
                    <h2></h2>
                    <p></p>
                    <div class="btn-container">
                        <!------
                        <button type="submit" class="submit-btn">Submit</button>
                        <button type="submit" class="delete-btn">Delete</button>------>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <footer>
        <div class="container">
                    <p class="designer"> &copy Copyrighted 2023 <a href="#">JAY-EMPIRE</a> <i class="fa fa-heart"></i> All rights reserved </p>
        </div>
   </footer>
   <!----------js section--------->
   <script src="https://unpkg.com/typed.js@2.0.16"></script>
   <script>
     const submenus = document.getElementById("submenus");
     function show(){
        submenus.classList.toggle("show");
     }

     function showMyNote(){
        userContainer.scrollIntoView({
            behavior:"smooth",
            block: 'start',
            inline: 'nearest'
        });
     };

     const Title = document.getElementById("title");
     const Details = document.getElementById("details");
     const userContainer = document.querySelector(".user-ideas-container");
     const btnContainer = document.querySelector(".btn-container");

     function addNote(){
        document.querySelector(".add-section").scrollIntoView({
            behavior: "smooth"
        })
     }

     function saveUserData(){
        localStorage.setItem("userData", userContainer.innerHTML);
     }

     function showUserData(){
        userContainer.innerHTML = localStorage.getItem("userData")
     }
     showUserData()

     function startJot(){
        if(Title.value === ""){
            Title.style.border = "red 2px solid";
            setTimeout(() =>{
                Title.style.border = " rgb(112, 106, 106) 1px solid";  
            },2000)
        }
        else if(Details.value === ""){
            Details.style.border = "red 2px solid";
            setTimeout(() =>{
                Details.style.border = " rgb(112, 106, 106) 1px solid";  
            },2000)
        }
        else{
            const zero = "0"
            let day = new Date().getDate();
            if(day <= 9){
                day = zero + day;
            }else{
                day = new Date().getDate();
            }
            const month = new Date().getMonth()+1;
            const year = new Date().getFullYear();
            const titleValue = Title.value;
            const detailsValue = Details.value;
            let userIdeasDetails = document.createElement("div");
            userIdeasDetails.classList.add("userIdeasDetails")

            let dateEl = document.createElement("h4");
            dateEl.classList.add("my-h4");
            dateEl.innerHTML = `${day} - ${month} - ${year}`;

            let userTitle = document.createElement("h2");
            userTitle.classList.add("my-h2")
            userTitle.innerHTML = titleValue;

            let userDetails = document.createElement("p");
            userDetails.classList.add("my-p")
            userDetails.innerHTML = detailsValue;

            let editButton = document.createElement("button");
            editButton.classList.add("submit-btn");
            editButton.innerHTML = "Edit";

            let deleteButton = document.createElement("button");
            deleteButton.classList.add("delete-btn");
            deleteButton.innerHTML = "Delete";

            let buttonContainer = document.createElement("div");
            buttonContainer.appendChild(editButton);
            buttonContainer.appendChild(deleteButton);
            userIdeasDetails.appendChild(dateEl);
            userIdeasDetails.appendChild(userTitle);
            userIdeasDetails.appendChild(userDetails);
            userIdeasDetails.appendChild(buttonContainer);
            userContainer.appendChild(userIdeasDetails)
            Title.value = "";
            Details.value = "";
            saveUserData();
        }
     }

        userContainer.addEventListener("click", (e) => {
        e.preventDefault();
        const deleteButton = e.target.closest(".delete-btn");
        const editButton = e.target.closest(".submit-btn");

        if (deleteButton) {
            let parentContainer = deleteButton.parentElement.parentElement;
            parentContainer.remove();
            saveUserData();
        } else if (editButton) {
            Title.value = editButton.parentElement.previousElementSibling.previousElementSibling.innerHTML;
            Details.value = editButton.parentElement.previousElementSibling.innerHTML;
            let parentContainer = editButton.parentElement.parentElement;
            document.querySelector(".add-header").scrollIntoView({behavior:"smooth"})
            parentContainer.remove();
            saveUserData();
        }
});

   </script>
</body>
</html>