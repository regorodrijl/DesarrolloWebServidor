Task 2.1. - Calculator
Using the following code, create a program to show the following results in PHP:

------------------------------------------------------------------

Números recibidos por método POST: aa, bb, cc, dd,

Suma total de los números:

Multiplicación de todos los números:

División entre el primer y tercer número:

Resto de Num1 / Num2:

Num1 es mayor que Num4 ? Si/No

------------------------------------------------------------------


~~~
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
<form name="formulario" method="post" action="">
<fieldset>
<legend>Calculadora</legend>
    <p><label for="campo1">Núm 1:</label><input name="campo1" value="" /></p>
    <p><label for="campo2">Núm 2:</label><input name="campo2" value="" /></p>
    <p><label for="campo3">Núm 3:</label><input name="campo3" value="" /></p>
    <p><label for="campo4">Núm 4:</label><input name="campo4" value="" /></p>
    <input type="submit" class="submit" name="enviar" value="Calcular" />
</fieldset>
</form>
</body>
</html>
~~~