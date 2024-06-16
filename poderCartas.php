<?php
// Incluir o arquivo cartas.php
require_once 'cartas.php';

// Criar um array com os valores das cartas
$valores = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');

// Criar um array com os naipes das cartas
$naipes = array('copas', 'espadas', 'ouros', 'paus');

// Criar um array para armazenar as cartas únicas
$cartas_unicas = array();

// Loop para cada valor de carta
foreach ($valores as $valor) {
  // Selecionar um naipe aleatório
  $naipe_aleatorio = $naipes[rand(0, 3)];
  
  // Criar uma carta única com o valor e naipe aleatório
  $carta_unica = new Carta($valor, $naipe_aleatorio);
  
  // Adicionar a carta única ao array
  $cartas_unicas[] = $carta_unica;
}

// Ordenar as cartas em ordem decrescente
usort($cartas_unicas, function($a, $b) {
  $ordem_forca = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
  $indice_a = array_search($a->getValor(), $ordem_forca);
  $indice_b = array_search($b->getValor(), $ordem_forca);
  return $indice_b <=> $indice_a;
});

?>
<html>
<head>
  <title>Ordem das Cartas</title>
  <style>
@media only screen and (max-width: 768px) {
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    table-layout: fixed;
  }
  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    width: 25%; /* Ajuste para 4 colunas */
    white-space: nowrap;
    
  }
}
  </style>
</head>
<body>
  <table>
    <?php
    $chunks = array_chunk($cartas_unicas, 3);
    foreach ($chunks as $chunk) {
  ?>
    <tr>
      <?php foreach ($chunk as $carta) {?>
        <td>
          <div class="nome"><?= $carta->getNome()?></div>
          <?= $carta->getImagem()?>
        </td>
      <?php }?>
    </tr>
    <?php
    // Adicionar linhas vazias se necessário
    if (count($chunks) < 5) {
      for ($i = count($chunks); $i < 5; $i++) {
        echo '<tr><td colspan="4">&nbsp;</td></tr>';
      }
    }
    }?>
  </table>
</body>
</html>