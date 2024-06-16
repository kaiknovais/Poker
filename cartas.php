<?php
// Classe Carta
class Carta {
    private $valor;
    private $naipe;
  
    public function __construct($valor, $naipe) {
      $this->valor = $valor;
      $this->naipe = $naipe;
    }
  
    public function getValor() {
      return $this->valor;
    }
  
    public function getNaipe() {
      return $this->naipe;
    }
  
    public function getNome() {
      $nome = '';
      switch ($this->valor) {
        case 'A':
          $nome = 'Ás';
          break;
        case 'K':
          $nome = 'Rei';
          break;
        case 'Q':
          $nome = 'Rainha';
          break;
        case 'J':
          $nome = 'Valete';
          break;
        default:
          $nome = $this->valor;
      }
      return
      $nome. ' de '. $this->naipe;
    }

  public function getImagem() {
    switch ($this->naipe) {
      case 'copas':
        $naipe_emoji = '<span style="color: black;">♠</span>';
        break;
      case 'espadas':
        $naipe_emoji = '<span style="color: red;">♥</span>';
        break;
      case 'ouros':
        $naipe_emoji = '<span style="color: red;">♦</span>';
        break;
      case 'paus':
        $naipe_emoji = '<span style="color: black;">♣</span>';
        break;
    }
    return "<div class='carta'>
              <span class='valor' style='color: {$this->getNaipeColor()};'>{$this->valor}</span>
              <span class='naipe'>{$naipe_emoji}</span>
            </div>";
  }

  private function getNaipeColor() {
    switch ($this->naipe) {
      case 'copas':
        return 'black';
      case 'espadas':
        return 'red';
      case 'ouros':
        return 'red';
      case 'paus':
        return 'black';
    }
  }
}

// Array com os valores das cartas
$valores = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');

// Array com os naipes das cartas
$naipes = array('copas', 'espadas', 'ouros', 'paus');

// Criar um array com todas as cartas
$cartas = array();
foreach ($valores as $valor) {
  foreach ($naipes as $naipe) {
    $cartas[] = new Carta($valor, $naipe);
  }
}

// Exibir as cartas
?>
<html>
  <head>
    <title>Cartas de Poker</title>
    <style>
     .carta {
        width: 40px;
        height: 60px;
        border: 1px solid #ccc;
        margin: 10px;
        float: left;
        background-color: #fff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        /* Adicionar estilos para telas pequenas */
        @media only screen and (max-width: 768px) {
          width: 30px;
          height: 45px;
          margin: 5px;
        }
        /* Adicionar estilos para telas médias */
        @media only screen and (min-width: 769px) and (max-width: 1024px) {
          width: 35px;
          height: 55px;
          margin: 10px;
        }
      }
     .valor {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        /* Adicionar estilos para telas pequenas */
        @media only screen and (max-width: 768px) {
          font-size: 18px;
        }
        /* Adicionar estilos para telas médias */
        @media only screen and (min-width: 769px) and (max-width: 1024px) {
          font-size: 20px;
        }
      }
     .naipe {
        font-size: 24pxfont-weight: bold;
        margin-left: 10px;
        /* Adicionar estilos para telas pequenas */
        @media only screen and (max-width: 768px) {
          font-size: 18px;
        }
        /* Adicionar estilos para telas médias */
        @media only screen and (min-width: 769px) and (max-width: 1024px) {
          font-size: 20px;
        }
      }
    </style>
  </head>
  <body>
  </body>
</html>