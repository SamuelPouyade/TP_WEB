<?php
if ($fp = @fopen('file.txt', 'at')) {
    echo 'File opened.';
    date_default_timezone_set('Europe/Paris');
    $DateAndTime = date('m-d-Y h:i:s a', time());
    $fp . fwrite($fp, "Nouveau fichier crée à la date suivante: $DateAndTime\n");
    $fp . fclose($fp);
    echo '<br />File closed.';
}
?>
<a href="..\index.php">Menu principal</a>
