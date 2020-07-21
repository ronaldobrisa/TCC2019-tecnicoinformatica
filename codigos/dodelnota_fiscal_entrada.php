<script>
function reload() {
	window.location = "listnota_fiscal_entrada.php"; 
		} 
</script>
<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "DELETE FROM nota_fiscal_entrada
      WHERE num_nf_entrada='$_GET[cod]' limit 1"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
   echo '<script> reload() </script>'; 
else 
	echo "Erro ao apagar o registro.";
?>
