<?php
	define( "VEN_VER" , "1.0" ); //Vendor
	define( "CSS_VER" , "1.0" ); //Styles
	define( "JS_VER" , "1.0" ); //Javascript

//======================================================================
// Conditional Config
//======================================================================

	// define( "SITE_BREAK" , "Jan 27, 2021 19:00:00" );
	define( "SITE_BREAK" , "Jan 17, 2021 19:00:00" );
	# Maintenance Break End Time

//======================================================================
// Global Site Config
//======================================================================

	define( 'GLOBAL_URL', dirname(__FILE__) );

	define( "SITE_URL" , "http://localhost/Space/" );

	define( "SITE_TITLE" , "SeanMcGinty.SPACE" );

	define( "SITE_DESC" , "A website made by Sean McGinty" );

	define( "SITE_SUBT" , "Sean McGinty" );

	define( "OWNER_URL" , "http://github.com/s3ansh33p" );

	# https://jscompress.com/
	
//======================================================================
// Skills Config
//======================================================================

	define( "HTML" , "Jan 1, 2017 00:00:00" );
	
	define( "CSS" , "Jan 1, 2017 00:00:00" );
	
	define( "JS" , "Jan 1, 2018 00:00:00" );
	
	define( "PHP" , "Jan 1, 2019 00:00:00" );
	
	define( "SCSS" , "Sep 1, 2020 00:00:00" );
	
	define( "SQL" , "Mar 1, 2020 00:00:00" );
	
	define( "NODEJS" , "Jan 1, 2020 00:00:00" );
	
	define( "GITHUB" , "Jan 1, 2019 00:00:00" );
	
	define( "WORDPRESS" , "Jan 1, 2019 00:00:00" );
	
	define( "ILLUSTRATOR" , "Jan 1, 2020 00:00:00" );
	
	define( "PHOTOSHOP" , "Jan 1, 2018 00:00:00" );
	
	define( "OFFICE" , "Jan 1, 2015 00:00:00" );

//======================================================================
// Audio Config
//======================================================================

	define( "AUD_VOL" , "0.5" );

//======================================================================
// Functions
//======================================================================

function skill($date) {
	$terms = ['Competant','Intermediate','Skilled','Proficient','Advanced','Expirienced','Expirienced','Expert'];
	$diff = abs(strtotime(date("Y-m-d")) - strtotime($date));  
	$years = floor($diff / (365*60*60*24));  
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
	if ($years >= 8) {
		return "<p>".$terms[7]."</p><p>(".$years." Years)</p>";
	} else if ($years >= 1) {
		return "<p>".$terms[($years-1)]."</p><p>(".$years." Years)</p>";
	} else if ($years == 1) {
		return "<p>".$terms[0]."</p><p>(1 Year)";
	} else {
		return "<p>".$terms[0]."</p><p>(".$months." Months)";
	};
}

?> 