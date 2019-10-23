<?php

echo " mam na imie szymon <hr>";
$liczba=10;
echo $liczba,'<br>';
echo gettype($liczba),'<hr>';

echo " typy liczbowe ";
$hex= 0xAF;
$oct= 032;
$bin= 0b1010;
echo " <br> hexalnie $hex <br> octalnie $oct  <br> binarnie  $bin <br>";
echo $bin>>2, '<br>';
echo $bin<<2,'<hr>';
echo "dane PHP_ <br>";
echo PHP_VERSION,'<br>';
echo PHP_INT_SIZE,'<br>';
echo PHP_OS,'<hr>';
echo "dane SERVER[' '] <br>";
echo $_SERVER['SERVER_NAME'],'<br>';
echo $_SERVER['SERVER_PROTOCOL'],'<br>';
echo $_SERVER['SERVER_PORT'],'<br>';
echo $_SERVER['SCRIPT_NAME'],'<br>';
echo $_SERVER['DOCUMENT_ROOT'],'<hr>';
echo "__cos__ <br>";
echo __LINE__,'<br>';
echo __FILE__,'<br>';
echo __DIR__,'<hr>';
include './1.php';
echo "string <br>";
$text='JaNusZ';
echo $text,'<br>';
echo strtolower($text),'<br>';
echo strtoupper($text),'<br>';
$zdanie='witam mam na imie szymon';
echo ucfirst($zdanie),'<br>';
echo ucwords($zdanie),'<br>';
$l= "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
laboris nisi ut aliquip ex ea commodo consequat. Duis ";
echo wordwrap($l,30,'<br>'),'<hr>';
echo "strlen anna <br>";
$imie ='   anna ';
echo strlen($imie),'<br>';
echo strlen(ltrim($imie)),'<br>';
echo strlen(rtrim($imie)),'<br>';
echo strlen(trim($imie)),'<hr>';
echo "strstr <br>";
echo strstr('witaaaaam','a'),'<br>';
echo strstr('witaaaam','a',true),'<hr>';
echo "strpos <br>";
echo strpos('halooo','lo');
echo strpos('witam','paj');
echo "str_replace <br>";
echo str_replace('imie','janek','mam na imie');















 ?>
