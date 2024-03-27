<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nota Fiscal</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }
  .container {
    width: 800px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
    padding: 30px;
  }
  h1 {
    font-style: italic;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
  }
  .invoice-details {
    border-top: 2px solid #333;
    padding-top: 20px;
    margin-top: 20px;
  }
  .invoice-details h3 {
    margin: 10px 0;
  }
  .invoice-details table {
    width: 100%;
    border-collapse: collapse;
  }
  .invoice-details th,
  .invoice-details td {
    padding: 8px;
    border-bottom: 1px solid #ccc;
    text-align: left;
  }
  .invoice-details th {
    background-color: #f2f2f2;
  }
  .total {
    margin-top: 20px;
    text-align: right;
  }
</style>
</head>
<body>
<div class="container">
  <h1>Nota Fiscal</h1>
  <div class="invoice-details">
    <h3>Dados do Cliente:</h3>
    <?php
    $NomeCliente = $_POST['nomeCliente'];
    $NomeProduto1 = $_POST['primeiroProduto'];
    $NomeProduto2 = $_POST['segundoProduto'];
    $Valor1 = $_POST['valor1'];
    $Valor2 = $_POST['valor2'];
    $ValorPago = $_POST['valorPago'];
 
    $ValorTotal = $Valor1 + $Valor2;
    $Troco = $ValorPago - $ValorTotal;
 
    echo "<p><strong>Nome do Cliente:</strong> $NomeCliente</p>";
    ?>
    <h3>Produtos:</h3>
    <table>
      <tr>
        <th>Nome do Produto</th>
        <th>Valor</th>
      </tr>
      <tr>
        <td><?php echo $NomeProduto1; ?></td>
        <td>R$ <?php echo $Valor1; ?></td>
      </tr>
      <tr>
        <td><?php echo $NomeProduto2; ?></td>
        <td>R$ <?php echo $Valor2; ?></td>
      </tr>
    </table>
    <div class="total">
      <p><strong>Total:</strong> R$ <?php echo $ValorTotal; ?></p>
      <p><strong>Valor Pago:</strong> R$ <?php echo $ValorPago; ?></p>
      <p><strong>Troco:</strong> R$ <?php echo $Troco; ?></p>
    </div>
  </div>
</div>
</body>
</html>
