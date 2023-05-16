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
            <a href="index.php" id="home-link"> <section id="home">
                <img src="assets/logo.png" alt="" id="logo-icon">
                <div id="logo-text">
                    <h3>Paperless Library</h3>
                    <h5>EJMD Solutions</h5>
                </div>
            </section> </a>

            <section id="menu">
                <a href="about.php" class="menu-item">ABOUT</a>
                <a href="signup.php" class="menu-item">SIGN UP</a>
                <a href="" class="menu-item active">LOGIN</a>
            </section>
        </header>
        
        <main>
            <div id="background"></div>
            <div id="content">
                <section class="con">
                    <img src="assets/signup-login/login-pic.png">

                    <div class="form-con">
                        <h1>LOG IN</h1>
                        <h5>Access your account.</h5>
                        <br>

                        <div class="form-pg">
                            <form action="" method="post" id="login-form">
                                <fieldset id="login">
                                    <legend class="field-title">&nbsp;&nbsp;Login Credentials&nbsp;&nbsp;</legend>

                                    <label id="lbl-credential" for="vCredentials">Email/Username<wrap>*</wrap>:<br><input type="text" name="vCredentials" id="vCredentials" required></label> <br>
                                    <label id="lbl-password" for="vPassword">Password<wrap>*</wrap>:<br><input type="password" name="vPassword" id="vPassword" required></label> <br>
                                    <label id="lbl-showpassword" for="chkShowPassword"><input type="checkbox" name="chkShowPassword" id="chkShowPassword">&nbsp;&nbsp;Show Password</label> <br>

                                    <br><br>
                                    <div class="button-group">
                                        <button type="reset">Cancel</button>
                                        <button type="submit">Login</button>
                                    </div> <br>
                                </fieldset>
                            </form>
                            
                        </div>
                        <a href="signup.php">Don't have an account? Sign Up instead.</a>
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