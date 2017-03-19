<?php
#Import the library:
include "htmlkitphp.php";

htmlstart($html = ''); # a  simle <html> tag with addons for example htmlstart($html = 'encoding="utf-8"');
htmlheadstart($htmlhead = '');# a  simle <head> tag with addons for example htmlstart($htmlhead = 'bgcolor="black"');
htmllinkcss($htmllinkcss = 'https://fonts.googleapis.com/icon?family=Material+Icons');# a  simle <style> tag with addons for example htmllinkcss($htmllinkcss = 'http://exmaple.com/exmaple.css');
htmllinkcss($htmllinkcss = 'https://code.getmdl.io/1.3.0/material.indigo-pink.min.css');
htmllinkjs($htmllinkjs = 'https://code.getmdl.io/1.3.0/material.min.js');# A simle <script src="..."> 
htmlother($htmlother= '<pre>htmlother(); example</pre>');#  other tag
htmltitle($htmltitle = 'your title');# a html <title> tag
htmlheadend();#tag </head>
htmlbodystart($htmlbody = '');# a simple <body>, exmaple: htmlbodystart($htmlbody = 'bgcolor="white"');
htmlfromfile($htmlfromfile = 'https://getmdl.io/templates/article/index.html');# get html from URL or file
htmlbodyend();
htmlend();

?>
