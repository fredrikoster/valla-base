<?php 
/**
 * This is a Valla pagecontroller.
 *
 */
// Include the essential config-file which also creates the $valla variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Valla container.
$valla['title'] = "Redovisningar";


$valla['main'] = <<<EOD
<article class="readable">
<h1>Kmom01: Kom igång med programmering i PHP</h1>
<p>I detta kursmoment valde jag att arbeta med Notepad++, WAMP och FileZilla och det fungerade bra. Jag använde samma utvecklingsmiljö under den tidigare kursen och därför blev det att jag använde samma för denna. Val av webbläsare men Chrome är min standardwebbläsare.</p>
<p>PHP-guiden hade jag redan läst och därför blev det att jag lade mer krut på Anax-guiden. Men det blev lite repetition, vilket alltid är bra. Mitt namn på Anax blev Valla. Det var ett namn som plötsligt dök upp och det föll mig i smaken. Valla är en förkortning av min hemort Uddevalla. Sen är det ju också något som man applicerar under skidorna för att det ska gå snabbare och lättare. Och det är ju lite av syftet med Anax, fast inom ett annat användningsområde.  </p>
<p>Än så länge så har jag inte gjort några förändringar. Jag behöver nog arbeta lite mer med strukturen innan jag kommer på något som jag skulle vilja göra annorlunda. Det som jag reagerade på var att man använder HTML-kod i sidkontrollerna, och det kommer man kanske aldrig riktigt ifrån. Men en lösning som jag funderade på var om man skulle lagra ett filnamn i <code>$ valla['main']</code>, som man sedan hade inkluderat med <code>include()</code>. Med en sådan lösning hade man fått en extra fil per sidkontroll men uppdelningen hade möjligtvis blivit tydligare. Detta var en tanke som jag fick och som jag valde att avvakta med. Kanske gör jag något åt det vid ett senare tillfälle om jag upplever problem med den nuvarande strukturen, men så är inte fallet för tillfället.</p>
<p>Min Valla-version innehåller alla delar (inkl. JavaScript) som togs upp i genomgången av Anax. Jag har ändrat namnet till Valla på alla ställen, förutom i README-filen. Där står det att det är en kopia av Anax. Jag hoppas att det är ok. Jag kan ju inte ta åt mig credd för något som jag inte har gjort :) </p>
<p>Jag fick ett problem när jag skulle inkludera source.php och det var att jag inte lade till modulen CSource.php. Men när den var tillagd i katalogen CSource så fungerade det. Det känns kul att få komma igång med klasser!</p>
<p>Jag valde att göra extrauppgiften med Github. Jag har aldrig använt Github, så jag tyckte att det var ett intressant tillägg. Även om det inte är en del av examinationen så är det bra att känna till hur det fungerar. Första versionen av repot Valla-base är en kopia av första inlämningen. Mitt repo kan man hitta här: <a href="https://github.com/fredrikoster/valla-base" target="_blank">https://github.com/fredrikoster/valla-base</a>  </p>
</article>
EOD;


// Finally, leave it all to the rendering phase of Valla.
include(VALLA_THEME_PATH);
