<?php
include "config.php";
$qAll ="SELECT * FROM lineup ORDER BY id DESC";
$stm = $con->prepare($qAll);
if($stm->execute()) {
    $result = $stm->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $key){
        echo "<button class=\"WebButton button3\"><a class='Linkje' target='blank' href='".$key->artistLink."'><h1 id=\"secondL\">".$key->artist."</h1></a></button>";
    }
}    else{
    echo "Query mislukt";
}
?>


