<!DOCTYPE html>
<html lang="en">
<head>
    <title>Festival</title>
    <link rel="icon" href="FDFest.png">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="Content-Script-Type" content="text/javascript">
    <meta name="Content-Style-Type" content="text/css">
    <link rel="stylesheet" href="StyleIndex.css">
</head>
<body>
<nav>
    <div class="flex-container">
        <div><a href="AdminHub.php"><h1>Admin HUB</h1></a></div>
        <div><a href="AddNews.php"><h1>News +</h1></a></div>
        <div><a href="AddLineup.php"><h1>Line-Up +</h1></a></div>
        <div><a href="AddTickets.php"><h1>Ticket +</h1></a></div>
    </div>
</nav>
<div class="NewsAdd">
    <center>
        <form method="POST">
            <table>
                <tr>
                    <td><h2 class="form-input-title">Name:</h2>></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtTicketname" id="TextInput" class="TextInput" value=""></td>
                </tr>
                <tr>
                    <td><h2 class="form-input-title">Price:</h2></td>
                </tr>
                <tr>
                    <td><input type="text" name="txtPrice" id="TextInput" class="TextInput" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnSaveTicket" value="Save" class="Submitterito"/></td>
                </tr>
            </table>
            <?php
            include("config.php");

            // Als er op de knop btnSave geklikt is
            if(isset($_POST['btnSaveTicket'])) {
                // Tekstvelden uitlezen en opslaan in variable
                $name = $_POST['txtTicketname'];
                $price = $_POST['txtPrice'];
                // Query maken om nieuws toe te voegen
                $query = "INSERT INTO tickets (ticketName, price)
                  VALUES ('$name', '$price')";
                // Query klaar zetten om uit te voeren
                $stm = $con->prepare($query);
                // Als de Query succesvol uit gevoerd wordt
                if($stm->execute()){
                    echo "<h2>Ticket has been successfully added.</h2>";
                } else {
                    echo "<h2>Something wrong!</h2>";
                }
            }
            ?>
        </form>
    </center>
</div>
</body>
</html>
