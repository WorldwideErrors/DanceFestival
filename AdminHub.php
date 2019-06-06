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
<div class="Introductie">
    <h2 class="AdminHubberino">Welcome to the Admin HUB! This is the location where all the magic happens!</h2>
    <h2 class="AdminHubberino">Admin HUB -> This is the HUB where you start.</h2>
    <h2 class="AdminHubberino">News + -> You can use this to add newsitems.</h2>
    <h2 class="AdminHubberino">Line-Up + -> You can use this to add artists to the line-up!</h2>
    <center>
        <form method="POST">
            <table>
                <tr>
                        <td><input type="submit" name="btnUitloggen" value="Uitloggen" class="SubmitInput"/></td>
                </tr>
            </table>
        <?php
            include("config.php");
            if(isset($_POST['btnUitloggen'])) {
            session_destroy();
            header ("Location:/ProjectFestival/inloggen.php");
            }
        ?>

        </form>
    </center>
</div>
</body>
<?php

?>
</html>