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
<form action="doinslogin.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo login</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="categ_usuario">categ_usuario:</label>
		<input name="categ_usuario" size="25" id="categ_usuario" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="nivel_usuario">nivel_usuario:</label>
		<input name="nivel_usuario" size="25" id="nivel_usuario"  type="text" class="campos02" value=""/>
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
