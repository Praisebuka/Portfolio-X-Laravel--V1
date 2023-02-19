<?php
include 'includes/headerr.blade.php';

?>


<section>
    <div class="container">
        <div class="contactInfo">
            <div>
                <h2>
                    Reach me via social-media
                </h2>
                <ul class="info">
                    <li>
                        <span><img src="img/mail.png"></span>
                        <span>praise.njoga@gmail.com<br></span>
                    </li>
                    <li>
                        <span><img src="img/Whatsapp.png"></span>
                        <span>+234-909-499-1732</span>
                    </li>
                    <li>
                        <span><img src="img/Github.png"></span>
                        <span>Praise Ebuka</span>
                    </li>
                </ul>
            </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/praise.diamond.7737" target="_blank"><img src="img/1.png" alt="https://www.facebook.com/praise.diamond.7737"></a></li>
                <li><a href="https://www.instagram.com/praisebuka/" target="_blank"><img src="img/3.png" alt="https://www.instagram.com/praisebuka/"></a></li>
                <li><a href="https://www.linkedi'n.com/in/praise-ebuka-3110a4246/" target="_blank"><img src="img/5.png" alt="https://www.linkedin.com/in/praise-ebuka-3110a4246/"></a></li>
                <li><a href="https://twitter.com/PraiseEbuka1" target="_blank"><img src="img/2.png" alt="https://twitter.com/PraiseEbuka1"></a></li>
            </ul>
        </div>

        <form action="includes/contact-inc.php" method="post">
        <div class="contactForm">
            <h2>Send your request to Praisebuka</h2>
            <div class="formBox">
                <div class="inputBox w50">
                    <input type="text" name="name"required>
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="second" required>
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="email" name="email" required>
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" name="phone" required>
                    <span>Mobile Phone-Number</span>
                </div>
                <div class="inputBox w100">
                    <textarea name="message" required></textarea>
                    <span>Leave your messages here...</span>
                </div>
                <div class="inputBox w100">
                    <button type="submit" name="submit">
                        Send
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>

<?php
include 'includes/footer.blade.php';

?>