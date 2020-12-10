<?php

$fileNames = $_POST['filename'];
$removeSpaces = str_replace(" ", "", $fileNames);
$allFileNames = explode(",", $removeSpaces);

$countAllNames = count($allFileNames);

for($i=0; $i < $countAllNames; $i++){
    if(file_exists("cache/".$allFileNames[$i]) == false) {
         header("location: uploadingFiles.php?delete=error");
        exit();
    }
        
}

for($i=0; $i < $countAllNames; $i++){
    $path = "cache/".$allFileNames[$i];
    if(!unlink($path)){
     echo "you have an error";    
        exit();
    }
}
 

header("location: uploadingFiles.php?delete=success");
    echo "file deleted successfully";
