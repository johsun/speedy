<?php 
/**
 * This is a Speedy pagecontroller.
 *
 */
// Include the essential config-file which also creates the $speedy variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Speedy container.
$speedy['title'] = "Hello World";
 
$speedy['header'] = <<<EOD
<img class='sitelogo' src='img/speedy_logo.png' alt='Speedy Logo'/>
<span class='sitetitle'>Speedy webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$speedy['main'] = <<<EOD
<h1>Speedy - ett ramverk för PHP</h1>
<p>Detta är en exempelsida som visar hur Speedy ser ut och fungerar.</p>
EOD;
 
$speedy['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Johan Sundgren (sundgren@mensa.se) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Speedy.
include(SPEEDY_THEME_PATH);