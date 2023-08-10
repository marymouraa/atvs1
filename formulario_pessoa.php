<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="profissao">Profissaõ:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="date" class="form-control" id="idade" name="idade" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        include 'Pessoa.php';

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $profissao = $_POST['profissao'];

            $pessoa1 = new Pessoa ($nome, $idade, $profissao);
            echo "Pessoa 1 = " .$pessoa1->apresentar();
        }
         ?>
        
    </div>
</body>
</html>