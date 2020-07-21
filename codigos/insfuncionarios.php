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
<form action="doinsfuncionarios.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo funcionario</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="nome_funcionario">nome_funcionario:</label>
		<input name="nome_funcionario" size="25" id="nome_funcionario" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="login_cpf">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf"  type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="data_cadastro">data_cadastro:</label>
		<input name="data_cadastro" size="25" id="data_cadastro" type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="cpf_funcionario">cpf_funcionario:</label>
		<input name="cpf_funcionario" id="cpf_funcionario"  type="date" class="campos02" value=""/>
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
