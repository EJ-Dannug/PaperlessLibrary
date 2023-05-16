<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="Edvince Joy M. Dannug, 3BSCS SCST-CSJLC">
        <meta name="description" content="This is a digital library website authored by Edvince Joy M. Dannug, 3BSCS SCST-CSJLC, developed with HTML, CSS, JavaScript, and PHP as the Midterm Exam on COMP461L Applications Development and Emerging Technologies Lab">
        <meta name="keywords" content="Digital Library, AppDev, HTML, CSS, JavaScript, PHP">

        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <title>AppDevLab | Midterm Exam</title>
        <link rel="icon" type="image/png" href="assets/logo.ico">
    </head>

    <body>
        <header>
            <a href="" id="home-link"> <section id="home">
                <img src="assets/logo.png" alt="" id="logo-icon">
                <div id="logo-text">
                    <h3>Paperless Library</h3>
                    <h5>EJMD Solutions</h5>
                </div>
            </section> </a>

            <section id="menu">
                <a href="about.php" class="menu-item">ABOUT</a>
                <a href="signup.php" class="menu-item">SIGN UP</a>
                <a href="login.php" class="menu-item">LOGIN</a>
            </section>
        </header>
        
        <main>
            <div id="background"></div>
            <div id="content">
                <section id="description-carousel">
                    <div class="slider">
                        <div class="slide">
                            <input type="radio" name="radio-btn" id="slide1" checked>
                            <input type="radio" name="radio-btn" id="slide2">
                            <input type="radio" name="radio-btn" id="slide3">
                            <input type="radio" name="radio-btn" id="slide4">
                            <input type="radio" name="radio-btn" id="slide5">
                            <input type="radio" name="radio-btn" id="slide6">

                            <div class="st first"> <img src="assets/index/slide1.png"> </div>
                            <div class="st"> <img src="assets/index/slide2.png"> </div>
                            <div class="st"> <img src="assets/index/slide3.png"> </div>
                            <div class="st"> <img src="assets/index/slide4.png"> </div>
                            <div class="st"> <img src="assets/index/slide5.png"> </div>
                            <div class="st"> <img src="assets/index/slide6.png"> </div>

                            <div class="nav-auto">
                                <div class="a-btn1"></div>
                                <div class="a-btn2"></div>
                                <div class="a-btn3"></div>
                                <div class="a-btn4"></div>
                                <div class="a-btn5"></div>
                                <div class="a-btn6"></div>
                            </div>
                        </div>

                        <div class="nav-man">
                            <label for="slide1" class="m-btn"></label>
                            <label for="slide2" class="m-btn"></label>
                            <label for="slide3" class="m-btn"></label>
                            <label for="slide4" class="m-btn"></label>
                            <label for="slide5" class="m-btn"></label>
                            <label for="slide6" class="m-btn"></label>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        
        <footer>
        <br><br>
            <h3>Digital Library &nbsp;&nbsp;|&nbsp;&nbsp; AppDev Midterm Exam</h3>
            <br>
            <p>Authored by:</p>
            <h5>Edvince Joy M. Dannug</h5>
            <h5>3rd Year, BS Computer Science</h5>
            <ul id="socials">
                <li><a id="facebook-link" href="https://www.facebook.com/ejmdannug" target="_blank" title="Facebook Link"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a id="linkedin-link" href="https://ph.linkedin.com/in/edvince-joy-dannug" target="_blank" title="LinkedIn Link"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a id="github-link" href="https://github.com/EJ-Dannug" target="_blank" title="Github Link"><i class="fa-brands fa-square-github"></i></a></li>
                <li><a id="email-link" href="mailto:dannugejm@gmail.com" title="Email Link"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
            <br>
            <p>with the help of</p>
            <ul id="sources">
                <li><a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Bootstrap</a></li>
                <li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="https://fontawesome.com/" target="_blank">Font Awesome Icons</a></li>
                <li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="https://fonts.google.com/" target="_blank">Google Fonts</a></li>
                <li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="https://coolors.co/palettes/trending" target="_blank">Coolors</a></li>
                <li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="https://storyset.com/" target="_blank">StorySet</a></li>
                <li>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="https://www.pxfuel.com/" target="_blank">PX Fuel</a></li>
            </ul>
            <br>
            <p>as a partial fulfillment of the course requirements in</p>
            <h5>Applications Development and Emerging Technologies</h5>
            <h5>at Colegio de San Juan de Letran Calamba, AY 2022 - 2023</h5>
            <br><br>
        </footer>
    </body>
</html>