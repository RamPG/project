<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

require_once 'funcs.php';

if (!empty($_POST))
{
  $message = save_message();
  header("Location: {$_SERVER['PHP_SELF']}");
}

?>

<!DOCTYPE html>
<html lang="en">

 <head>
   <title>Guest Book</title>
   <meta charset="utf-8">
 </head>

 <body>
  <form action="index.php" method="post">
  	<p>Ваше имя:</p>
  	<input type="text" name="name">

  	<p>Ваша фамилия:</p>
  	<input type="text" name="surname">

  	<p>Ваш отзыв:</p>
  	<textarea name="text" rows="7" cols="30"></textarea>

  	<br>
  	<input type="Submit" value="Отправить">
    <br>
    <?php 
      if (!empty(output_message()))
      {
        foreach(output_message() as $key => $value)
        {
          if (!empty($value))
          {
          $data = explode(" | ", $value); 
          echo "Имя: ", $data[0], " Фамилия: ", $data[1], " Дата: ", $data[3], "<br>";
          echo $data[2], "<br>";
          }
      } 
      }
    ?>


  </form>
 </body> 
 
</html>