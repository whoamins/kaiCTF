<?php

    $pattern1 = '/[^[:print:]]+/';
    $pattern2 = '/[ \t]+$/'; 
    $pattern3 = '/^[ \t]+/';
    $pattern4 = '/^[\\\\|\/]+/';
    $pattern5 = '/^[\.\.\/|\.\.\\\\]+/';

    $file = $_GET['file'];

    if (!preg_match($pattern1, $file)){
        if (!preg_match($pattern2, $file)){
            if (!preg_match($pattern3, $file)){
                if (!preg_match($pattern4, $file)){
                    if (!preg_match($pattern5, $file)){
                        include("$file");
                    }
                }
            }
        }
    }
?>
