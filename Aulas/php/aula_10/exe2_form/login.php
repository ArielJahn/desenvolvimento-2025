<?php

session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
   $_SESSION['email'] = $_POST['email'];
   $_SESSION['senha'] = $_POST['senha'];

   $_SESSION['data']  = date('Y-m-d H:i:s');
   $_SESSION['tempo'] = time();

   header('Location: acesso.php');
} 
else {
   header('Location: index.html');
}
