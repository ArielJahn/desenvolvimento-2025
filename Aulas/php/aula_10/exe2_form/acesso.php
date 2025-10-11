<?php

session_start();

if (isset($_SESSION['email']) && isset($_SESSION['tempo'])) {
   $duracao = time() - $_SESSION['tempo'];

   echo "<h1>Dados da Sessão</h1>";
   echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION['email']) . "</p>";
   echo "<p><strong>Data de Início:</strong> " . $_SESSION['data'] . "</p>";
   echo "<p><strong>Duração da Sessão:</strong> " . $duracao . " segundos</p>";

   session_destroy();

   echo '<br><a href="index.html">Voltar ao login</a>';
} 
else {
   echo "Os dados da sessão foram perdidos.";
   echo '<br><a href="index.html">Voltar ao login</a>';
}
