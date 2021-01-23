<?php 
    include_once("config.php");
    include_once(GLOBAL_URL."/layout/checkBreak.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $page="Home"; include_once(GLOBAL_URL."/layout/header.php");?>
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>assets/stylesheets/css/mcginty.css?v=<?=CSS_VER;?>"/>
    <link href='https://fonts.googleapis.com/css?family=Orbitron|Monoton' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
<body onload="checkScrollReset();" class="bgimg bg-0 overflow-none">
    <div class="loader">
        <div class="loading">
            <div class="loading__ring">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path d="M85.5,42c-0.2-0.8-0.5-1.7-0.8-2.5c-0.3-0.9-0.7-1.6-1-2.3c-0.3-0.7-0.6-1.3-1-1.9c0.3,0.5,0.5,1.1,0.8,1.7  c0.2,0.7,0.6,1.5,0.8,2.3s0.5,1.7,0.8,2.5c0.8,3.5,1.3,7.5,0.8,12c-0.4,4.3-1.8,9-4.2,13.4c-2.4,4.2-5.9,8.2-10.5,11.2  c-1.1,0.7-2.2,1.5-3.4,2c-0.5,0.2-1.2,0.6-1.8,0.8s-1.3,0.5-1.9,0.8c-2.6,1-5.3,1.7-8.1,1.8l-1.1,0.1L53.8,84c-0.7,0-1.4,0-2.1,0  c-1.4-0.1-2.9-0.1-4.2-0.5c-1.4-0.1-2.8-0.6-4.1-0.8c-1.4-0.5-2.7-0.9-3.9-1.5c-1.2-0.6-2.4-1.2-3.7-1.9c-0.6-0.3-1.2-0.7-1.7-1.1  l-0.8-0.6c-0.3-0.1-0.6-0.4-0.8-0.6l-0.8-0.6L31.3,76l-0.2-0.2L31,75.7l-0.1-0.1l0,0l-1.5-1.5c-1.2-1-1.9-2.1-2.7-3.1  c-0.4-0.4-0.7-1.1-1.1-1.7l-1.1-1.7c-0.3-0.6-0.6-1.2-0.9-1.8c-0.2-0.5-0.6-1.2-0.8-1.8c-0.4-1.2-1-2.4-1.2-3.7  c-0.2-0.6-0.4-1.2-0.5-1.9c-0.1-0.6-0.2-1.2-0.3-1.8c-0.3-1.2-0.3-2.4-0.4-3.7c-0.1-1.2,0-2.5,0.1-3.7c0.2-1.2,0.3-2.4,0.6-3.5  c0.1-0.6,0.3-1.1,0.4-1.7l0.1-0.8l0.3-0.8c1.5-4.3,3.8-8,6.5-11c0.8-0.8,1.4-1.5,2.1-2.1c0.9-0.9,1.4-1.3,2.2-1.8  c1.4-1.2,2.9-2,4.3-2.8c2.8-1.5,5.5-2.3,7.7-2.8s4-0.7,5.2-0.6c0.6-0.1,1.1,0,1.4,0s0.4,0,0.4,0h0.1c2.7,0.1,5-2.2,5-5  c0.1-2.7-2.2-5-5-5c-0.2,0-0.2,0-0.3,0c0,0-0.2,0.1-0.6,0.1c-0.4,0-1,0-1.8,0.1c-1.6,0.1-4,0.4-6.9,1.2c-2.9,0.8-6.4,2-9.9,4.1  c-1.8,1-3.6,2.3-5.4,3.8C26,21.4,25,22.2,24.4,23c-0.2,0.2-0.4,0.4-0.6,0.6c-0.2,0.2-0.5,0.4-0.6,0.7c-0.5,0.4-0.8,0.9-1.3,1.4  c-3.2,3.9-5.9,8.8-7.5,14.3l-0.3,1l-0.2,1.1c-0.1,0.7-0.3,1.4-0.4,2.1c-0.3,1.5-0.4,2.9-0.5,4.5c0,1.5-0.1,3,0.1,4.5  c0.2,1.5,0.2,3,0.6,4.6c0.1,0.7,0.3,1.5,0.4,2.3c0.2,0.8,0.5,1.5,0.7,2.3c0.4,1.6,1.1,3,1.7,4.4c0.3,0.7,0.7,1.4,1.1,2.1  c0.4,0.8,0.8,1.4,1.2,2.1c0.5,0.7,0.9,1.4,1.4,2s0.9,1.3,1.5,1.9c1.1,1.3,2.2,2.7,3.3,3.5l1.7,1.6c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0  c0,0,0,0,0,0l0.1,0.1l0.1,0.1h0.2l0.5,0.4l1,0.7c0.4,0.2,0.6,0.5,1,0.7l1.1,0.6c0.8,0.4,1.4,0.9,2.1,1.2c1.4,0.7,2.9,1.5,4.4,2  c1.5,0.7,3.1,1,4.6,1.5c1.5,0.3,3.1,0.7,4.7,0.8c1.6,0.2,3.1,0.2,4.7,0.2c0.8,0,1.6-0.1,2.4-0.1l1.2-0.1l1.1-0.1  c3.1-0.4,6.1-1.3,8.9-2.4c0.8-0.3,1.4-0.6,2.1-0.9s1.3-0.7,2-1.1c1.3-0.7,2.6-1.7,3.7-2.5c0.5-0.4,1-0.9,1.6-1.3l0.8-0.6l0.2-0.2  c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0,0,0,0v0.1l0.1-0.1l0.4-0.4c0.5-0.5,1-1,1.5-1.5c0.3-0.3,0.5-0.5,0.8-0.8l0.7-0.8  c0.9-1.1,1.8-2.2,2.5-3.3c0.4-0.6,0.7-1.1,1.1-1.7c0.3-0.7,0.6-1.2,0.9-1.8c2.4-4.9,3.5-9.8,3.7-14.4C87.3,49.7,86.6,45.5,85.5,42z"></path></svg>
            </div>
            <div class="loading__ring">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path d="M85.5,42c-0.2-0.8-0.5-1.7-0.8-2.5c-0.3-0.9-0.7-1.6-1-2.3c-0.3-0.7-0.6-1.3-1-1.9c0.3,0.5,0.5,1.1,0.8,1.7  c0.2,0.7,0.6,1.5,0.8,2.3s0.5,1.7,0.8,2.5c0.8,3.5,1.3,7.5,0.8,12c-0.4,4.3-1.8,9-4.2,13.4c-2.4,4.2-5.9,8.2-10.5,11.2  c-1.1,0.7-2.2,1.5-3.4,2c-0.5,0.2-1.2,0.6-1.8,0.8s-1.3,0.5-1.9,0.8c-2.6,1-5.3,1.7-8.1,1.8l-1.1,0.1L53.8,84c-0.7,0-1.4,0-2.1,0  c-1.4-0.1-2.9-0.1-4.2-0.5c-1.4-0.1-2.8-0.6-4.1-0.8c-1.4-0.5-2.7-0.9-3.9-1.5c-1.2-0.6-2.4-1.2-3.7-1.9c-0.6-0.3-1.2-0.7-1.7-1.1  l-0.8-0.6c-0.3-0.1-0.6-0.4-0.8-0.6l-0.8-0.6L31.3,76l-0.2-0.2L31,75.7l-0.1-0.1l0,0l-1.5-1.5c-1.2-1-1.9-2.1-2.7-3.1  c-0.4-0.4-0.7-1.1-1.1-1.7l-1.1-1.7c-0.3-0.6-0.6-1.2-0.9-1.8c-0.2-0.5-0.6-1.2-0.8-1.8c-0.4-1.2-1-2.4-1.2-3.7  c-0.2-0.6-0.4-1.2-0.5-1.9c-0.1-0.6-0.2-1.2-0.3-1.8c-0.3-1.2-0.3-2.4-0.4-3.7c-0.1-1.2,0-2.5,0.1-3.7c0.2-1.2,0.3-2.4,0.6-3.5  c0.1-0.6,0.3-1.1,0.4-1.7l0.1-0.8l0.3-0.8c1.5-4.3,3.8-8,6.5-11c0.8-0.8,1.4-1.5,2.1-2.1c0.9-0.9,1.4-1.3,2.2-1.8  c1.4-1.2,2.9-2,4.3-2.8c2.8-1.5,5.5-2.3,7.7-2.8s4-0.7,5.2-0.6c0.6-0.1,1.1,0,1.4,0s0.4,0,0.4,0h0.1c2.7,0.1,5-2.2,5-5  c0.1-2.7-2.2-5-5-5c-0.2,0-0.2,0-0.3,0c0,0-0.2,0.1-0.6,0.1c-0.4,0-1,0-1.8,0.1c-1.6,0.1-4,0.4-6.9,1.2c-2.9,0.8-6.4,2-9.9,4.1  c-1.8,1-3.6,2.3-5.4,3.8C26,21.4,25,22.2,24.4,23c-0.2,0.2-0.4,0.4-0.6,0.6c-0.2,0.2-0.5,0.4-0.6,0.7c-0.5,0.4-0.8,0.9-1.3,1.4  c-3.2,3.9-5.9,8.8-7.5,14.3l-0.3,1l-0.2,1.1c-0.1,0.7-0.3,1.4-0.4,2.1c-0.3,1.5-0.4,2.9-0.5,4.5c0,1.5-0.1,3,0.1,4.5  c0.2,1.5,0.2,3,0.6,4.6c0.1,0.7,0.3,1.5,0.4,2.3c0.2,0.8,0.5,1.5,0.7,2.3c0.4,1.6,1.1,3,1.7,4.4c0.3,0.7,0.7,1.4,1.1,2.1  c0.4,0.8,0.8,1.4,1.2,2.1c0.5,0.7,0.9,1.4,1.4,2s0.9,1.3,1.5,1.9c1.1,1.3,2.2,2.7,3.3,3.5l1.7,1.6c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0  c0,0,0,0,0,0l0.1,0.1l0.1,0.1h0.2l0.5,0.4l1,0.7c0.4,0.2,0.6,0.5,1,0.7l1.1,0.6c0.8,0.4,1.4,0.9,2.1,1.2c1.4,0.7,2.9,1.5,4.4,2  c1.5,0.7,3.1,1,4.6,1.5c1.5,0.3,3.1,0.7,4.7,0.8c1.6,0.2,3.1,0.2,4.7,0.2c0.8,0,1.6-0.1,2.4-0.1l1.2-0.1l1.1-0.1  c3.1-0.4,6.1-1.3,8.9-2.4c0.8-0.3,1.4-0.6,2.1-0.9s1.3-0.7,2-1.1c1.3-0.7,2.6-1.7,3.7-2.5c0.5-0.4,1-0.9,1.6-1.3l0.8-0.6l0.2-0.2  c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0,0,0,0v0.1l0.1-0.1l0.4-0.4c0.5-0.5,1-1,1.5-1.5c0.3-0.3,0.5-0.5,0.8-0.8l0.7-0.8  c0.9-1.1,1.8-2.2,2.5-3.3c0.4-0.6,0.7-1.1,1.1-1.7c0.3-0.7,0.6-1.2,0.9-1.8c2.4-4.9,3.5-9.8,3.7-14.4C87.3,49.7,86.6,45.5,85.5,42z"></path></svg>
            </div>
        </div>
    </div>
    <div class="content m-hide">
        <div class="core">
            <div class="middle welcomer">
                <h1 class="header">Sean McGinty</h1>
                <div class="button ice" id="explore">Explore</div>
            </div>
            <div class="explorer">
                <div class="middle explore explore-0">
                    <h1>Welcome</h1>
                </div>
                <h1 class="explore explore-1 header">About Me</h1>
                <p class="explore explore-1">I am currently a Year 11 Student at Wesley College</p>
                <p class="explore explore-1">I am a computer enthusiast, entrepreneur and programmer.</p>
                <p class="explore explore-1">I have been in the web development scene for over four</p>
                <p class="explore explore-1">years and hope to continue with this passion.</p>
                <p class="explore explore-2">Scroll for more</p>
            </div>
            <a class="explore m-scroll-down-link m-scroll-down-arrow m-hide"></a>
            <!-- Scroll Down Content -->
            <div class="main">
                <div class="container">
                    <div class="section main-content explore">
                        <h1 class="header">My Skills</h1>
                        <div class="skills">
                            <div class="row">
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/html.svg">
                                    <p>HTML</p>
                                    <?php echo skill(HTML);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/css.svg">
                                    <p>CSS</p>
                                    <?php echo skill(CSS);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/js.svg">
                                    <p>JS</p>
                                    <?php echo skill(JS);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/php.svg">
                                    <p>PHP</p>
                                    <?php echo skill(PHP);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/scss.svg">
                                    <p>SCSS</p>
                                    <?php echo skill(SCSS);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/sql.svg">
                                    <p>SQL</p>
                                    <?php echo skill(SQL);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/node.svg">
                                    <p>NodeJS</p>
                                    <?php echo skill(NODEJS);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/github.svg">
                                    <p>GitHub</p>
                                    <?php echo skill(GITHUB);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/wp.svg">
                                    <p>WordPress</p>
                                    <?php echo skill(WORDPRESS);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/ai.svg">
                                    <p>Illustrator</p>
                                    <?php echo skill(ILLUSTRATOR);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/ps.svg">
                                    <p>PhotoShop</p>
                                    <?php echo skill(PHOTOSHOP);?>
                                </div>
                                <div class="col s6 m4 l3">
                                    <img class="skills-svg" src="<?=SITE_URL;?>assets/images/svg/office.svg">
                                    <p>Office Suite</p>
                                    <?php echo skill(OFFICE);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section main-content explore">
                        <h1 class="header">My Services</h1>
                        <div class="services">
                            <div class="row">
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/webdev.svg">
                                    <p>Web Development</p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/grades.svg">
                                    <p>Graphic Design</p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/uiux.svg">
                                    <p>UI / UX</p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/fuldev.svg">
                                    <p>Fullstack Development</p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/conwri.svg">
                                    <p>Content Writing</p>
                                </div>
                                <div class="col s12 m6 l4">
                                    <img class="services-svg" src="<?=SITE_URL;?>assets/images/svg/resdes.svg">
                                    <p>Responsive Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section end-content explore">
                        <h1 class="header">Contact Me</h1>
                        <div class="contact">
                            <div class="row">
                                <div class="col s12">
                                    <div class="contact-container">
                                        <div class="contact-icon">
                                            <a href="mailto:seanrwmcginty@gmail.com"><i class="fa fa-envelope-square fa-4x" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="contact-icon">
                                            <a href="tel:+61449682445"><i class="fa fa-phone-square fa-4x" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper" style="opacity: 0;"></div>
        <ul class="social">
                <li><a href="mailto:seanrwmcginty@gmail.com"><i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://github.com/s3ansh33p"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/seanrwmcginty"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        <div class="footer">
            <div class="playpause">
                <input type="checkbox" value="None" checked id="playpause" name="check" onclick="togglePlay();">
                <label for="playpause" tabindex="1"></label>
            </div>
            <div class="audiobars">
                <span class="audiobar audiobar-1 paused"></span>
                <span class="audiobar audiobar-2 paused"></span>
                <span class="audiobar audiobar-3 paused"></span>
                <span class="audiobar audiobar-4 paused"></span>
                <span class="audiobar audiobar-5 paused"></span>
            </div>
            <div class="footerfix vdivider"></div>
            <div class="footerfix2 vdivider"></div>
            <span>
                <p>Powered by</p>
                <a onclick="contactMe();">Sean McGinty</a>
            </span>
        </div>
    </div>
    <script>const site_url="<?=SITE_URL;?>";const vol="<?=AUD_VOL;?>";function checkScrollReset(){var e=window.location.href,o=sessionStorage.getItem("last_url");null==o||0===o.length||e!==o?sessionStorage.setItem("last_url",e):setTimeout(function(){document.body.scrollTop=0,document.documentElement.scrollTop=0;},1);gsap.to('.loader', {opacity: 0, duration: 0.2, ease: 'Power2.easeInOut', onComplete: cleanUp});function cleanUp() {document.getElementsByClassName("content")[0].classList.remove("m-hide");document.getElementsByClassName("loader")[0].classList.replace("loader","m-hide");}}</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.audio.js?v=<?=JS_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.home.js?v=<?=JS_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.totallynotctf.js?v=<?=JS_VER;?>"></script>
</body>
</html>