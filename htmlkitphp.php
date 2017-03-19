<?php
#A html kit by wh0ami for php

function htmlstart($html = ''){
	echo "<html " . $html . ">";
    echo "<!-- Page runned by: htmlkit for php by wh0ami --!>";
}

function htmlheadstart($htmlhead = ''){
	echo "<head " . $htmlhead . ">";
}

function htmltitle($htmltitle = ''){
	echo "<title>" . $htmltitle . "</title>";
}

function htmlheadend(){
	echo "</head>";
}

function htmlbodystart($htmlbody = ''){
	echo "<body " . $htmlbody . ">";
}

function htmlbodyend(){
	echo "</body>";
}

function htmlend(){
	echo "</html>";
}

function htmlother($htmlother = ''){
  echo $htmlother;
}

function htmlfromfile($htmlfromfile = ''){
	echo file_get_contents($htmlfromfile);
}

function htmllinkcss($htmllinkcss = ''){
echo '<link rel="stylesheet" type="text/css" href="' . $htmllinkcss . '">';
}

function htmllinkjs($htmllinkjs = ''){
   echo "<script src='" . $htmllinkjs . "'></script>";
}



?>
