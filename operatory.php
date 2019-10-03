<?php
// operatory rzutowania
// bool , int ,float , string array object unset

$text ='123abc';
$text1 =10;

$x = (int)$text;
echo "$x <br>";

$x1 =(bool)$text1;
echo "$x1","<br>"; //1 ==> true false
$x2 =(unset)$text2;
echo "$x2","<br>";
echo gettype($x2),"<br>"; //null

//rozmiar typu intiger
echo PHP_INT_SIZE; //
//kontorola typu zmiennych


//@ operator ignorownia błędow
$w;
echo @gettype ($w),'<hr>'; //NUll

//zmienne superglobalne
// $_GET , $_POST, $_COOKIE , $_FILES, $_SESSION , $_SERVER

 echo $_SERVER['SERVER_PORT'],'<br>'; //80
 echo $_SERVER['SERVER_NAME'],'<br>'; //127.0.0.1
 echo $_SERVER['SCRIPT_PORT'],'<br>'; // MIEJSCE PLIKOW
 echo $_SERVER['SERVER_PROTOCOL'],'<br>'; //HTDOCS

//$localfile = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']
$localfile = $_SERVER ['DOCUMENT_ROOT'];
$localfile = $_SERVER ['SCRIPT_NAME'];

 echo $localfile,'<hr>';
#################################################################
//stale
//nazwy stałych z dużych liter !!!

define  ('NAME','KOWAL');
echo NAME,'<br>';

define  ('surname','Kowalska');
echo surname,'<br>';

define  ('NAME1','nowak');
echo NAME1,'<br>';


//stałe predifiniowane

echo PHP_VERSION;
echo gettype(PHP_VERSION); //string

if (PHP_VERSION > 7.1)
{
  echo "nowa wersja php";
}{
  echo "stara wersja php",'<br>';
}

echo PHP_OS, '<br>'; //win
echo __LINE__; //wyswietli ilosc lini
echo __FILE__;
echo __DIR__; //wyswietli sciezke




















?>
