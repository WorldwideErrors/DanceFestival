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
        <div><a href="index.php"><h1>ConfractFest</h1></a></div>
        <div><a href="lineup.php"><h1>Line-Up</h1></a></div>
        <div><a href="Ticket.php"><h1>Tickets</h1></a></div>
        <div><a href="ContactPagina.php"><h1>Contact</h1></a></div>
        <div><a href="inloggen.php"><h1>Login</h1></a></div>
    </div>
</nav>
<div class="Introductie">
    <h2>Welcome to ConfractFest! This festival is a festival where everybody is welcome.</h2>
    <h2>The genre's are hardcore, hardstyle and rap.</h2>
    <h2>LETS CONFRACT THIS FESTIVAL.</h2>
    <h2></h2>
    <h2>- ConfractTeam - (っ◕‿◕)っ♥</h2>
        <!-- Display the countdown timer in an element -->
</div>
<div class="Welcome">
    <?php
    include ("ShowNews.php")
    ?>
</div>
    <div class="Timer">
        <h1 id="demo"></h1>

        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jun 15, 2019 15:37:25").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s " + " until ConfractFest";

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
</div>

</body>
</html>
<?php
