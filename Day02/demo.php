#!/Usr/bin/php
<?PHP

// регулярные выражени
$nb = preg_match("/^t[^oi]*t*[a-p]{3}$/", "taba");
echo "$nb\n";

$nb1 = preg_match("/t([io])t\1/", "toto");
echo "$nb1\n";

//переменные переменные
$nom = "key";
$$nom = "val";
echo "$key\n";
echo "$nom\n";

//файлы
$tab = file("../Day01/ex00/hw.php");
foreach ($tab as $elem)
{
    echo "$elem\n";
}

$fd= fopen("../Day01/ex00/hw.php", "r");

while ($line = fgets($fd))
{
    echo $line;
}

fclose($fd);

$fd= fopen("../Day01/ex00/hw.php", "r");

while ($tab = fgetcsv($fd, 0, ":"))
{
    print_r($tab);
}

fclose($fd);

// eval()

eval("echo 'Hello World\n';");

// $my_var = fgets(STDIN);
// function
// eval($my_var);

// ===

if (0 === "World")
echo "OK\n";
else
echo "KO\n";

$my_tab = array("zero", "one", "two");

if (array_search("zero", $my_tab) !== FALSE)
    echo "Found\n";

//curl

$c = curl_init("http://www.42.fr");
$str = curl_exec($c);
echo "$str";

?>