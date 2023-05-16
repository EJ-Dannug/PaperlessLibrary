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
                <a href="" class="menu-item active">SIGN UP</a>
                <a href="login.php" class="menu-item">LOGIN</a>
            </section>
        </header>
        
        <main>
            <div id="background"></div>
            <div id="content">
                <section id="reg-con">
                    <img src="assets/register/signup-pic.png" alt="">
                    <div id="form-con">
                        <h1>REGISTRATION FORM</h1>
                        <h5>Create account to access the library.</h5> <br>
                        <div id="form-page">
                            <form action="" method="post">
                                <fieldset id="account-setup">
                                    <legend>&nbsp;&nbsp;Account Setup&nbsp;&nbsp;</legend>
                                    <label for="email">Email address<wrap>*</wrap>: <input type="email" name="email" id="email" placeholder="eg. email@domain.com" required></label>
                                    <label for="username">Username<wrap>*</wrap>: <input type="text" name="username" id="username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_])" placeholder="eg. delacruz9000001" required></label>
                                    <label for="newPassword">Password<wrap>*</wrap>: <input type="password" name="newPassword" id="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[~`!@#$%^&amp;*()_=+\[\]{};:&apos;.,&quot;\\|\/?&gt;&lt;-]).{8,}" title="Must be at least 8 characters long with at least 1 uppercase, 1 lowercase, and 1 special character" required></label>
                                    <label for="confirmPassword">Confirm Password<wrap>*</wrap>: <input type="password" name="confirmPassword" id="confirmPassword" title="Must be the same as the New Password" required></label>
                                    <label for="chkIf_student"><input type="checkbox" name="ifStudent" id="ifStudent"> I am a student.</label>
                                </fieldset>
                                <fieldset id="personal-details">
                                    <legend>&nbsp;&nbsp;Personal Details&nbsp;&nbsp;</legend>
                                    <label for="lastName">Last Name<wrap>*</wrap>: <input type="text" name="lastName" id="lastName" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.\s).{2,35}" title="Must be at least 2 to 35 characters long" placeholder="eg. Dela Cruz" required></label>
                                    <label for="firstName">First Name<wrap>*</wrap>: <input type="text" name="firstName" id="firstName" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.\s).{2,35}" title="Must be at least 2 to 35 characters long" placeholder="eg. Juan" required></label>
                                    <label for="midInitial">Middle Initial<wrap>*</wrap>: <input type="text" name="midInitial" id="midInitial" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[.]).{2,5}" title="Must be at least 2 to 5 characters long (period included)" placeholder="eg. C." required></label>
                                    <label for="birthDate">Date of Birth<wrap>*</wrap>: <input type="date" name="birthDate" id="birthDate" placeholder="MM/DD/YYYY" required></label>
                                    <label for="age">Age: <input type="text" name="midInitial" id="midInitial" pattern="(?=.*[*\d])"></label>
                                    <label for="gender">Gender: <select name="gender" id="gender">
                                        <option value="Confidential">Rather not say</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select> </label>
                                    <label for="contactNo">Contact No.: <input type="text" name="contactNo" id="contactNo" pattern="(?=.*\d).{11}" title="Must be 11 digits long" placeholder="09xxxxxxxx"></label>
                                    <label for="address">Address: <input type="text" name="address" id="address" placeholder="Specific Address, Barangay, City, Province"></label>
                                </fieldset>
                                <fieldset id="student-information">
                                    <legend>&nbsp;&nbsp;Student Information&nbsp;&nbsp;</legend>
                                    <label for="school">School<wrap>*</wrap>: <input type="text" name="school" id="school" placeholder="eg. Colegio de San Juan de Letran Calamba"></label>
                                    <label for="department">Department<wrap>*</wrap>: <select name="department" id="department">
                                        <option value="">Choose One</option>
                                        <option value="Elementary">Primary</option>
                                        <option value="JHS">Junior High School</option>
                                        <option value="SHS">Senior High School</option>
                                        <option value="College">Undergraduate Studies</option>
                                        <option value="Graduate">Graduate Studies</option>
                                    </select></label>
                                    <label for="studentNo">Student No.<wrap>*</wrap>: <input type="text" name="studentNo" id="studentNo" pattern="(?=.*\d).{7}" title="Must be 7 digits long" placeholder="eg. 9000001"></label>
                                    <label for="yearLevel">Year Level<wrap>*</wrap>: <input type="text" name="yearLevel" id="yearLevel" pattern="(?=.*\d).{1}" title="Must be 1 digit long"></label>
                                    <label for="course">Course/Section<wrap>*</wrap>: <input type="text" name="course" id="course" placeholder="Course Code"></label>
                                </fieldset>
                                <fieldset id="confirmation">
                                    <legend>&nbsp;&nbsp;Confirm Submission&nbsp;&nbsp;</legend>
                                    <label for="chkTC"><input type="checkbox" name="chkTC" id="chkTC"> I read, understand, and accept the terms and conditions.<wrap>*</wrap></label>
                                    <button type="submit">Register</button>
                                </fieldset>
                            </form>
                        </div>
                        <br> <a href="">Already had an account? Login instead.</a>
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