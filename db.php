<?php

$connection = mysqli_connect('localhost', 'root', 'fiap', 'eleicoes');

if(!$connection){
  die('Deu ruim' . mysql_error($connection));
}else{
  echo "Conectado";
}

 ?>
