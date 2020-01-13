<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styl.css">
    <title></title>
  </head>
  <body>
    <h3><br><br><center><font size="5px"> Szymon Drapiński  <br>
      PROJEKT <br>PRACOWNIA  APLIKACJI INTERNETOWYCH </h3></font>
    </center>
    <div class="front">
      <form  method="post">
        <input type="text" name="login" placeholder="podaj login "><br><br>
        <input type="password" name="haslo" placeholder="podaj haslo"><br><br>
        <input type="submit" name="przycisk" value="zaloguj">
      </form>
    </div>
    <?php
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];
    $login2="pajac";
    $haslo2="pajac";
    if($login==$login2 && $haslo==$haslo2)
  {
    header("location:strona.php");
  }



     ?>
  </body>
</html>
