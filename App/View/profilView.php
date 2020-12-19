<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/profilView.css">
</head>

<body>
    <?php require ROOT . "/App/Components/headerComponent.php"; ?>

    <main class="content">
        <form class="formulaire" id="form-profil">
            <div class="header">
                <h2>Profil</h2>
            </div>
            <div class="body">
                <div class="field">
                    <label for="userName">Pseudo: </label>
                    <input type="text" id="profil-userName" name="userName" required>
                </div>
                <div class="field">
                    <label for="firstName">Prénom: </label>
                    <input type="text" id="profil-firstName" name="firstName" required>
                </div>
                <div class="field">
                    <label for="lastName">Nom: </label>
                    <input type="text" id="profil-lastName" name="lastName" required>
                </div>
                <div class="field">
                    <label for="birthDate">Date de naissance: </label>
                    <input type="date" id="profil-birthDate" name="birthDate" required>
                </div>
                <div class="field">
                    <label for="email">Email: </label>
                    <input type="email" id="profil-email" name="email" required>
                </div>
                <div class="field">
                    <label for="password">Changer mon mot de passe: </label>
                </div>
                <div class="field">
                    <input type="password" id="profil-password" name="password" placeholder="Nouveau mot de passe">
                    <input type="password" name="confirm-password" placeholder="Confirmer le nouveau mot de passe">
                </div>

                <div class="field">
                    <button class="btn" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </main>

    <?php require ROOT . "/App/Components/footerComponent.php"; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/profilView.js"></script>

</html>