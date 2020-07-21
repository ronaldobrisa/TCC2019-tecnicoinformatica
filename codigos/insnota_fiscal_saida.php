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
<form action="doinsnota_fiscal_saida.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra uma nova nota_fiscal_saida</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="login_cpf">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="data_emissao">data_emissao:</label>
		<input name="data_emissao" size="25" id="data_emissao"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="id_ordem_servico">id_ordem_servico:</label>
		<input name="id_ordem_servico" size="25" id="id_ordem_servico"  type="text" class="campos02" value=""/>
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
