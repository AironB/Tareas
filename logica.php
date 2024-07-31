<?php

    $numeros = [1,2,3,4,5,6];    
    echo "Array original: ";
    var_dump($numeros);
    echo "<br> Array Inverso: ";
    echo var_dump(array_reverse($numeros));
    echo "<br/>";
    
    // $numerosPares = [1, 2, 3, 4];
    // $suma = 0;
    // for ($i=0;$i<=array_count_values($numerosPares);$i++)
    // {
    //     if( $numerosPares[$i]  % 2==0)
    //         {
    //         $suma += $numerosPares;
    //         }
    //     else{
    //         $i++;
    //     }
    // }
    // echo "Suma: $suma<br>";

    $texto = "<br/>Programar";
    echo "Contando letras de: $texto<br/>";
    $letras = "abcdefghijklmnopqrstuvwxyz";
    $letras .= strtoupper($letras);
    for ($i = 0; $i < strlen($letras); $i++) {
        $letra = $letras[$i];
        $contador = 0;
        for ($x = 0; $x < strlen($texto); $x++) {
            $actual = $texto[$x];
            if ($actual === $letra) {
                $contador++;
            }
    
        }
        if ($contador > 0) {
            echo "$letra=";
            echo $contador;
            echo "<br/>";
        }
    }

    $altura = 6;
    $max_asteriscos = 2 * $altura -1;
    for($i=1; $i<=$altura;$i++)
    {
        $numasteriscos = 2 * $i -1;
        $num_espacios = ($max_asteriscos-$numasteriscos)/2;
        for($j=1;$j<=$num_espacios;$j++)
        {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $numasteriscos; $j++)
        {
            if($j % 2 == 0)
            {
                echo "&nbsp;&nbsp;";
            }else{
                echo "* ";
            }
        }
        echo "<br />";
    }
?>