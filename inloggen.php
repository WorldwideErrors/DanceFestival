<!DOCTYPE html>
<html>
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
</nav>>
        <div class="Inloggun">
            <center>
            <form method="POST">
                <table>
                    <tr>
                        <td><h2 class="form-input-title">Gebruikersnaam:</h2></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="txtGebruiker" class="TextInput"/></td>
                    </tr>
                    <tr>
                        <td><h2 class="form-input-title">Wachtwoord:</h2></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="txtWachtwoord" class="TextInput"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btnOpslaan" value="Inloggen" class="SubmitInput"/></td>
                    </tr>
                </table>
            <?php

            include("config.php");

            if(isset($_POST['btnOpslaan'])){
                session_start();
                $gebruiker = $_POST['txtGebruiker'];
                $wachtwoord = $_POST['txtWachtwoord'];


                $query = "SELECT * FROM customer where gebruiker = '$gebruiker' AND wachtwoord = '$wachtwoord'";
                $stm = $con->prepare($query);
                if($stm->execute()){

                    $lijst = $stm->fetchAll(PDO::FETCH_OBJ);
                    if(count($lijst) > 0){
                        $_SESSION['gebruiker'] = $lijst[0];
                        echo "<h2>Welkom ";
                        echo $lijst[0]->gebruiker.", u bent ingelogd!!</h2>";
                        header ("Location:/ProjectFestival/AdminHub.php");
                        echo "</form>";
                        echo "</center>";
                        echo "</div>";
                    }else echo "<h2>Vul een geldige gebruikersnaam of wachtwoord in!</h2>";

                }
            }
            ?>

            </form>
            </center>
        </div>
</body>
</html>

