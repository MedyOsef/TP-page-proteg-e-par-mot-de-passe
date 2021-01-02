<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
        <div class="container">
                <div class="form">
                    <div class="form-title"><img class="logo" src="FBI_logo_Seal_of_the_Federal_Bureau_of_Investigation-679x700.png" alt="FBI logo"></div>
                    <form class="form-inner" action="portail.php" method="post">
                        <div class="form-line">
                            <div class="form-block">
                                <h4 class="form-label">User Name :</h4>
                                <input class="form-input" type="text" name="username" autocomplete="off" >
                            </div>
                        </div>

                        <div class="form-line">
                            <div class="form-block">
                                <h4 class="form-label">Password :</h4>
                                <input class="form-input" type="password" name="password" >
                            </div>
                        </div>
                        <input class="btn" type="submit">
                    </form>
                </div>
        </div>

</body>
</html>
