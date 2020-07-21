<script>
function reload() {
	window.location = "listordem_servico.php"; 
		} 
</script>
<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "DELETE FROM ordem_servico
      WHERE id_ordem_servico='$_GET[cod]' limit 1"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
   echo '<script> reload() </script>'; 
else 
	echo "Erro ao apagar o registro.";
?>
