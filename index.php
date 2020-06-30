<?php
    function parinpar($num)
    {
        if($num % 2 == 0)
        {
            return 'par';
        }else{
            return 'inpar';
        }
    }
    echo parinpar(8);

    echo '<hr>';
    function parinpar($num1,$num2)
    {
        if ($num1 > $num2) 
        {
            return $num2;
        } else {
            return $num1;   
        }
    } 

    echo 'el mayor es ',parinpar(4,9);
    echo '<hr>';

    function cuadrado($num3)
    {
        return ($num3*$num3);
    }
    echo 'el cuadrado es',cuadrado(8);
    echo '<hr>';
?>