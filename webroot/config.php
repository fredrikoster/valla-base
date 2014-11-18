<?php
/**
 * Config-file for Valla. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Valla paths.
 *
 */
define('VALLA_INSTALL_PATH', __DIR__ . '/..');
define('VALLA_THEME_PATH', VALLA_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(VALLA_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Valla variable.
 *
 */
$valla = array();
 
 
/**
 * Site wide settings.
 *
 */
$valla['lang']         = 'sv';
$valla['title_append'] = ' | Valla en webbtemplate';

$valla['header'] = <<<EOD
<img class='sitelogo' src='img/oophp.png' alt='oophp Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;

$valla['footer'] = <<<EOD
<footer>
	<span class='sitefooter'>
		Copyright (c) Fredrik Öster (fredrikoster87@gmail.com)
	</span>
	<p class='sitefooter'>Verktyg:
      <a href="http://validator.w3.org/check/referer" target="_blank">HTML5</a>  
      <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a>
      <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank">CSS3</a>
      <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance" target="_blank">Unicorn</a>
    </p>
</footer>
EOD;

$valla['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src="img/me2.jpg" width="133" height="150" alt="Närbild Fredrik Öster">
    <figcaption>Fredrik Öster.</figcaption>
  </figure>
  <p>Fredrik Öster från västkusten spelar fotboll i den näst högsta divisionen...div. 7 finns också...</p>


</footer>
EOD;


/**
 * Theme related settings.
 *
 */
$valla['stylesheets'] = array('css/style.css');
$valla['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$valla['modernizr'] = 'js/modernizr.js';
$valla['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$valla['jquery'] = null; // To disable jQuery
$valla['javascript_include'] = array();
//$valla['javascript_include'] = array('js/main.js'); // To add extra javascript files
 
 // Add js/main.js for inklusion
$valla['javascript_include'][] = 'js/main.js';
$valla['javascript_include'][] = 'js/other.js';
 
$valla['header'] = <<<EOD
<img class='sitelogo' src='img/valla.png' alt='Valla Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span> 
EOD;


 /**
 * The navbar
 *
 */
//$anax['navbar'] = null; // To skip the navbar
$valla['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'reports.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);
 
 
/**
 * Google analytics.
 *
 */
//$valla['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

?>