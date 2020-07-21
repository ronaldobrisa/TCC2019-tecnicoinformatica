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
<form action="doinsboletos.php" method="POST" name="formulario" id="formulario">
<fieldset id="BoxForm"><legend align="center">Cadastrar boleto</legend>
 <ul> 
 <br><br>
           
	<li>
		<label for="login_cpf">login_cpf:</label>
		<input name="login_cpf" size="25" id="login_cpf" type="text" class="campos02"  value=""/>
	</li>

	<li>
		<label for="valor_total_boleto">valor_total_boleto:</label>
		<input name="valor_total_boleto" size="25" id="valor_total_boleto"  type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="data_pagamento">data_pagamento:</label>
		<input name="data_pagamento" size="25" id="data_pagamento" type="text" class="campos02" value=""/>
	</li>
	
	<li>
		<label for="valor_pagamento">valor_pagamento:</label>
		<input name="valor_pagamento" id="valor_pagamento"  type="date" class="campos02" value=""/>
	</li>
	<li>
		<label for="num_nota_fiscal">num_nota_fiscal:</label>
		<input name="num_nota_fiscal" size="25" id="num_nota_fiscal"  type="text" class="campos02" value=""/>
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
