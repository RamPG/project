<?php  
  function save_message()
  {
    $data = $_POST["name"] . " | " . $_POST["surname"]  . " | " . $_POST["text"]  . " | " . date("Y-M-D H:i:s") . "\r\n";
    file_put_contents("book.txt", $data, FILE_APPEND);
  }
  function output_message()
  {
    if(!empty(file_get_contents("book.txt")))
    {
      $str = file_get_contents("book.txt");
      return explode("\r\n", $str);
    }

  }
?>