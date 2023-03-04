<?php
require_once "Racional.php";

$operador =$_POST['operador'];
$num1=new Racional($_POST['op1']);
$num2=new Racional($_POST['op2']);

switch($operador) {
    case "sumar":
        $resultado = $num1->sumar($num2);
        $resultado = $resultado->simplificar();
        $operador = "+";
        $total .= "<hr>";
        $total .= "<legend>Operación</legend>";
        $total .= "<h1>$num1 $operador $num2 = $resultado</h1>";
        break;
    case "restar":
        $resultado =  $num1->restar($num2);
        $resultado = $resultado->simplificar();
        $operador = "-";
        $total .= "<hr>";
        $total .= "<legend>Operación</legend>";
        $total .= "<h1>$num1 $operador $num2 = $resultado</h1>";
        break;
    case "multiplicar":
        $resultado =  $num1->multiplicar($num2);
        $resultado = $resultado->simplificar();
        $operador = "*";
        $total .= "<hr>";
        $total .= "<legend>Operación</legend>";
        $total .= "<h1>$num1 $operador $num2 = $resultado</h1>";
        break;
    case "dividir":
        $resultado =  $num1->dividir($num2);
        $resultado = $resultado->simplificar();
        $operador = "/";
        $total .= "<hr>";
        $total .= "<legend>Operación</legend>";
        $total .= "<h1>$num1 $operador $num2 = $resultado</h1>";
        break;
}

// var_dump($_POST['op1']);
// var_dump($_POST['operador']);
// var_dump($_POST['op2']);
?>