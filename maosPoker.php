<?php
require_once 'cartas.php';

// Combinações de mãos de poker em ranking
$combinacoes = array(
    'Royal Flush' => array(
      new Carta('A', 'copas'),
      new Carta('K', 'copas'),
      new Carta('Q', 'copas'),
      new Carta('J', 'copas'),
      new Carta('10', 'copas')
    ),
    'Straight Flush' => array(
      new Carta('5', 'espadas'),
      new Carta('6', 'espadas'),
      new Carta('7', 'espadas'),
      new Carta('8', 'espadas'),
      new Carta('9', 'espadas')
    ),
    'Quadra' => array(
      new Carta('K', 'ouros'),
      new Carta('K', 'copas'),
      new Carta('K', 'espadas'),
      new Carta('K', 'paus'),
      new Carta('5', 'ouros')
    ),
    'Full House' => array(
      new Carta('K', 'ouros'),
      new Carta('K', 'copas'),
      new Carta('K', 'espadas'),
      new Carta('5', 'ouros'),
      new Carta('5', 'copas')
    ),
    'Flush' => array(
      new Carta('2', 'copas'),
      new Carta('4', 'copas'),
      new Carta('7', 'copas'),
      new Carta('9', 'copas'),
      new Carta('10', 'copas')
    ),
    'Sequência' => array(
      new Carta('3', 'ouros'),
      new Carta('4', 'espadas'),
      new Carta('5', 'copas'),
      new Carta('6', 'paus'),
      new Carta('7', 'ouros')
    ),
    'Trinca' => array(
      new Carta('K', 'ouros'),
      new Carta('K', 'copas'),
      new Carta('K', 'espadas'),
      new Carta('5', 'ouros'),
      new Carta('7', 'paus')
    ),
    'Dois Pares' => array(
      new Carta('K', 'ouros'),
      new Carta('K', 'copas'),
      new Carta('5', 'ouros'),
      new Carta('5', 'copas'),
      new Carta('7', 'paus')
    ),
    'Par' => array(
      new Carta('K', 'ouros'),
      new Carta('K', 'copas'),
      new Carta('5', 'ouros'),
      new Carta('7', 'paus'),
      new Carta('2', 'espadas')
    ),
    'Carta Alta' => array(
      new Carta('K', 'ouros'),
      new Carta('7', 'copas'),
      new Carta('5', 'ouros'),
      new Carta('4', 'paus'),
      new Carta('2', 'espadas')
    )
);

// Função para identificar as cartas essenciais para cada combinação
function getEssenciais($mao) {
  switch (count(array_unique(array_map(function($carta) {
    return $carta->getValor();
  }, $mao)))) {
    case 2: // Par
      return array_filter($mao, function($carta) use ($mao) {
        return count(array_filter($mao, function($c) use ($carta) {
          return $c->getValor() == $carta->getValor();
        })) > 1;
      });
    case 3: // Trinca
      return array_filter($mao, function($carta) use ($mao) {
        return count(array_filter($mao, function($c) use ($carta) {
          return $c->getValor() == $carta->getValor();
        })) > 2;
      });
    case 4: // Quadra
      return array_filter($mao, function($carta) use ($mao) {
        return count(array_filter($mao, function($c) use ($carta) {
          return $c->getValor() == $carta->getValor();
        })) > 3;
      });
    default:
      return $mao;
  }
}

// Exibir as combinações de mãos de poker em ranking
echo "<table border='1'>";
echo "<tr><th>Combinação</th><th>Cartas</th></tr>";
foreach ($combinacoes as $nome => $mao) {
  echo "<tr><td>{$nome}</td>";
  echo "<td>";
  foreach ($mao as $carta) {
    if (in_array($carta, getEssenciais($mao))) {
      echo "<b>". $carta->getImagem(). "</b>";
    } else {
      echo $carta->getImagem();
    }
  }
  echo "</td></tr>";
}
echo "</table>";