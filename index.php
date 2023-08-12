<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Degree Equation With PHP</title>
</head>
<body>
    <h1>Second Degree Equation With PHP</h1>
    <?php 
        $var_a = 4;
        $var_b = 2;
        $var_c = -6;
        //calculo do descriminate
        $delta = $var_b**2 -4 *$var_a *$var_c;
        echo "O valor do descriminante delta é: $delta";
        $x1 = (- $var_b + ($delta**(1/2)))/(2* $var_a);
        echo "O valor da raíz x1 é: $x1";
        $x2 = (- $var_b - ($delta**(1/2)))/(2* $var_a);
        echo "O valor da raíz x2 é: $x2";
               
    ?>
</body>
</html>