<?php
$url= 'https://www.inf.uct.cl/';
$html= file_get_html($url);

$post= $html->find('div[class=principal]');

foreach( $post as $post ){

	$link = $post->find('p a',0);
	$url = $Link->attr['href'];
	$title = $link->innertext;
	$img= $post->find('div[class=cont_imagen]',0);->attr['src'];
	echo $title,"\n",$url,"\n",$img,"\n\n";

}


?>