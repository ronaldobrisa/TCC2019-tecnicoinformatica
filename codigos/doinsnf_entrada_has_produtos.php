<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "INSERT INTO nf_entrada_has_produtos
      VALUES (0,'$_POST[id_cadastro_produto]',
      $_POST[qtde_entrada_produto]',      
      $_POST[valor_unitario]')"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
include ('closereload.inc.php');
else echo "Erro ao inserir o registro. Provavelmente o registro já está cadastrado";
?>