<?php
    if (strtotime(SITE_BREAK) > strtotime("now")) {
        include_once(GLOBAL_URL."/break.php");
        exit;
    }
?>