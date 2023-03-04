<?php
if (isset($_POST['submit'])) {
    require "controlador.php";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="author" content="Guillermo Mendoza Remacha">
    <title>Calculadora racional</title>
</head>
<body>
    <div class="calculadora container pt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-5 col-lg-4">
                <fieldset>
                    <legend>Calculadora racional</legend>
                    <form action="index.php" class="form-group-lg" method="POST">
                    <div class="col pb-3">
                        <input type="text" class="form-control" name="op1" id="op1" required>
                    </div>
                    <div class="col pb-3">
                        <input type="text" class="form-control" name="op2" id="op2" equired>
                     </div>
                    <div class="row">
                        <div class="col-3 d-grid pb-3">
                            <select class="form-control" name="operador" id="operador" required>
                                <option value="sumar">+</option>
                                <option value="restar">-</option>
                                <option value="multiplicar">*</option>
                                <option value="dividir">/</option>
                            </select>
                        </div>
                        <div class="col-9 d-grid pb-3">
                            <input type="submit" class="form-control" name="submit" value="Calcular">
                        </div>
                    </div> 
                    </form>
                </fieldset>
                <fieldset>
                    <?php echo $total?? ""; ?>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>