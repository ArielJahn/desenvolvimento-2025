<?php

session_start();

if(!isset($_SESSION['email'])) {
   $_SESSION['email'] = $_POST['email'];
   $_SESSION['senha'] = $_POST['senha'];

   $_SESSION['data']  = date('Y-m-d H:i:s');
   $_SESSION['tempo'] = time();

   echo "Iniciou <br>";
}
else{
   $_SESSION['ultimo_acesso'] = date('Y-m-d H:i:s');

   echo $_SESSION['email'] . '<br>';
   echo $_SESSION['senha'] . '<br>';
   echo $_SESSION['data'] . '<br>';
   echo $_SESSION['tempo'] . '<br>';
   echo $_SESSION['ultimo_acesso'] . '<br>';
}

echo "<a href='acesso.php'>Acessar</a>";  
// header('Location: acesso.php');