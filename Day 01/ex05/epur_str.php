#!/usr/bin/php
<?PHP
    if ($argc == 2) {
        $array = array_filter(explode(' ', $argv[1]));
        $ans = "";
        foreach($array as $elem)
            $ans .= $elem." ";
        echo trim($ans)."\n";
    }
?>