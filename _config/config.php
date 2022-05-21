<?php
//-----------------------//
//     ERRORS DISPLAY    //
//-----------------------//
error_reporting(E_ALL);
ini_set('display_errors', true);

//-----------------------//
//        SESSION        //
//-----------------------//
ini_set('session.cookie_lifetime', false);
session_start();

//-----------------------//
//       CONSTANTS       //
//-----------------------//
// DATABASES INFORMATION
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "db_mvc");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "root");

// WEBSITE INFORMATION
define("WEBSITE_TITLE", "");
define("WEBSITE_NAME", "");
define("WEBSITE_URL", "");
define("WEBSITE_DESCRIPTION", "");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// PATH
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));

// langauges
define("DEFAULT_LANGUAGE", "fr");
