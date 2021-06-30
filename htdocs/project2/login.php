<html>
<head>
<title> Filmfan login </title>
<link rel="stylesheet" type="text/css" href="..\Project\css\style.css">
</head>
<body id="body_bg">
<div class="logindiv" div align="center">

<h3>Filmfan login pagina</h3>
<p> Vul hieronder uw login gegevens in :</p>
    <form id="login-form" method="post" action="script\loginscript.php" >
        <table border="0.5" >
            <tr>
                <td><label for="Username">Gebruikersnaam</label></td>
                <td><input type="text" name="Username" id="Username"></td>
            </tr>
            <tr>
                <td><label for="Wachtwoord">Wachtwoord</label></td>
                <td><input type="password" name="Wachtwoord" id="Wachtwoord"></input></td>
            </tr>

            <tr>

                <td><input type="submit" value="Login" />
                <td><input type="reset" value="Reset"/>

            </tr>

        </table>
    </form>
		</div>
</body>
</html>
