<?php
//session_start();
//include('verifica_login.php');
?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Lista de boletos</title>
 
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<script type="text/javascript"> 

function delRecord(id) {   
     var teste = confirm("Tem certeza que deseja excluir o registro?");   
     if (teste==false) {
     	       window.location = "listboletos.php";
            } 
     else window.location = "dodelboletos.php?cod="+id;
 }
 function altnewindow(id) {
	  openwindow = window.open("altboletos.php?cod="+id, "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0);
		} 
function insnewindow() {
	  openwindow = window.open("insboletos.php", "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0)
		}

</script>

<?php
//## Aqui abre a sessão do usuario e insere o nome na head da lista ## 
//$usersession .= "User :".$_SESSION['usuario'];
//$tablename = "Lista de Usuários";
?>			 

<!-- Inicio do Cabeçalho -->

</head>
<body>
<table id="data">
<thead>
 <!-- Nome das colunas no cabeçalho altere conforme os campos da tabela --> 
 <tr> 
   <th>id_boleto </th>  
   <th>login_cpf </th>  
   <th> valor_total_boleto </th>
   <th> data_pagamento </th>
   <th> valor_pagamento </th>  
   <th> num_nota_fiscal </th> 
   <th> Excluir </th>  
   <th> Alterar </th>
 </tr>
 </thead>
 <tbody>
<?php
// ## abre a sessão ##
//session_start(); 

// ## Abre a conexão com a database
include ('conexao.php');
// ## Faz o select na tabela fornecedores
$sql="SELECT * FROM boletos";
// ### Consulta na tabela e armazena as informaçãoes na $query
$query = mysqli_query($conexao,$sql);
// inicio do while para preenchimento da linhas da tabela na array $linha  ###
while ($linha = mysqli_fetch_array($query)) {
 	 echo "<tr>";
 	 // ## chama a array $linha e os conteudos pelo nome dos campos 
 	 echo "<td style='text-align:center'>$linha[id_boleto]</td>";
 	 echo "<td>$linha[login_cpf]</td>";
 	 echo "<td>$linha[valor_total_boleto]</td>";
 	 echo "<td>$linha[data_pagamento]</td>";
 	 echo "<td>$linha[valor_pagamento]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[num_nota_fiscal]</td>";	 
 	 echo "<a href='javascript:delRecord(".$linha['id_boleto'].");'>X</a>";
 	 echo "</td>";
 	 echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:altnewindow(".$linha['id_boleto'].");'>";
 	 echo "<img src='imagens/edit.png' border='0' width='16' height='16' /></a>";
 	 echo "</td>";
 	 echo "</tr>\n";
 	 }
 	 ?>
</tbody> 	 
</table>
<!-- 	 ## Opcional caso queiro chamar uma nova tela ou formulário -->
 	 <table id=> 
 	   <tr>
      <!-- <td style='text-align:center'><a href="adm.php" title="Volta a tela principal"> <img src='imagens/Voltar.png' border='0' width='20' height='20' /></a></td> -->
       <td style='text-align:center'><a href="javascript:insnewindow()" title="Novo registro"> <img src='imagens/novo.png' border='0' width='20' height='20' /></a></td>
      </tr>
 	 </table>
 	  	 
<footer>
   <?php // include("footer_copyright.inc.php");?> 
</footer>	 
</body>
</html>