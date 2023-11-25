<?php

session_start();
include('conexao.php');

$cpf = $_SESSION['cpf'];

$select = "SELECT  nome, cpf, telefone FROM usuario WHERE cpf = '$cpf'";
$queryselect = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($queryselect);

$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '' ;

if($telefone <> null){
    $update = "UPDATE ususario SET telefone = '$telefone' WHERE cpf = '$cpf'";
    $queryupdate = mysqli_query($conexao, $update);
    header('location: alterardados.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form id="form-alterar" action="#" method="POST"></form>
    <table border="1px">
        <tr>
            <td>NOME</td>
            <td>CPF</td>
            <td>TELEFONE</td>
            <td>Atualizar</td>
        </tr>
        <tr>
            <td><?php echo $dados[0] ?></td>
            <td><?php echo $dados[1] ?></td>
            
            <td> <input type="text" name="telefone" value="<?php echo $dados[2] ?>" </td>
            
            <td> <input type="submit" name="atualizar" value ="Atualizar"></td>
        </tr>
    </table>
    <center>
    </form>
    <h3>Alterar Senha</h3>
    <form id="alterar-senha" action="alterarsenha.php" method="POST">
        Nova senha:
        <input type="password" name="senha" required><br>
        Confirme:
        <input type="password" name="confirmarsenha" required><br>
        <br>
        <input type="submit" name="alterar" value="Altualizar">
    </form>
    </center>
</body>
</html>