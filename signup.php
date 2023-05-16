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
                <a href="" class="menu-item">SIGN UP</a>
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
                        <h5>Create account to access the library.</h5>
                        <br>

                        <div id="form-pg">
                            <form action="" method="post" id="reg-form">
                                <fieldset id="account">
                                    <legend class="field-title">&nbsp;&nbsp;Account Setup&nbsp;&nbsp;</legend>

                                    <label id="lbl-email" for="vEmail">Email Address<wrap>*</wrap>:<br><input type="email" name="vEmail" id="vEmail" placeholder="eg. email@domain.com" required></label> <br>
                                    <label id="lbl-username" for="vUsername">Username:<br><input type="text" name="vUsername" id="vUsername" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[_]).{5,}" title="Must contain at least 5 characters (uppercase, lowercase, digits, and underscore)" placeholder="eg. surname_001"></label> <br>
                                    <label id="lbl-newpassword" for="vNewPassword">Password<wrap>*</wrap>:<br><input type="password" name="vNewPassword" id="vNewPassword" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*?[~`!@#$%^&amp;*()_=+\[\]{};:&apos;.,&quot;\\|\/?&gt;&lt;-]).{8,}" title="Must contain at least 8 characters with at least 1 uppercase, 1 lowercase, and 1 special symbol" required></label> <br>
                                    <label id="lbl-showpassword" for="chkShowPassword"><input type="checkbox" name="chkShowPassword" id="chkShowPassword">&nbsp;&nbsp;Show Password</label> <br>
                                    <label id="lbl-checkpassword" for="vConfirmPassword">Confirm Password<wrap>*</wrap>:<br><input type="password" name="vConfirmPassword" id="vConfirmPassword" title="Must be the same with the created Password" required></label>
                                    <br>
                                    <label id="lbl-ifstudent" for="vIfStudent"><input type="checkbox" name="vIfStudent" id="vIfStudent">&nbsp;&nbsp;I am still a student.</label>

                                    <br>
                                    <label class="lbl-required"><wrap>*</wrap>&nbsp;<i>Required field</i></label>
                                    <hr>
                                    <div id="btn-next">
                                        <button type="button">Next</button>
                                    </div>
                                </fieldset>

                                <fieldset id="personal">
                                    <legend class="field-title">&nbsp;&nbsp;Personal Details&nbsp;&nbsp;</legend>

                                    <label id="lbl-fullname">Full Name<wrap>*</wrap>:</label>
                                        <div class="grouper">
                                            <input type="text" name="vLastName" id="vLastName" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\s).{2,35}" placeholder="Last Name" required>
                                            <input type="text" name="vFirstName" id="vFirstName" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\s)(?=.*[.]).{2,35}" placeholder="First Name" required>
                                            <input type="text" name="vMI" id="vMI" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[.]).{2,5}" title="Must contain 2 to 5 characters (period included)" placeholder="M.I.">
                                        </div>

                                    <div class="grouper">
                                        <div id="gender">
                                            <label id="lbl-gender" for="vGender">Gender:&nbsp;&nbsp;<select name="vGender" id="vGender">
                                                <option value="Not stated">Rather not say</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select> </label>
                                        </div>
                                        <div id="age">
                                            <label id="lbl-age" for="vAge">Age:&nbsp;&nbsp;<input type="number" name="vAge" id="vAge"></label>
                                        </div>
                                        <div id="birthDate">
                                            <label id="lbl-birthdate" for="vBirthDate">Date of Birth<wrap>*</wrap>: <input type="date" name="vBirthDate" id="vBirthDate" required></label>
                                        </div>
                                    </div>

                                    <label id="lbl-contactno" for="vContactNo">Contact No.:&nbsp;&nbsp;<input type="tel" name="vContactNo" id="vContactNo" pattern="(?=.*\d).{11}" title="Must contain 11 digits" placeholder="09xxxxxxxxx"></label> <br>
                                    <label id="lbl-address">Address</label>
                                        <div class="grouper">
                                            <input type="text" name="vBarangay" id="vBarangay" placeholder="Barangay">
                                            <input type="text" name="vCity" id="vCity" placeholder="City/Municipality">
                                            <input type="text" name="vProvince" id="vProvince" placeholder="Province">
                                        </div>

                                    <br>
                                    <label class="lbl-required"><wrap>*</wrap>&nbsp;<i>Required field</i></label>
                                    <hr>
                                    <div class="button-group">
                                        <button type="button">Previous</button>
                                        <button type="button">Next</button>
                                    </div>
                                </fieldset>

                                <fieldset id="student">
                                    <legend class="field-title">&nbsp;&nbsp;Student Information&nbsp;&nbsp;</legend>

                                    <label id="lbl-school" for="vSchool">School<wrap>*</wrap>:&nbsp;&nbsp;<input type="text" name="vSchool" id="vSchool"></label>
                                    <label id="lbl-department" for="vDepartment">Department<wrap>*</wrap>:&nbsp;&nbsp;<select name="vDepartment" id="vDepartment">
                                        <option value="">Choose one.</option>
                                        <option value="Primary">Elementary</option>
                                        <option value="JHS">Junior High School</option>
                                        <option value="SHS">Senior High School</option>
                                        <option value="Undergraduate">College</option>
                                        <option value="Graduate">Graduate</option>
                                    </select> </label>
                                    <label id="lbl-schoolid" for="vSchoolID">School ID<wrap>*</wrap>:&nbsp;&nbsp;<input type="text" name="vSchoolID" id="vSchoolID" pattern="(?=.*\d).{7}" title="Must contain 7 digits" placeholder="9000001"></label>
                                    
                                    <div class="grouper">
                                        <div id="year">
                                            <label id="lbl-year" for="vYear">Year Level<wrap>*</wrap>:&nbsp;&nbsp;<input type="number" name="vYear" id="vYear" max="6"></label>
                                        </div>
                                        <div id="course">
                                            <label id="lbl-course" for="vCourse">Course/Section<wrap>*</wrap>:&nbsp;&nbsp;<input type="text" name="vCourse" id="vCourse" placeholder="Course Code"></label>
                                        </div>
                                    </div>

                                    <br>
                                    <label class="lbl-required"><wrap>*</wrap>&nbsp;<i>Required field</i></label>
                                    <hr>
                                    <div class="button-group">
                                        <button type="button">Previous</button>
                                        <button type="button">Next</button>
                                    </div>
                                </fieldset>

                                <fieldset id="confirm">
                                    <legend class="field-title">&nbsp;&nbsp;Confirm Submission&nbsp;&nbsp;</legend>

                                    <label id="lbl-reviewinfo" for="chkReviewInfo"><input type="checkbox" name="chkReviewInfo" id="chkReviewInfo" required>&nbsp;&nbsp;I have reviewed the details I entered.<wrap>*</wrap></label> <br><br>
                                    <label id="lbl-confirminfo" for="chkConfirmInfo"><input type="checkbox" name="chkReviewInfo" id="chkReviewInfo" required>&nbsp;&nbsp;The details I entered are accurate to the best of my knowledge.<wrap>*</wrap></label><br><br>
                                    <label id="lbl-allowinfo" for="chkAllowInfo"><input type="checkbox" name="chkAllowInfo" id="chkAllowInfo" required>&nbsp;&nbsp;I allow the site to collect and utilize my information for functionality purposes only.<wrap>*</wrap></label><br><br>

                                    <br>
                                    <label class="lbl-required"><wrap>*</wrap>&nbsp;<i>Required field</i></label>
                                    <hr>
                                    <div class="button-group">
                                        <button type="button">Previous</button>
                                        <div>
                                            <button type="reset">Cancel</button>
                                            <button type="submit">Register</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <a href="login.php">Already have an account? Login instead.</a>
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