<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['email'];
$sexo = $_POST['msg'];
$strcon = mysqli_connect('localhost','root','','mh_nv') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO usuario VALUES ";
$sql .= "('$nome', '$email', '$msg')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
echo "<a href='formulario.html'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>