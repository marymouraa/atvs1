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
                <label for="altura">Altura do Retangulo:</label>
                <input type="nunber" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura do Retangulo:</label>
                <input type="nunber" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        include 'Retangulo.php';

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $largura = $_POST['largura'];
            $altura = $_POST['altura'];

            $area1 = new Retangulo($largura, $altura);
            echo "<br> Área do Retangulo = " .$area1->calcular_area();
            echo "<br> Perimetro do Retangulo = " .$area1->calcular_perimetro();
    
        }
         ?>
        
    </div>
</body>
</html>
