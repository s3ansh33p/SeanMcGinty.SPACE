<!DOCTYPE html>
<html>
  <head>
  <?php include_once(GLOBAL_URL."/layout/header.php");?>
    <link rel="stylesheet" type="text/css" href="<?=SITE_URL;?>/assets/stylesheets/css/launch.css?v=<?=CSS_VER;?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?=VEN_VER;?>">
    <title>Maintenance | <?=SITE_SUBT;?></title>
  </head>
  <body>
    <div class="content">
      <div class="topleft">
        <p>Sean McGinty</p>
        <a target="_blank" href="https://discord.gg/CwzmPMQMbH" class="discord">
          <img src="<?=SITE_URL;?>assets/images/svg/discord.svg">
          <p>s3ansh33p#8691</p>
        </a>
      </div>
      <div class="middle">
        <h1 style="font-size:48px">Maintenance Break</h1>
        <p id="countdown" style="font-size:40px"></p>
        <a href="index.php" style="text-decoration: none; color: orange; font-size: 30px; display: none;" id="end">Proceed To Homepage</a>
      </div>
      <ul class="social">
        <li><a href="mailto:seanrwmcginty@gmail.com"><i class="fa fa-envelope-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://github.com/s3ansh33p"><i class="fa fa-github-square" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/in/seanrwmcginty"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <script>const site_url="<?=SITE_URL;?>"; const countDownDate = <?=strtotime(SITE_BREAK);?>*1000;</script>
    <script src="<?=SITE_URL;?>assets/js/vendor/three.min.js?v=<?=VEN_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/vendor/postprocessing.min.js?v=<?=VEN_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.space.js?v=<?=JS_VER;?>"></script>
    <script src="<?=SITE_URL;?>assets/js/mcginty.time.js?v=<?=JS_VER;?>"></script>
  </body>
</html>