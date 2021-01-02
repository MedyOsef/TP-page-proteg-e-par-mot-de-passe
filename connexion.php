<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/base.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>Connexion</title>
</head>

<body>
    <div class="container">
        <div>
            <div class="form-title">
                <img
                    class="logo"
                    src="FBI_logo_Seal_of_the_Federal_Bureau_of_Investigation-679x700.png"
                    alt="FBI logo"
                />
            </div>
            <form class="form-inner" action="portail.php" method="post">
                <div class="form-line">
                    <div class="form-block">
                        <label class="form-label">Username:</label>
                        <input class="form-input" type="text" name="username" autocomplete="off">
                    </div>
                </div>

                <div class="form-line">
                    <div class="form-block">
                        <label class="form-label">Password:</label>
                        <input class="form-input" type="password" name="password">
                    </div>
                </div>
                <button class="btn">S'identifier</button>
            </form>
        </div>
    </div>
</body>

</html>