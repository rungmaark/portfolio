<?php
session_start();

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        header("Location: form.php");
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Puree's portfolio</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar">
            <a href="#home" class="nav-btn">Home</a>
            <a href="#about" class="nav-btn">About me</a>
            <a href="#edu" class="nav-btn">Education</a>
            <a href="#stats" class="nav-btn">Stats</a>
            <a href="#certificates" class="nav-btn">Certificates</a>
        </nav>

        <h1>test</h1>

        <!-- home section start -->
        <section class="home-section" id="home">
            <div class="home-content">
                <div class="home-content-top">Hello <?php echo $username?>, my name is</div>
                <div class="home-content-mid">Puree Sothornpratan</div>
                <div class="home-content-bottom">ภูรี โสธรประทาน <span class="typing"></span></div>
            </div>
        </section>
        <!-- about section -->
        <section class="about-section" id="about">
            <div class="container">
                <div class="profile-pic">
                    <img src="img/IMG_0766.jpg" alt="">
                </div>
                <div class="about-me">
                    <h1>About Me</h1>
                    <p>ผมชื่อมาร์ค อายุ 17 ปี ปัจจุบันผมมีความสามารถในการสร้าง Website และ Game เหตุผลที่ผมต้องการเรียนคณะนี้เพราะ ผมต้องการเข้าใจเทคโนโลยีอย่างลึกซึ้ง<br>เพื่อต่อยอดงานต่างๆที่ผมกำลังพัฒนาอยู่ให้มีมาตรฐานมากขึ้น<br>และการสร้างสิ่งที่สุดยอดจนโลกต้องมองคือ Passion ของผมครับ</p>
                </div>
            </div>
        </section>
        <!-- education section -->
        <section class="edu-section" id="edu">
            <div class="skdw-con">
                <div class="skdw-img"></div>
                <div class="skdw-paragraph">ผมได้รับการศึกษาชั้นมัธยมต้นถึงมัธยมปลายที่โรงเรียนสุคนธีรวิทย์ แต่ผมพักการเรียนช่วงมัธยมศึกษาปีที่ 5 แล้วเลือกที่จะไปสอบ GED แทน</div>
            </div>
            <div class="ged-con">
                <div class="ged-paragraph">สาเหตุที่ผมเลือกที่จะมาสอบ GED เพราะผมถูกพักการเรียนเนื่องจากต้องรับการผ่าตัดตา 2 ข้างทำให้เรียนให้ทันเพื่อนไม่ได้ จึงเลือกสอบ GED เพื่อทดแทนเวลาที่พักการเรียนไป</div>
                <div class="ged-img"></div>
            </div>
        </section>
        <!-- Stats section-->
        <section class="stats-section" id="stats">
            <div class="stats-con">
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level html">
                            <div class="stat-label">HTML</div>
                            <div class="stat-label percent">95%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level css">
                            <div class="stat-label">CSS</div>
                            <div class="stat-label percent">80%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level js">
                            <div class="stat-label">Javascript</div>
                            <div class="stat-label percent">90%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level jquery">
                            <div class="stat-label">jQuery</div>
                            <div class="stat-label percent">75%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level php">
                            <div class="stat-label">PHP</div>
                            <div class="stat-label percent">70%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level python">
                            <div class="stat-label">Python</div>
                            <div class="stat-label percent">50%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level mysql">
                            <div class="stat-label">MySQL</div>
                            <div class="stat-label percent">50%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level bootstrap">
                            <div class="stat-label">Bootstrap</div>
                            <div class="stat-label percent">90%</div>
                        </div>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-level lua">
                            <div class="stat-label">Lua</div>
                            <div class="stat-label percent">35%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills-con">
                <div class="skill">
                    <div class="skill-title">
                        <img src="img/frontend.png" alt="" class="skill-icon">
                        <div class="skill-label">Front-end</div>
                    </div>
                    <div class="description">ผมสามารถพัฒนา UX/UI ของ Website และ Game ซึ่งเว็บนี้ก็เป็นหนึ่งในที่ผมพัฒนาเช่นกันครับ</div>
                </div>
                <div class="skill">
                    <div class="skill-title" style="padding-left: 15px; margin-bottom: 15px;">
                        <img src="img/603156.png" alt="" class="skill-icon" style="width: 75px; height: 75px; margin-right: 10px;">
                        <div class="skill-label">Back-end</div>
                    </div>
                    <div class="description">ผมใช้ PHP ในการจัดการข้อมูลของผู้ใช้ และ ใช้ Javascript เพื่อเชื่อมโยงผู้ใช้กับข้อมูลหลังบ้านครับ</div>
                </div>
                <div class="skill">
                    <div class="skill-title" style="padding-left: 10px;">
                        <img src="img/globe-connection-graph-circle-icon-vector-27719458-removebg-preview.png" alt="" class="skill-icon" style="width: 85px; height: 85px;">
                        <div class="skill-label">Framework</div>
                    </div>
                    <div class="description">ผมเป็นคนยืดหยุ่นกับการใช้ Framework ต่างๆมาก แต่ที่ใช้บ่อยๆก็มี Bootstrap, Anime.js และ jQuery ครับ</div>
                </div>
            </div>
            <div class="big-rungmaark"></div>
        </section>
        <!-- Certificates section -->
        <section class="projects-section" id="certificates">
            <div class="projects-title">เกียรติบัตร</div>
            <div class="projects-con">
                <div class="project project-1" onclick="showAlert(this)">
                    <div class="projects-img"></div>
                    <div class="project-title">สร้าง Webpage ระดับชาติ🥇</div>
                </div>
                <div class="project project-2" onclick="showAlert(this)">
                    <div class="projects-img"></div>
                    <div class="project-title">สร้าง Webpage ระดับเขต🥇</div>
                </div>
                <div class="project project-3" onclick="showAlert(this)">
                    <div class="projects-img"></div>
                    <div class="project-title">ตัวแทนยุวบรรณารักษ์</div>
                </div>
                <div class="project project-4" onclick="showAlert(this)">
                    <div class="projects-img"></div>
                    <div class="project-title">ลูกเสือจราจร</div>
                </div>
                <div class="project project-5" onclick="showAlert(this)">
                    <div class="projects-img"></div>
                    <div class="project-title">GED Deploma</div>
                </div>
            </div>
            <!-- Custom alert container -->
            <div id="custom-alert" class="custom-alert">
                <img id="alert-image" src="" alt="Project Image">
            </div>
        </section>
        <footer>
            <div class="footer-title">Contacts</div>
            <div class="contacts-con">
                <div class="contact">✉️ : rungmaark@hotmail.com</div>
                <div class="contact">📞 : 094-926-8881</div>
                <div class="contact">📍 : 89/12 อ.เมือง ต.บางแขม จ.นครปฐม</div>
            </div>
            <div class="sm-con">
                <a href="https://www.facebook.com/mai.wa.1420/">
                    <img src="img/facebook-3.png" alt="" class="sm">
                </a>
                <a href="https://www.instagram.com/rungmaark/">
                    <img src="img/instagram-2.png" alt="" class="sm">
                </a>
                <a href="https://www.linkedin.com/in/rung-mark-18851031b/">
                    <img src="img/linkedin.png" alt="" class="sm">
                </a>
            </div>
        </footer>
        <!-- Backdrop -->
        <div class="backdrop"></div>
        <script src="js/app.js"></script>
    </body>
</html>