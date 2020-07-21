<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "INSERT INTO servicos
      VALUES (0,'$_POST[codigo_servicos]',
      $_POST[descricao_servico]')"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
include ('closereload.inc.php');
else echo "Erro ao inserir o registro. Provavelmente o registro já está cadastrado";
?>