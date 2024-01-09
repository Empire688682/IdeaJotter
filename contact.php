<?php
include_once 'header.php'
?>
    <section class="contact">
        <div class="container">
            <h1>Contact Me </h1>
            <div class="row">
                <div class="col-2">
                   <form action="">
                   <div class="label-container-two">
                        <div class="two-row">
                            <label for="fname">First name</label>
                            <input type="text" required id="fname">
                        </div>
                        <div class="two-row">
                            <label for="lname">Last name</label>
                            <input type="text" required id="lname">
                        </div>
                   </div>
                    <div class="label-container">
                        <label for="email">Email</label>
                        <input type="email" required id="email">
                    </div>
                    <div class="label-container">
                        <label for="continent">Your continent</label>
                        <select name="Continent" id="continent" required>
                            <option>Africa</option>
                            <option>Antarctica</option>
                            <option>Asia</option>
                            <option>Australia</option>
                            <option>Europe</option>
                            <option>North America</option>
                            <option>South America</option>
                        </select>
                    </div>
                    <div class="label-container">
                        <label for="message">Your Message</label>
                       <textarea id="message" cols="30" rows="2"></textarea>
                    </div>
                    <input type="submit" value="Submit" class="btn">
                   </form>
                </div>
                <div class="col-2">
                   <div class="contact-info">
                    <h3>Contact Info</h3>
                    <p><i class="fa fa-location-dot"></i> 13 Koshebinu Street. Ikorodu, Lagos Nigeria</p>
                    <a href="tel:+2349154358139"><i class="fa fa-phone"></i> +234-915-435-8139</a><br><br>
                    <a href="tel:+2349123088199"><i class="fa fa-phone"></i> +234-912-308-8199</a><br><br>
                    <a href="mailto:asehindej@gmail.com"> <i class="fa fa-envelope"></i> asehindej@gmail.com</a>
                   </div>
                   <div class="social-icon">
                    <h2>Our social links</h2>
                      <div class="icon-container">
                       <a href="https://web.facebook.com/juwon.asehinde.7"><i class="fa-brands fa-facebook"></i></a>
                       <a href="https://www.instagram.com/jahwonempire/"><i class="fa-brands fa-instagram"></i></a>
                       <a href="https://twitter.com/AsehindeJwon"><i class="fa-brands fa-twitter"></i></a>
                       <a href="https://wa.link/6t4obt"><i class="fa-brands fa-whatsapp"></i></a>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once 'footer.php'
    ?>
</body>
</html>