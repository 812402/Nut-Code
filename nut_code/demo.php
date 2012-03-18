<?php

include 'parser.php';

$hi = '!:http://goattech.com/:! @:nut_code.png:@ #:hi!:# .:hi!:. %:hi!:% ~green:hi!:~ -::-';

$my  = nut_parser($hi);

echo $my;

?>