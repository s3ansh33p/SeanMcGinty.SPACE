<?php include_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta property="og:url"           content="<?php echo strtok((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", '?');?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="SeanMcGinty.SPACE" />
    <meta property="og:description"   content="A website made by Sean McGinty" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>/assets/stylesheets/css/launch.css?v=<?=CSS_VER;?>"/>
    <link href="<?=SITE_URL;?>assets/images/favicon/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <link href="<?=SITE_URL;?>assets/images/favicon/favicon.ico" type="image/x-icon" rel="icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?=VEN_VER;?>">
    <title>Dinrah</title>
  </head>
</head>
<body class="bgimg">
    <div class="content">
      <div class="topleft">
        <p>Josh Kelly</p>
        <a target="_blank" href="https://discord.gg/CwzmPMQMbH" class="discord">
          <img src="<?=SITE_URL;?>assets/images/svg/discord.svg">
          <p>dinrah#6666</p>
        </a>
      </div>
      <div class="middle">
        <img class="avatar" src="<?=SITE_URL;?>assets/images/profile.jpg">
        <h1 style="font-size:48px">Dinrah</h1>
        <p>Plays Rust, CS:GO and osu!</p>
      </div>
      <ul class="social">
        <li><a href="mailto:slothyjk@gmail.com"><i class="fa fa-envelope-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://github.com/dinrah"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/dinrah3"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.youtube.com/channel/UCY1RI2yHUN6JkbyYLsVic0g"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://steamcommunity.com/profiles/76561198986820787"><i class="fa fa-steam-square" aria-hidden="true"></i></a></li>
      </ul>
      <div class="siteref">
        <a target="_blank" href="<?=ROOT_URL;?>">Website Created By Sean McGinty</a>
      </div>
    </div>
</body>
</html>