<?php
ob_implicit_flush(true);

session_start();

$progresso = 0;

while ($progresso < 100) {
    $progresso++;
    $_SESSION['progresso'] = $progresso;
    
    if ($progresso !== "" || $progresso !== null) {
        echo  $progresso . "\n";
        flush();
        ob_flush();
        sleep(1);
    }
}
// Close output buffer
ob_end_flush();

exit();
