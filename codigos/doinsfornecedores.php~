<?php 
# Inclui o arquivo de conexão
include ('conexao.php');  
# comando SQL do banco 
$sql = "INSERT INTO fornecedores
      VALUES (0,'$_POST[nome_fantasia]',
      '$_POST[cpf_fornecedor]',
      '$_POST[cnpj_fornecedor]',
      '$_POST[data_cadastro]' ,
      '$_POST[rua_fornecedor]',
      '$_POST[num_fornecedor]',
      '$_POST[bairro_fornecedor]',
      '$_POST[uf_fornecedor]',
      '$_POST[complemento_rua_fornec]',
      '$_POST[cpf_login]',
      '$_POST[telefone1]',
      '$_POST[telefone2]')"; 
# Executa a consulta da variável
$query = mysqli_query($conexao,$sql);
if ($query) 
include ('closereload.inc.php');
else echo "Erro ao inserir o registro. Provavelmente o registro já está cadastrado";
?>