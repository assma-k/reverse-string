<?php
function reverse_string(string $str):string{
    $t = "";
    for($i =strlen($str); $i>=0; $i--){
        $t .=substr($str, $i, 1);
    }
    if($str !== string){
     throw new Exception("Le type attendu est incorrect");
    }
    return $t;
    var_dump($argv)
}
 


 echo reverse_string("hello");
 ?>