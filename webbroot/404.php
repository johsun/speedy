<?php 
/**
 * This is a Speedy pagecontroller.
 *
 */
// Include the essential config-file which also creates the $speedy variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Speedy container.
$anax['title'] = "404";
$anax['header'] = "";
$anax['main'] = "This is a Speedy 404. For some reason document is not here.";
$anax['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Anax.
include(SPEEDY_THEME_PATH);