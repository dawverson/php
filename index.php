<html>
<head>
<style>
	button, input[type=text]{
		width:100%;
		height:100%;
	}
	input[type=text]{
		text-align:right;
	}
	table{
		width:500px;
		margin: 50px auto;
	}
	td{
		width:100px;
		height:100px;
	}
</style>
<script type="text/javascript">

function agregar(valor){	
	formulario.valor2.value = valor;
	formulario.submit();
}

</script>
</head>
<body>

<form name="formulario" method="GET" action"calcular.php">
	<input type="hidden" value="0" name="valor1"/>
	<input type="hidden" value="0" name="valor2"/>
</form>

<table>
<tr>
	<td colspan="5"><input type="text" value="0" id="pantalla"/></td>
</tr>
<tr>
	<td><button onclick="agregar('7');">7</button></td>
	<td><button onclick="agregar('8');">8</button></td>
	<td><button onclick="agregar('9');">9</button></td>
	<td><button onclick="agregar('/');">/</button></td>
	<td rowspan="2"><button onclick="iniciar();">C</button></td>
</tr>
<tr>
	<td><button onclick="agregar('4');">4</button></td>
	<td><button onclick="agregar('5');">5</button></td>
	<td><button onclick="agregar('6');">6</button></td>
	<td><button onclick="agregar('*');">*</button></td>
</tr>
<tr>
	<td><button onclick="agregar('1');">1</button></td>
	<td><button onclick="agregar('2');">2</button></td>
	<td><button onclick="agregar('3');">3</button></td>
	<td><button onclick="agregar('-');">-</button></td>
	<td rowspan="2"><button onclick="iniciar();">=</button></td>
</tr>
<tr>
	<td colspan="3"><button onclick="agregar('-');">0</button></td>
	<td><button onclick="iniciar();">+</button></td>
</tr>
</table>

</body>
</html>