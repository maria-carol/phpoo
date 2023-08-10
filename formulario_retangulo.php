<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário retangulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            include 'retangulo.php';

            if ($_SERVER["REQUEST_METHOD"]=="POST"){
                $altura = $_POST['altura'];
                $largura = $_POST['largura'];

                $retangulo1 = new Retangulo($altura,$largura);
                echo "Área = ".$retangulo1->area();
                echo "<br>Perímetro = ".$retangulo1->perimetro();

            }
        ?>
        
        
    </div>
</body>
</html>