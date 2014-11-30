<?php

    //Constants declaration
    $currentDomain = $_SERVER['HTTP_HOST'];
    $webDirectoryPath = "/home/mehul92/Web";
    $docsFolder = "http://$currentDomain/Documents/";
    
    
    $file = $_GET["file"];
    $ex = explode(".", $file);
    $ext = end($ex);
    if(strcasecmp($ext, "pdf") == 0) {
        header("Location: /pdfjs/web/viewer.html?file=$docsFolder$file");
    } else {
        $path_parts = pathinfo($file);
        $filename = $path_parts['filename'];
        $cmd = "export HOME=/tmp && libreoffice --headless --convert-to pdf --outdir ./tmp $webDirectoryPath/Documents/$filename.$ext";
        shell_exec($cmd);
        header("Location: /pdfjs/web/viewer.html?file=http://$currentDomain/tmp/$filename.pdf");
    }
?>