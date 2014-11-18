<?php 
/**
 * This is a Valla pagecontroller.
 *
 */
// Include the essential config-file which also creates the $valla variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the Valla container.
$valla['title'] = "404";
$valla['header'] = "";
$valla['main'] = "This is a Valla 404. Document is not here.";
$valla['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Valla.
include(VALLA_THEME_PATH);
