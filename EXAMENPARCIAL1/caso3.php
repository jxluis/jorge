<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario de Empleados</title>
    <link rel="stylesheet" href="/estilo.css">
</head>
</style>
</head>
<body>
<h1>Calculadora de Newsletter</h1>
<div>
  <label for="numEmails">Número de emails a enviar:</label>
  <input type="number" id="numEmails" min="0">
</div>
<div>
  <label for="seguro">¿Desea seguro por mensaje? (S/ 0.1 por mensaje)</label>
  <input type="checkbox" id="seguro">
</div>
<button onclick="calcularPrecio()">Calcular Precio</button>
<div id="resultado"></div>
<script>
function calcularPrecio() {
  var numEmails = parseInt(document.getElementById('numEmails').value);
  var seguro = document.getElementById('seguro').checked;
  var precioPorEmail;

  if (isNaN(numEmails) || numEmails < 0) {
    document.getElementById('resultado').innerText = "Por favor, introduzca un número válido de emails.";
    return;
  } else if (numEmails <= 2000) {
    precioPorEmail = 0;
  } else if (numEmails <= 10000) {
    precioPorEmail = 0.7;
  } else {
    precioPorEmail = 0.2;
  }

  var precioUnitario;
  
  if (numEmails <= 2000) {
    precioUnitario = "S/ 0.0 por email";
  } else if (numEmails <= 10000) {
    precioUnitario = "S/ 0.7 por email";
  } else {
    precioUnitario = "S/ 0.2 por email";
  }

  var precioTotal = numEmails * precioPorEmail;
  
  if (seguro) {
    precioTotal += numEmails * 0.1;
  }

  document.getElementById('resultado').innerText = "Precio total: S/ " + precioTotal.toFixed(2) + " (" + precioUnitario + ")";
}
</script>
</body>
</html>