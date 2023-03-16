<?php

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $user = $_POST["func"];
    $pull = "./senha.txt";
    $arquivo = fopen($pull, 'r');
      
      $json = fread($arquivo, filesize($pull));
  
      fclose($arquivo);
  
      $json = json_decode($json);
      $value = count($json);
      $value2 = ($value-1);
      $soma = 0;
        
        while ($soma <= $value2) {
              if ($email == $json[$soma]->login && $senha == $json[$soma]->senha && $user == $json[$soma]->funcao) {
                header("Location: sucess.html");
                break;
              }
              else {
                $soma++;
              }
            header("Location: fail.html");
        }
?>