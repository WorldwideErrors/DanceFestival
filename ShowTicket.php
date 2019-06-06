<?php
include "config.php";
$qAll ="SELECT * FROM tickets ORDER BY id ASC";
$stm = $con->prepare($qAll);
if($stm->execute()) {
    $result = $stm->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $key){
        echo "<button class=\"Ticketbutton\"><a href='BuyTicket.php' class='Linkje'><h1>$key->ticketName <br/> €$key->price</h1></a></button>";
    }
}    else{
    echo "Query mislukt";
}
?>