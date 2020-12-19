<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/homeView.css">

    <title>Surveys Game</title>
</head>

<body>
    <div id="APP">
        <?php require ROOT . "/App/Components/headerComponent.php"; ?>

        <main>
            <section categories>
                <ul class="max-width" id="surveys-categories"></ul>
            </section>

            <section findSurveys>
                <h2 id="find-surveys-label">Sondages récents</h2>
                <ul class="max-width" id="find-surveys"></ul>
            </section>

            <div class="flex-container">
                <section mySurveys>
                    <h2>Mes sondages</h2>

                    <ul class="max-width" id="my-surveys"></ul>
                </section>

                <section firendsSurveys>
                    <h2>Sondages en cours des amis</h2>

                    <ul class="max-width" id="friends-surveys"></ul>
                </section>
            </div>

        </main>

        <?php require ROOT . "/App/Components/footerComponent.php"; ?>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/homeView.js"></script>

</html>