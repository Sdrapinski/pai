<?php

$text = <<< T
zsl - zeszpol
szkol
lacznosci
T;

echo "przed wywolaniem funkcji nl2br: <br> $text <br> ";
echo "po wywoalniu funkcji nl2br: <br> ";
echo nl2br ($text),'<br>';

$text ='JAnusZ';
echo strtolower($text); // zamiana na małe litery
$duzelitery = strtoupper($text);
echo $duzelitery,'<hr>';
$text ='anna Tomasz jacek';
echo ucfirst($text),'<br>'; // pierwsza lietraz strina na duza
// zamiana wszystkich liter 1 na duze
echo ucwords($text),'<hr>';



 $Lorem=' ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo $lorem,'<hr>';

$col = wordwrap($lorem,40,'<br>');
echo $col,'<hr>';
// czyszczenie zawartosci bufora
ob_clean();

//usuwanie białych znakow
$name ='Anna';
$name1 ='   Anna  ';
echo 'dlugosc zmiennej $name',strlen($name),'<br>';//4
echo 'dlugosc zmiennej $name1: ',strlen($name1),'<br>';//9
echo strlen(ltrim($name1)); // czysci z lewej
echo strlen(rtrim($name1)),'<br>'; // czysci z prawej
echo strlen(trim($name1)),'<br>'; // czysci z obu

// przeszukiwanie znakow

$adress = 'poznan przelajowa 4 tel. (61) 123-456-789';
$search = strstr($adress,'tel'); // wyswietla od tel
echo $search, '<br>';
$search = strstr($adress,'tel',true); //do tel
echo $search, '<br>';
$search = strstr($adress,'tel'); // wyswietla od tel
echo $search, '<br>';

$mail =strstr('zsl@gmail.com', '@');
echo $mail,'<br>'; //@gmail.com

//pozycja
$pos =strpos('abcdefg','cde');
echo $pos,'<br>';//2 liczy od 2
$pos =strpos('abcdefg','ab');
echo $pos,'<br>';//0
// sprawdz czy ciag text2 zostal znaleziony w ciagu text1
$text1 ='abcdabcd';
$text2 ='ab';
if (strpos($text1, $text2) === false ) {
  echo "Ciag $text2 nie zostal znaleziony w ciagu $text2 <br>";
}
  else
  {
    echo "Ciag $text2 zostal znaleziony w ciagu $text2 <br>";
  }
  // przetwarzanie ciagow znakow
$replace =str_replace('%name%', 'Janusz', 'mam na imie %name%') ;// szukamy %name% i zamieniamy na janusz
echo $replace, '<br>';







 ?>
