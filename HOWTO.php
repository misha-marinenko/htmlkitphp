<pre>HOWTO:
download a htmlkitphp.php file in a core of your project

make your page php file: for example: "index.php"

the example file a index.php
</pre>
index.php:
<?php
#it imports the html kit!
include "htmlkitphp.php";

htmlstart($html = '');
htmlheadstart($htmlhead = '');
htmllinkcss($htmllinkcss = '');
htmlother($htmlother= '<pre>htmlother(); example</pre>');
htmltitle($htmltitle = 'your title');
htmlheadend();
htmlbodystart($html = '');
htmlfromfile($htmlfromfile = 'http://...');
htmlbodyend();
htmlend();

?>
