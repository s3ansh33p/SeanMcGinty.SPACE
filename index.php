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
  </head>
<body onload="checkScrollReset();" class="bgimg overflow-none">
    <div class="content">
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
            <a class="explore ca3-scroll-down-link ca3-scroll-down-arrow ca3-hide"></a>
            <!-- Scroll Down Content -->
            <div class="slide slide-1">
                <h2>Slide 1</h2>
                <p>Slide 11</p>
            </div>
            <div class="slide slide-2">
                <h2>Slide 2</h2>
                <p>Slide 21</p>
            </div>
            <div class="slide slide-3">
                <h2>Slide 3</h2>
                <p>Slide 31</p>
            </div>
        </div>
        
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
                <a target="_blank" href="<?=OWNER_URL;?>">Sean McGinty</a>
            </span>
        </div>
    </div>
    <script>const site_url="<?=SITE_URL;?>"; const vol="<?=AUD_VOL;?>";</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.audio.js?v=<?=JS_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.home.js?v=<?=JS_VER;?>"></script>
    <script>
        function checkScrollReset() {
            var currpage = window.location.href;
            var lasturl = sessionStorage.getItem("last_url");
            if(lasturl == null || lasturl.length === 0 || currpage !== lasturl ){
                sessionStorage.setItem("last_url", currpage);
            }else{
                setTimeout(function(){ 
                    //Reset for GSAP
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; 
                }, 1);
            }
        }
    </script>
</body>
</html>