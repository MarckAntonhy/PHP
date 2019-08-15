<?php

    function lista(){
        $num = func_num_args();
        echo "El numero de argumentos es: $num <br>";

        //Obtiene todos los parametros que ingresemos(n)
        $list = func_get_args();

        foreach ($list as $key => $value) {
            echo "Llave: $key Valor: $value <br>";
        }

        echo "<br>";
        // Te devuelve un valor de la lista especificandole el indice
        echo func_get_arg(0);
    }

    lista('Linux','Debian','Windows');
?>