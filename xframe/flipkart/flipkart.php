<?php
$content = file_get_contents('http://www.flipkart.com');
$content = str_replace('</title>','</title><base href="http://www.flipkart.com"  target="_top"/>', $content);
echo $content;


echo "
<style>

#hplogo{display:none;}
#pmocntr2{display:none;}

#lga{
	background-image:url(http://desk.cybrhome.com/widgets/about/logo.png);
	background-repeat:no-repeat;
	background-position:center;
	height:200px;
	}

/*
body > * {visibility:hidden;}
.ds,.gstl_50 gssb_c{visibility:visible !important;}
*/

</style>
";


?>