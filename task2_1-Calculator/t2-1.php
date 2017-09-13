<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>HTML5 y PHP</title>
<style>
label
{
    width: 4em;
    float: left;
    text-align: right;
    margin-right: 0.5em;
    display: block;
}

.submit input
{
    margin-left: 4.5em;
}
input
{
    color: #781351;
    background: #fee3ad;
    border: 1px solid #781351;
    width: 40px;
}

input.submit
{
    color: #000;
    background: #ffa20f;
    border: 2px outset #d7b9c9;
    width: 90px;
}
fieldset
{
    border: 1px solid #781351;
    width: 20em
}

legend
{
    color: #fff;
    background: #ffa20c;
    border: 1px solid #781351;
    padding: 2px 6px;
} 
</style>
</head>
<body>
<?php 
if(!empty($_POST["campo1"]) && !empty($_POST["campo2"]) && !empty($_POST["campo3"]) && !empty($_POST["campo4"])){
    $aa = $_POST["campo1"];
    $bb = $_POST["campo2"];
    $cc = $_POST["campo3"];
    $dd = $_POST["campo4"];

    echo "Suma: ",($aa+$bb+$cc+$dd)."<br/>";
    echo "Multiplicación: ",($aa*$bb*$cc*$dd)."<br/>";
    echo "División: ",($aa/$cc)."<br/>";
    echo "Resto: ",($aa%$bb)."<br/>";
    echo "El num1 es mayor que num4? ";
    if ($aa>$bb) {
        echo "SI<br/>";
    }elseif ($aa<$bb) {
        echo "NO<br/>";
    }else echo "iguales<br/>";
    ?>
    <a href="">Volver</a>
<?php
 }else{
?>
    <form name="formulario" method="post" action=""> <!-- el action no tiene nada xk se renvia a si misma -->
        <fieldset>
            <legend>Calculadora</legend>
                <p><label for="campo1">Núm 1:</label><input name="campo1" value="" /></p>
                <p><label for="campo2">Núm 2:</label><input name="campo2" value="" /></p>
                <p><label for="campo3">Núm 3:</label><input name="campo3" value="" /></p>
                <p><label for="campo4">Núm 4:</label><input name="campo4" value="" /></p>
                <input type="submit" class="submit" name="enviar" value="Calcular" />
        </fieldset>
    </form>
<?php   
 }
?>

</body>
</html>