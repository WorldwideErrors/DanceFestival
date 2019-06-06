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
<div class="LineUp">
    <h1>Your ticket:</h1>
    <hr/>
<form Method="POST">
        <table>
            <h3>
            <tr>
                <td><h3>Firstname:</h3> 				</td>
                <td><INPUT class="TicketForm" NAME="Firstname" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Lastname: 			</h3></td>
                <td><INPUT class="TicketForm" NAME="Lastname" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Phonenumber:			</h3>		</td>
                <td><INPUT class="TicketForm" NAME="Phonenumber" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Email:				</h3></td>
                <td><INPUT class="TicketForm" NAME="Email"  TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Adress:				</h3></td>
                <td><INPUT class="TicketForm" NAME="Adress" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>City:			</h3></td>
                <td><INPUT class="TicketForm" NAME="City" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Zipcode:	</h3>		</td>
                <td><INPUT class="TicketForm" NAME="Zipcode" TYPE="Text" />	</td>
            </tr>
            <tr>
                <td><h3>Country:</h3>			</td>
                <td><INPUT class="TicketForm" NAME="Country" TYPE="Text" />	</td>
            </tr>
                <tr>
                    <td><h3>Ticket:</h3>		</td>
                    <td>
                        <SELECT class="TicketForm" NAME="TicketSelect" TYPE="Radio">
                            <OPTION VALUE="Vrijdag">Vrijdag						</OPTION>
                            <OPTION VALUE="Zaterdag">Zaterdag							</OPTION>
                            <OPTION VALUE="Weekend">Weekend				</OPTION>
                        </SELECT>
                    </td>
                </tr>
                <tr>
                <td>Sla op:					</td>
                </td>
                <td><INPUT TYPE="Submit" class="Submitterito" VALUE="Pay" NAME="btnOpslaan"/>
                </td>
            </tr>
        </table>
</form>
<?php
include 'config.php';
if (isset($_POST['btnOpslaan'])){
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Phonenumber = $_POST['Phonenumber'];
    $Email = $_POST['Email'];
    $Adress = $_POST['Adress'];
    $City = $_POST['City'];
    $Zipcode = $_POST['Zipcode'];
    $Country = $_POST['Country'];
    $Ticket = $_POST['TicketSelect'];

    // Query maken om nieuws toe te voegen
    $query = "INSERT INTO `guest`(`first_name`, `last_name`, `phonenumber`, `email`, `adress`, `city`, `zip`, `country`, `Ticket`) 
VALUES ('$Firstname','$Lastname','$Phonenumber','$Email','$Adress','$City','$Zipcode','$Country','$Ticket')";
    // Query klaar zetten om uit te voeren
    $stm = $con->prepare($query);
    // Als de Query succesvol uit gevoerd wordt
    if($stm->execute()){
        echo "<h2>Ticket has been bought successfully.</h2>";
    } else {
        echo "<h2>Something wrong!</h2>";
    }
}
?>
</div>
</body>
</html>