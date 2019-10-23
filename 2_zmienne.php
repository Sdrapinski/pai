<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $potenga =2**10;
    echo $potenga,'<br>';
    echo PHP_VERSION,'<br>';

/*operatory bitowe
and &, or |; not ~, xor ^, <<,>> */
//zapisz systemow liczbowych
$hex =0xA;
echo $hex,'<br>';
$oct =021; //2*8^1+1*8^0
echo $oct,'<br>';
$bin =0b1010; //10
echo $bin;
 $bin=0b1010;
 $bin = $bin >> 1; //101(2) =5
 echo $bin,'<br>';
 $bin = $bin << 2; //19100(2) = 20
 echo $bin ,'<hr>';

$a =1;
$b=1.0;
if($a==$b)
{
   echo 'identyczne<br>';
 }
else
{
  echo 'rozne<br>';
}

echo gettype($a),'<br>';
echo gettype($b),'<br>';
/////////////////////////////////////////////////////////



$x =1;
$y =1;
$result =$x <=> $y; //sprawdza wartosci jak 1 jest wieksza to 1 rowne =0 prawa wieksza = -1
echo $result;

$x=2;
echo $x++; // 2
echo ++$x; //  4
echo $x; // 4
$y=$x++; //4
echo $y; // 4
$y=++$x; //6
echo $y; // 6
echo ++$y  //7









    ?>
  </body>
</html>
