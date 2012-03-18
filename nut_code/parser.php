<?php

function nut_parser($input)
{
	
	$input = htmlentities($input);
	
	
	$search = array (
		'/\!:(.*?):!/',
		'/\@:(.*?):@/',
		'/\#:(.*?):#/',
		'/\.:(.*?):./',
		'/\%:(.*?):%/',
		'/\~(.*?):(.*?):~/',
		'/\-::-/'
		
		);
	$replace = array(
		'<a href="$1">$1</a>',
		'<img src="$1">',
		'<b>$1</b>',
		'<i>$1</i>',
		'<h1>$1</h1>',
		'<span style="color:$1">$2</span>',
		'<hr />'
		
	);
	
	return preg_replace($search, $replace, $input);
	
}
?>