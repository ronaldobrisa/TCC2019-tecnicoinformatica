<?php
//session_start();
//include('verifica_login.php');
?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Lista de fornecedores</title>
 
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<script type="text/javascript"> 

function delRecord(id) {   
     var teste = confirm("Tem certeza que deseja excluir o registro?");   
     if (teste==false) {
     	       window.location = "listfornecedores.php";
            } 
     else window.location = "dodelfornecedores.php?cod="+id;
 }
 function altnewindow(id) {
	  openwindow = window.open("altfornecedores.php?cod="+id, "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0);
		} 
function insnewindow() {
	  openwindow = window.open("insfornecedores.php", "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0)
		}

</script>

<?php
//## Aqui abre a sess�o do usuario e insere o nome na head da lista ## 
//$usersession .= "User :".$_SESSION['usuario'];
//$tablename = "Lista de Usu�rios";
?>			 

<!-- Inicio do Cabe�alho -->

</head>
<body>
<table id="data">
<thead>
 <!-- Nome das colunas no cabe�alho altere conforme os campos da tabela --> 
 <tr> 
   <th>id_cad_fornec </th>  
   <th>nome_fantasia </th>  
   <th> cpf_fornec </th>
   <th> cnpj_fornec </th>
   <th> data_cadastro </th>  
   <th> rua_fornec </th> 
   <th> num_fornec </th> 
   <th> bairro_fornec </th> 
   <th> uf_fornec </th> 
   <th> compl_rua_fornec </th> 
   <th> cpf_login </th> 
   <th> telefone1 </th> 
   <th> telefone2 </th>  
   <th> Excluir </th>  
   <th> Alterar </th>
 </tr>
 </thead>
 <tbody>
<?php
// ## abre a sess�o ##
//session_start(); 

// ## Abre a conex�o com a database
include ('conexao.php');
// ## Faz o select na tabela fornecedores
$sql="SELECT * FROM fornecedores";
// ### Consulta na tabela e armazena as informa��oes na $query
$query = mysqli_query($conexao,$sql);
// inicio do while para preenchimento da linhas da tabela na array $linha  ###
while ($linha = mysqli_fetch_array($query)) {
 	 echo "<tr>"
 	 // ## chama a array $linha e os conteudos pelo nome dos campos 
 	 echo "<td style='text-align:center'>$linha[id_cadastro_fornecedor]</td>";
 	 echo "<td>$linha[nome_fantasia]</td>";
 	 echo "<td>$linha[cpf_fornecedor]</td>";
 	 echo "<td>$linha[cnpj_fornecedor]</td>";
 	 echo "<td>$linha[data_cadastro]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[rua_fornecedor]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[num_fornecedor]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[bairro_fornecedor]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[uf_fornecedor]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[complemento_rua_fornec]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[cpf_login]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[telefone1]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<td>$linha[telefone2]</td>";	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:delRecord(".$linha['id_cadastro_fornecedor'].");'>X</a>";
 	 echo "</td>";
 	 echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:altnewindow(".$linha['id_cadastro_fornecedor'].");'>";
 	 echo "<img src='imagens/edit.png' border='0' width='16' height='16' /></a>";
 	 echo "</td>";
 	 echo "</tr>\n";
 	 }
 	 ?>
</tbody> 	 
</table>
<!-- 	 ## Opcional caso queiro chamar uma nova tela ou formul�rio -->
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