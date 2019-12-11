
<?php
// tablicz indeksowana numerycznie
$colors = array("red","green","blue","magenta");
//echo $colors[1];
for($i=0;$i<count($colors);$i++){
  echo $colors[$i],' ';
}
$colors[2]="cyan";
echo "<br>";
function show($colors){
  echo "<ul>";
  for($i=0;$i<count($colors);$i++)
  {
    echo "<li>",$colors[$i],"</li>";
  }
  echo "</ul>";
}
echo show($colors);
echo "<hr>";
// tablica asocjacyjna

$data = array(

  "name"=>"Janusz",
  "surname"=>"nowak",
  "age"=>20,
  "city"=>"poznan"
);

//echo "imie:" ,$data['name']; jezeli jest czudyslow to bez '' w name
echo "imie: $data[name]<br>";
foreach ($data as $value) {
  echo "$value ";
}
echo "<br>";
foreach ($data as $key=> $value) {
  switch ( $key) {
    case 'name':
    $key="imie";
      break;
    case 'surname':
    $key="nazwisko";
      break;
    case 'age':
    $key="wiek";
      break;
    case 'city':
    $key="miasto";
      break;

  }
  echo "$key: $value <br>";
}









 ?>
