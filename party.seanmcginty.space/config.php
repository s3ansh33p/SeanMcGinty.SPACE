<?php
	define( "VEN_VER" , "1.0" ); //Vendor
	define( "CSS_VER" , "1.0" ); //Styles
	define( "JS_VER" , "1.0" ); //Javascript

	session_start();

//======================================================================
// Global Site Config
//======================================================================

	define( 'GLOBAL_URL', dirname(__FILE__) );

	define( "SITE_URL" , "http://localhost/Space/party.seanmcginty.space/" );

	define( "SITE_TITLE" , "Party" );

	define( "SITE_DESC" , "A website made by Sean McGinty" );

	define( "SITE_SUBT" , "Sean McGinty" );

	define( "OWNER_URL" , "http://github.com/s3ansh33p" );

	# https://jscompress.com/

//======================================================================
// Database Config
//======================================================================

	define( "DB_HOST" , "localhost" );

	define( "DB_USER" , "root" );

	define( "DB_PASS" , "" );

	define( "DB_NAME" , "party" );

?> 