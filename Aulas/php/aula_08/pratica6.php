<?php
$dadosDisciplinas = [
   ["Disciplina" => "Matemática",      "Faltas" => 5,  "Média" => 8.5],
   ["Disciplina" => "Português",       "Faltas" => 2,  "Média" => 9.0],
   ["Disciplina" => "Geografia",       "Faltas" => 10, "Média" => 6.0],
   ["Disciplina" => "Educação Física", "Faltas" => 2,  "Média" => 8.0]
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title>Prática 6 - Final</title>
</head>

<body>

   <h1>Prática 6 - Final</h1>

   <table border="1" style="border-collapse: collapse; width: 50%;">

      <tr>
         <th>Disciplina</th>
         <th>Faltas</th>
         <th>Média</th>
      </tr>

      <?php
      foreach ($dadosDisciplinas as $disciplina):
      ?>

         <tr>
            <td><?= $disciplina['Disciplina'] ?></td>
            <td><?= $disciplina['Faltas'] ?></td>
            <td><?= $disciplina['Média'] ?></td>
         </tr>

      <?php
      endforeach;
      ?>

   </table>

</body>

</html>