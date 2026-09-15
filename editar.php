<?php

include("conexao.php"); 
$id = $_GET["id"];

$sql = "SELECT * FROM alunos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql); 

$aluno = mysqli_fetch_array($resultado);

?>

<h1>Editar </h1>

<form action="" method="post">
     <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
     Nome
     <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>">
     Idade
        <input type="number" name="idade" value="<?php echo $aluno['idade']; ?>">
        <br><br>
        <button >Salvar</button>
</form>

