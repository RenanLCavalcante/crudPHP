<!DOCTYPE html>
<html>
    <head>
        <title>Novo CLiente</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/bootstrap5/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container center_div">
            <h1>Cadastro de Clientes</h1>
            <form action="controller/ControleCliente.php" method="post">
                <div class="form-group">
                    <label for="txtnome">Nome</label>
                    <input type="text" name="txtNome" id="nome" class="form-control" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" name="txtCpf" id="cpf" class="form-control" placeholder="Ex: 123.456.678-90" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="txtTelefone" id="telefone" class="form-control" placeholder="Ex: 1234-5678" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereco</label>
                    <input type="text" name="txtEndereco" id="endereco" class="form-control" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" name="acao" value="Cadastrar" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-md-6">
                        <input type="reset" value="Limpar" class="btn btn-warning btn-block">
                    </div>
                </div>
            </form>
            <div class="row">
               <div class="col-md-12 input_listar">
                   <form action="controller/ControleCliente.php" method="post">
                       <input type="submit" name="acao" value="Listar" class="btn btn-danger btn-block">
                   </form>
               </div>
            </div>
        </div>
        <script src="js/jquery.js" ></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>