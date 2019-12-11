<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="tablice.css">
    <title>Tablica - tabela</title>
  </head>
  <body>

    <?php
    $data = array(

      "name"=>"Janusz",
      "surname"=>"nowak",
      "age"=>20,
      "city"=>"poznan"
    );
    echo "<table>";
    echo "<tr><th>klucz</th><th>wartosc</th></tr>";

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
      echo "<tr><td>$key</td><td> $value</td>";
    }
    echo "</table>"
     ?>
  </body>
</html>
