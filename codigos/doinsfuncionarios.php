<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "INSERT INTO funcionarios
      VALUES (0,'$_POST[nome_funcionario]',
      '$_POST[login_cpf]',
      '$_POST[data_cadastro]',
      '$_POST[cpf_funcionario]')"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
include ('closereload.inc.php');
else echo "Erro ao inserir o registro. Provavelmente o registro já está cadastrado";
?>