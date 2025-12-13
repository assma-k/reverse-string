<?php
function reverse_string(string $str):string{
    $t = "";
    for($i =strlen($str); $i>=0; $i--){
        $t .=substr($str, $i, 1);
    }
    if($ string){
     throw new Exception("Le type attendu est incorrect");
    }
    return $t;
    var_dump($argv);
}
 try{
    echo reverse_string("hello");
 }
 catch(Exception $e){
    echo $e->getMessage();
 }


 echo reverse_string("hello");
 ?>