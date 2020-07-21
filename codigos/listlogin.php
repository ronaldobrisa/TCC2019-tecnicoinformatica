<?php
//session_start();
//include('verifica_login.php');
?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Lista de login</title>
 
<link rel="stylesheet" type="text/css" href="../css/main.css" />

<script type="text/javascript"> 

function delRecord(id) {   
     var teste = confirm("Tem certeza que deseja excluir o registro?");   
     if (teste==false) {
     	       window.location = "listlogin.php";
            } 
     else window.location = "dodellogin.php?cod="+id;
 }
 function altnewindow(id) {
	  openwindow = window.open("altlogin.php?cod="+id, "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
	  testwindow.moveTo(0,0);
		} 
function insnewindow() {
	  openwindow = window.open("inslogin.php", "mywindow","location=1, status=1, scrollbars=1, width=600, height=700");
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
   <th> login_cpf </th>
   <th> categ_usuario </th>
   <th> nivel_usuario </th>  
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
$sql="SELECT * FROM login";
// ### Consulta na tabela e armazena as informaçãoes na $query
$query = mysqli_query($conexao,$sql);
// inicio do while para preenchimento da linhas da tabela na array $linha  ###
while ($linha = mysqli_fetch_array($query)) {
 	 echo "<tr>";
 	 // ## chama a array $linha e os conteudos pelo nome dos campos 
 	 echo "<td style='text-align:center'>$linha[login_cpf]</td>";
 	 echo "<td>$linha[categ_usuario]</td>";
 	 echo "<td>$linha[nivel_usuario]</td>";
 	
 	 //echo "<td style='text-align:center'>";
 	 
 	 //echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:delRecord(".$linha['login_cpf'].");'>X</a>";
 	 echo "</td>";
 	 echo "<td style='text-align:center'>";
 	 echo "<a href='javascript:altnewindow(".$linha['login_cpf'].");'>";
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