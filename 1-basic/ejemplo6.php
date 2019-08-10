<?php
    $var = "Hola xD";

    echo strlen($var).'<br>';
    echo str_word_count($var).'<br>';
    echo strrev($var).'<br>';
    echo strpos($var,'D').'<br>';
    echo str_replace('xD','Mundo',$var);
?>