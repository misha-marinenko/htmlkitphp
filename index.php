<?php
#Main page of Mars project by wh0ami
include "htmlkitphp.php";

htmlstart($html = '');
htmlheadstart($htmlhead = '');
htmllinkcss($htmllinkcss = '');
htmlother($htmlother= '<pre>htmlother(); example</pre>');
htmltitle($htmltitle = 'your title');
htmlheadend();
htmlbodystart($html = '');
htmlfromfile($htmlfromfile = 'http://example.com');
htmlbodyend();
htmlend();

?>