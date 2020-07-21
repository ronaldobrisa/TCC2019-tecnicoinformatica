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
<form action="doinsservicos_has_ordem_servico.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastra um novo servico_has_ordem_servico</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="id_ordem_servico">id_ordem_servico:</label>
		<input name="id_ordem_servico" size="25" id="id_ordem_servico" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="qtde_horas_tecnicas">qtde_horas_tecnicas:</label>
		<input name="qtde_horas_tecnicas" size="25" id="qtde_horas_tecnicas"  type="text" class="campos02" value=""/>
	</li>
	<li>
		<label for="custo_horas_tecnica">custo_horas_tecnica:</label>
		<input name="custo_horas_tecnica" size="25" id="custo_horas_tecnica"  type="text" class="campos02" value=""/>
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
