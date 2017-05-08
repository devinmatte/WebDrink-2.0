<?php

/*
*	Returning Environment Variables
*/

$get_env = function (&$var, $default = null) {
    return isset($var) ? $var : $default;
};

/*
*	General configuration
*/

$_ENV['API_BASE_URL'] = $get_env($_ENV['API_BASE_URL'], "api/index.php?request="); // The base URL of the Drink API
$_ENV['DRINK_SERVER_URL'] = $get_env($_ENV['DRINK_SERVER_URL'], "https://drink.csh.rit.edu:8080"); // Base URL for the Drink (websocket) server
$_ENV['LOCAL_DRINK_SERVER_URL'] = $get_env($_ENV['LOCAL_DRINK_SERVER_URL'], "http://localhost:3000"); // URL (and port) of test drink server (see /test directory)

/*
*	Rate limit delays (one call per X seconds)
*/

$_ENV['RATE_LIMIT_DROPS_DROP'] = $get_env($_ENV['RATE_LIMIT_DROPS_DROP'], 3); // Rate limit for /drops/drop

/*
*	Development configuration
*/

$_ENV['DEBUG'] = $get_env($_ENV['DEBUG'], true); // true for test mode, false for production

$_ENV['DEBUG_USER_UID'] = $get_env($_ENV['DEBUG_USER_UID'], "bencentra"); // If DEBUG is `true`, the UID of the test user (probably your own)
$_ENV['DEBUG_USER_CN'] = $get_env($_ENV['DEBUG_USER_CN'], "Ben Centra"); // If DEBUG is `true`, the display name of the user (probably your own)

$_ENV['USE_LOCAL_DRINK_SERVER'] = $get_env($_ENV['USE_LOCAL_DRINK_SERVER'], true); // If set to `true` and DEBUG is `true`, will use a mock Drink server for developing

?>
