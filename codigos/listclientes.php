<?php
//session_start();
//include('verifica_login.php');
?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Lista de clientes</title>
 
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<script type="text/javascript"> 

function delRecord(id) {   
     var teste = confirm("Tem certeza que deseja excluir o registro?");   
     if (teste==false) {
     	       window.location = "listclientes.php";
            } 
     else window.location = "dodelclientes.php?cod="+id;
 }
 function altnewindow(id) {
	  openwindow = window.open("altclientes.php?cod="+id, "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0);
		} 
function insnewindow() {
	  openwindow = window.open("insclientes.php", "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
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
   <th>id_cliente </th>  
   <th>nome_cliente </th>  
   <th> login_cpf </th>
   <th> cnpj_cliente </th>
   <th> rua_resid </th>  
   <th> bairro_resid </th> 
   <th> num_resid </th> 
   <th> uf_resid </th> 
   <th> data_nascimento </th> 
   <th> cidade_resid </th> 
   <th> data_cadastro </th> 
   <th> telefone1 </th> 
   <th> telefone2 </th>  
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
$sql="SELECT * FROM clientes";
// ### Consulta na tabela e armazena as informaçãoes na $query
$query = mysqli_query($conexao,$sql);
// inicio do while para preenchimento da linhas da tabela na array $linha  ###
while ($linha = mysqli_fetch_array($query)) {
 	 echo "<tr>";
 	 // ## chama a array $linha e os conteudos pelo nome dos campos 
 	 echo "<td style='text-align:center'>$linha[id_cliente]</td>";
 	 echo "<td>$linha[nome_cliente]</td>";
 	 echo "<td>$linha[login_cpf]</td>";
 	 echo "<td>$linha[cnpj_cliente]</td>";
 	 echo "<td>$linha[rua_resid]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[bairro_resid]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[num_resid]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[uf_resid]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[data_nascimento]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[cidade_resid]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[data_cadastro]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[telefone1]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[telefone2]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:delRecord(".$linha['id_cliente'].");'>X</a>";
 	 echo "</td>";
 	 echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:altnewindow(".$linha['id_cliente'].");'>";
 	 echo "<img src='imagens/edit.png' border='0' width='16' height='16' /></a>";
 	 echo "</td>";
 	 echo "</tr>\n";
 	 }
 	 ?>
</tbody> 	 
</table>
<!-- 	 ## Opcinal caso queiro chamar uma nova tela ou formulário -->
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