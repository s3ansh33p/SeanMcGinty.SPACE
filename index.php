<?php 
    include_once("config.php");
    include_once(GLOBAL_URL."/layout/checkBreak.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $page="Home"; include_once(GLOBAL_URL."/layout/header.php");?>
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>assets/stylesheets/css/mcginty.css?v=<?=CSS_VER;?>"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>assets/stylesheets/css/w3.css?v=<?=CSS_VER;?>"/>
    <link href='https://fonts.googleapis.com/css?family=Orbitron|Monoton' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?=VEN_VER;?>">
  </head>
<body class="bgimg">
    <div class="content">
        <div class="middle">
            <h1 class="header">Sean McGinty</h1>
            <div class="button ice">Explore</div>
        </div>
        
        <div class="footer">
            <ul class="social">
                <li><a href="mailto:seanrwmcginty@gmail.com"><i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://github.com/s3ansh33p"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/in/seanrwmcginty"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
            </ul>
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
    <script src="<?=SITE_URL;?>assets/js/mcginty.audio.js"></script>
</body>
</html>