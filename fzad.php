<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" value="imie"> podaj imie <br>
      <input type="text" name="nazwisko" placeholder="nazwisko"> podaj nazwisko <br>
      <input type="radio" name="kraj" value="p">polska
      <input type="radio" name="kraj" value="n"> niemcy
      <input type ="radio" name="kraj" value="u"> usa<br>
      <input type="submit" name="button" value="zatwierdz">
    </form>
    <?php
    if( !empty($_POST['kraj'])&& !empty($_POST['imie']) && !empty($_POST['nazwisko'])){
      $kraj=$_POST['kraj'];
      $imie=$_POST['imie'];
      $nazwisko=$_POST['nazwisko'];

    switch ($kraj) {
      case 'p':
        $kraj ='polska';
        break;
      case 'n':
      $kraj ='niemcy';
      break;
      case 'u':
      $kraj ='usa';
      break;
    }
    echo "kraj: $kraj , imie: $imie , nazwisko: $nazwisko";
}
     ?>
     <table>
       <th>kraj</th><th>imie</th><th>nazwisko</th>
       <tr>
       <td><?php echo  $kraj ?></td> <td><?php echo  $imie ?></td> <td><?php echo  $nazwisko ?></td>
       </tr>
     </table>
  </body>
</html>
