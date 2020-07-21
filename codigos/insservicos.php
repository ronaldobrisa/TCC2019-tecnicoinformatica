<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

<!-- Link para o CSS de formulários -->
<link rel="stylesheet" type="text/css" href="../css/forms.css?v=<?php echo filemtime('css/forms.css'); ?>>"

<title></title>
</head>
<body> 
<!-- envia os dados via post para o arquivo doinsfornecedores que fará a gravação --> 
<form action="doinsservicos.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo servico</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="codigo_servicos">codigo_servicos:</label>
		<input name="codigo_servicos" size="25" id="codigo_servicos" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="descricao_servico">descricao_servico:</label>
		<input name="descricao_servico" size="25" id="descricao_servico"  type="text" class="campos02" value=""/>
	</li>
	
	<br><br>

	<li>
	   <input type="submit" id="enviar" value="Enviar" onclick="this.value='Aguarde...'" />
	</li>
	
 </ul>
</fieldset>
</form>
</body>
<footer>
   <?php
   //# faz a chamada do include do rodapé 
  // include("footer_copyright.inc.php");?> 
</footer>
</html>
