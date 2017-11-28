<?php
require 'libs/simple_html_dom.php';
$html= new simple_html_dom();
$html->load_file('https://www.inf.uct.cl/');

$titles= $html->find('div[class=cont_noticia]');

foreach ($titles as $title) {
	echo $title->innertext;
	echo "___________________________________________________________________________________________________________________";

}


?>