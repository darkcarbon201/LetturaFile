<?php 

$file = fopen("libri.txt" , "r");

if ($file == false){
    exit();
}else{
    while(feof($file) == false ){
        $record = fgets($file);
        echo "<b>" . $record . "<b>" . "<br>";
    }

    fclose($file);

}

?>