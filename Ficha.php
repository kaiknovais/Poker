<!DOCTYPE html>
<html>
<head>
	<title>Valores de Fichas de Poker</title>
	<style>
  /* Estiliza a tabela */
  table {
    border-collapse: collapse;
    width: 100%;
    background-color: #333; /* cor noturna */
    font-family: Arial, sans-serif; /* fonte Arial */
  }
  
  th, td {
    border: 1px solid #CCCCCC;
    padding: 10px;
    text-align: center;
    color: #fff; /* texto branco */
    font-weight: bold; /* negrito */
    font-size: 24px; /* aumenta o tamanho do texto */
  }
  
  /* Estiliza os tokens */
 .token {
    display: inline-block;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: 5px;
    font-size: 30px; /* aumenta o tamanho do texto */
    font-weight: bold;
    text-align: center;
    line-height: 60px;
    padding: 2px; /* add 10px padding before the border */
  }
  
 .token-branca {
    background-color: #FFFFFF;
    border: 8px dashed #0000FF; /* dashed line azul */
    outline: 2px solid #464646; /* borda preta */
    color: #212121;
  }
  
 .token-vermelha {
    background-color: #FF0000;
    border: 8px dashed #FFFFFF; /* dashed line branca */
    outline: 2px solid #464646; /* borda preta */
    color: #212121;
  }
  
 .token-verde {
    background-color: #00FF00;
    border: 8px dashed #FFFFFF; /* dashed line branca */
    outline: 2px solid #464646; /* borda preta */
    color: #212121;
  }
  
 .token-azul {
    background-color: #0000FF;
    border: 8px dashed #FFFFFF; /* dashed line branca */
    outline: 2px solid #464646; /* borda preta */
    color: #212121;
  }
  
 .token-preta {
    background-color: #000000;
    border: 8px dashed #FFFFFF; /* dashed line branca */
    outline: 2px solid #464646; /* borda preta */
    color: #FFD700; /* texto em dourado */
  }
  
  body{
    background-color: #333; /* cor noturna */
    color: #fff; /* texto branco */
    font-family: Arial, sans-serif; /* fonte Arial */
  }
</style>
</head>
<body>
	<table>
  <tr>
    <th colspan="2">Valores de Fichas de Poker</th>
  </tr>
  <tr>
    <td><span class="token token-borda token-branca">5</span></td>
    <td style="font-size: 20px;">Branca</td>
  </tr>
  <tr>
    <td><span class="token token-borda token-vermelha">10</span></td>
    <td style="font-size: 20px;">Vermelha</td>
  </tr>
  <tr>
    <td><span class="token token-borda token-verde">20</span></td>
    <td style="font-size: 20px;">Verde</td>
  </tr>
  <tr>
    <td><span class="token token-borda token-azul">50</span></td>
    <td style="font-size: 20px;">Azul</td>
  </tr>
  <tr>
    <td><span class="token token-borda token-preta">100</span></td>
    <td style="font-size: 20px;">Preta</td>
  </tr>
</table>
</body>
</html>