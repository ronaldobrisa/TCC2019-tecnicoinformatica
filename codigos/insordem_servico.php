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
<form action="doinsordem_servico.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra uma nova ordem_servico</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="login_cpf">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="descricao_ordem_servico">descricao_ordem_servico:</label>
		<input name="descricao_ordem_servico" size="25" id="descricao_ordem_servico"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="data_solic_ordem_servico">data_solic_ordem_servico:</label>
		<input name="data_solic_ordem_servico" size="25" id="data_solic_ordem_servico"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="status_ordem_servico">status_ordem_servico:</label>
		<input name="status_ordem_servico" size="25" id="status_ordem_servico"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="id_responsavel_tecnico">id_responsavel_tecnico:</label>
		<input name="id_responsavel_tecnico" size="25" id="id_responsavel_tecnico"  type="text" class="campos02" value=""/>
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
