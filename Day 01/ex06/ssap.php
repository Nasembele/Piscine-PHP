#!/usr/bin/php
<?php
    $array = array();
    unset($argv[0]);
    foreach($argv as $elem1)
    {
        $tmp = array_filter(explode(' ', $elem1));
        foreach ($tmp as $elem2)
            $array[] = $elem2;
    }
    sort($array);
    foreach ($array as $elem1)
        echo $elem1."\n";
?>