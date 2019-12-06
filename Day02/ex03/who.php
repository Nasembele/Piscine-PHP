#!/usr/bin/php
<?php
    date_default_timezone_set("Europe/Paris");
    $fd = fopen("/var/run/utmpx", 'r');

    while ($str = fread($fd, 628)) 
    {
		$elem = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);
        if ($elem[type] == 7) 
        {
			echo "$elem[user]  $elem[line]  ". date('M  j H:i', $elem[time])."\n";
        }
    }
?>