<div class="topnav">
            <a href="<?=SITE_URL;?>"<?php if($page == "Home"){echo ' class="active"';};?>>Home</a>
            <a href="<?=SITE_URL;?>about/"<?php if($page == "About"){echo ' class="active"';};?>>About</a>
            <a href="<?=SITE_URL;?>contact/"<?php if($page == "Contact"){echo ' class="active"';};?>>Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>