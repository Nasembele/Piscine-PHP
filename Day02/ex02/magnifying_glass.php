#!/usr/bin/php
<?php
	if ($argc < 2 || !file_exists($argv[1]))
        exit();
    function change($matches)
    {
        $matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/", function($matches) {
            return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        $matches[0] = preg_replace_callback("/(>)(.*?)(<)/", function($matches) {
            return ($matches[1].".".strtoupper($matches[2])."".$matches[3]);
        }, $matches[0]);
        return ($matches[0]);
    }
    $fd = fopen($argv[1], 'r');
	$page = "";
    while ($fd && !feof($fd)) {
        $html .= fgets($fd);
    }
    $html = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/", function($matches) {
        return change($matches);
    }, $html);
    echo $html;
?>