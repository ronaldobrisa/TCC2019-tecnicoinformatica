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
<form action="doinsnf_entrada_has_produtos.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra uma nova entrada_has_produtos</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="id_cadastro_produto">id_cadastro_produto:</label>
		<input name="id_cadastro_produto" size="25" id="id_cadastro_produto" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="qtde_entrada_produto">qtde_entrada_produto:</label>
		<input name="qtde_entrada_produto" size="25" id="qtde_entrada_produto"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="valor_unitario">valor_unitario:</label>
		<input name="valor_unitario" size="25" id="valor_unitario"  type="text" class="campos02" value=""/>
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
