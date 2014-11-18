<?php 
/**
 * This is a Valla pagecontroller.
 *
 */
// Include the essential config-file which also creates the $valla variable with its defaults.
include(__DIR__.'/config.php'); 

// Define what to include to make the plugin to work
$valla['stylesheets'][]        = 'css/slideshow.css';
$valla['jquery']               = true;
$valla['javascript_include'][] = 'js/slideshow.js';

// Do it and store it all in variables in the Valla container.
$valla['title'] = "Om mig";

$valla['main'] = <<<EOD
<article class="readable">
<h1>Om Mig</h1>
<p>Fredrik Öster en student på BTH som läser kurspaketet Databaser, HTML, CSS, JavaScript och PHP. 
Fredrik har ett brinnande intresse för webbutveckling och utformandet av webbsidor. 
</p>
<p>Han har även ett stort intresse för musik, film och fotboll. 
Fredrik bor i Uddevalla på västkusten där han har nära till sin familj och vänner som han umgås 
med så mycket som möjligt.</p>
{$valla['byline']}
</article>
EOD;


// Finally, leave it all to the rendering phase of Valla.
include(VALLA_THEME_PATH);
