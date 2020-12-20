<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/surveyView.css">
</head>

<body>
    <?php require ROOT . "/App/Components/headerComponent.php"; ?>

    <main>
        <section survey>
            <form class="formulaire" action="" method="POST">
                <div class="header">
                    <h2>Choisisez la meilleure réponse</h2>
                    <p id="survey-title"></p>
                </div>

                <div class="body">
                    <ul id="survey-answers"></ul>
                </div>
            </form>
        </section>

    </main>

    <?php require ROOT . "/App/Components/footerComponent.php"; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/surveyView.js"></script>

</html>