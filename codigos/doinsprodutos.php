<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "INSERT INTO produtos
      VALUES (0,'$_POST[login_cpf]',
      $_POST[descricao_produto]',
      $_POST[data_entrada_produto]',
      $_POST[data_saida_estoque]',
      $_POST[qtde_entrada_produto]',
      $_POST[id_requis_saida_prod]')"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
include ('closereload.inc.php');
else echo "Erro ao inserir o registro. Provavelmente o registro já está cadastrado";
?>