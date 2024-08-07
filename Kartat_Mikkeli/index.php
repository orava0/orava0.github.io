<?php

# Tama skripti toimii vain jos skriptin oikeudet on 644 ja kansion 755.

echo "<br><b>Karttoja Mikkelin alueelta auttamaan Jukola 2025:een valmistautumisessa</b><br><br>";


$files = array();
$dir = opendir('.'); // open the cwd..also do an err check.
while(false != ($file = readdir($dir))) {
        if(($file != ".") and ($file != ".htpasswd") and ($file != ".htaccess") and ($file != "..") and ($file != "index.php")) {
                $files[] = $file; // put in array.
        }   
}

natsort($files); // sort.

// print.
foreach($files as $file) {
        echo("<a href='$file'>$file</a> <br />\n<br>");
}


?> 

<br><br><br>
