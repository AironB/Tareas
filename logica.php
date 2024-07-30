<?php

    $numeros = [1,2,3,4,5,6];    
    echo "Array original: ";
    var_dump($numeros);
    echo "<br> Array Inverso: ";
    echo var_dump(array_reverse($numeros));
    echo "<br/>";
    

    $arr_num = [1,2,3,4,5,6];
   

print_r( $arr_num);

    $arr_cadena = ["Hello","Developer"];
    print_r(array_shift($arr_cadena));
    echo "<br />";
    $pisos=5;
    
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