<?php
include "config.php";
$qAll ="SELECT * FROM news ORDER BY id DESC";
$stm = $con->prepare($qAll);
if($stm->execute()) {
    $result = $stm->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $key){
        echo "<div class='newsItem'><h1>".$key ->newsitem."<br/></h1>".
            "<h3>".$key->newsmessage."</h3></div><hr/>";
    }
}    else{
    echo "Query mislukt";
}
?>