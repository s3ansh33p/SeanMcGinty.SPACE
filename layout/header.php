<meta charset="UTF-8"/>
<meta property="og:url"           content="<?php echo strtok((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", '?');?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?=SITE_TITLE;?>" />
<meta property="og:description"   content="<?=SITE_DESC;?>" />
<link href="<?=SITE_URL;?>assets/images/favicon/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
<link href="<?=SITE_URL;?>assets/images/favicon/favicon.ico" type="image/x-icon" rel="icon"/>
<title><?=$page." | ".SITE_SUBT;?></title>