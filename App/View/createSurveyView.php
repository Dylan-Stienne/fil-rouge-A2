<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau sondage</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/createSurveyView.css">
</head>

<body>
    <div id="APP">
        <?php require ROOT . "/App/Components/headerComponent.php"; ?>

        <main class="content">
            <form action="?action=create-survey" method="POST" class="formulaire" id="new-survey">
                <div class="header">
                    <h2>Nouveau sondage</h2>
                </div>
                <div class="body">
                    <div class="field">
                        <label for="title">Question: </label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="field">
                        <label for="category">Catégorie: </label>
                        <input type="text" id="category" name="category">
                    </div>
                    <div class="field">
                        <label for="date">Date de fin: </label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="field">
                        <label for="answer_1">Réponse 1: </label>
                        <input type="text" id="answer_1" name="answer_1">
                    </div>
                    <div class="field">
                        <label for="answer_2">Réponse 2: </label>
                        <input type="text" id="answer_2" name="answer_2">
                    </div>
                    <div class="field">
                        <label for="answer_3">Réponse 3: </label>
                        <input type="text" id="answer_3" name="answer_3">
                    </div>
                    <div class="field">
                        <label for="answer_4">Réponse 4: </label>
                        <input type="text" id="answer_4" name="answer_4">
                    </div>
                    <div class="field">
                        <button class="btn">Créer le sondage</button>
                    </div>
                </div>
            </form>
        </main>

        <?php require ROOT . "/App/Components/footerComponent.php"; ?>
    </div>
</body>

</html>