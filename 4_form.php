<html>
<head>

<link rel="stylesheet" href="./css/4_form.css">

</head>
<body>

<?php
if(!empty($_POST['name']) && !empty($_POST['country'])){
$name=$_POST['name'];
$country=$_POST['country'];
switch ($country) {
  case 'p':
    $country=' polska';
    break;
  case 'g':
    $country=' niemcy';
    break;
  case 'u':
    $country=' USA';
    break;


}
// prawidlowo podane dane w formularzu
echo "imie:$name, kraj:$country";
?>
<table>
  <tr>
    <th>imie</th>
    <th>kraj</th>
  </tr>
  <tr>
<td> <?php echo $name; ?> </td>
<td> <?php echo $country; ?> </td>
  </tr>
</table>
<?php
}else{
  ?>
  <form method="post">
    <input type="text" name="name" placeholder="imie"><br><br>
    <input type="radio" name="country" value="p" checked> polska
    <input type="radio" name="country" value="g">niemcy
    <input type="radio" name="country" value="u">usa <br><br>
    <input type="submit" name="button" value="zatwierdz"><br><br>
  </form>
  <?php
}
?>



</body>
</html>
