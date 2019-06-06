<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="FDFest.png">
    <title>Festival</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="Content-Script-Type" content="text/javascript">
    <meta name="Content-Style-Type" content="text/css">
    <link rel="stylesheet" href="StyleIndex.css">
</head>
<body>
<nav>
    <div class="flex-container">
        <div><a href="index.php"><h1>ConfractFest</h1></a></div>
        <div><a href="lineup.php"><h1>Line-Up</h1></a></div>
        <div><a href="Ticket.php"><h1>Tickets</h1></a></div>
        <div><a href="ContactPagina.php"><h1>Contact</h1></a></div>
        <div><a href="inloggen.php"><h1>Login</h1></a></div>
    </div>
</nav>
<div class="Tickets">
    <h1>Tickets:</h1>
    <hr/>
    <center>
    <?php
    include ("ShowTicket.php")
    ?>
    </center>
</div>
</body>
</html>