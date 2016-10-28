<?php
	require_once("model/Cliente.class.php");
    session_start();
    $listaClientes = null;
    if(isset($_SESSION["listaClientes"])){
        $listaClientes = $_SESSION["listaClientes"];
        unset($_SESSION["listaClientes"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <h1>Clientes cadastrados</h1>
        <table class="table table-condensed">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td><strong>Atualizar</strong></td>
                    <td class="red">Remover</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($listaClientes as $cliente){
                        echo "<tr>";
                            echo "<td>".$cliente->getNome()."</td>";
                            echo "<td>".$cliente->getTelefone()."</td>";
                            echo "<td>".$cliente->getEndereco()."</td>";
                            echo "<td><a href='controller/ControleCliente.php?acao=Atualizar&id_cliente=".$cliente->getId()."'> Atualizar </a></td>";
                            echo "<td><a href='controller/ControleCliente.php?acao=Remover&id_cliente=".$cliente->getId()."'> Remover </a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>