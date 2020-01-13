<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <h3> Dane z tabeli user </h3>
    <?php
    $conn = mysqli_connect("localhost","root","","komis"); //polaczenie z baza
    $sql = "SELECT * FROM user";
    mysqli_set_charset($conn,"utf8"); //danie polskich znakow
    $result = mysqli_query($conn,$sql); //zapytanie do bazy
    echo"<table><th>id</th><th>name</th><th>surname</th><th>city</th>";
    while($row = mysqli_fetch_assoc($result)) // petla wyswietlajaca cos z bazy
    {
      //echo $row["name"]," ",$row["surname"],"<br>";         //wypisanie imion
      echo "<tr><td>$row[id]</td> <td> $row[name]</td> <td>$row[surname]</td> <td>$row[city]</td></tr>";         //wypisanie imion
    }
 echo"</table>";




    mysqli_close($conn);
     ?>
  </body>
</html>
