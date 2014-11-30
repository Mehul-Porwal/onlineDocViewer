<?php
    $dir = '/home/mehul92/Web/tmp';
    foreach(glob($dir.'*.*') as $v) {
    $last_modified = filemtime($v);
    $fmtime=date("h:i:s", $last_modified);
    $currentTime=date("h:i:s");
        if (round(abs($currentTime - $fmtime) / 60,2) >= 5) {
            unlink($v);
        }
    }
?>