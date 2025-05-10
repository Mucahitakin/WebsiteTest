<?php
$directory = __DIR__;  
if (is_dir($directory)) {
    $files = scandir($directory);
    echo "<h2>Files in Folder:</h2>";
    echo "<ul>";
    foreach ($files as $file) {
        
        if ($file != '.' && $file != '..') {
            echo "<li><a href='/images/$file' target='_blank'>$file</a></li>"; 
        }
    }
    echo "</ul>";
} else {
    echo "File Not Fund.";
}
?>
