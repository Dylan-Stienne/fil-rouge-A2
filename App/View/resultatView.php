<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css" />
    <link rel="stylesheet" href="../public/css/resultatView.css" />
    <title>Résultat</title>
</head>

<body>
    <?php require ROOT . "/App/Components/headerComponent.php"; ?>

    <main class="content">
        <h2 id="survey-title"></h2>

        <table class="tableau">
            <tbody id="survey-answers"></tbody>
        </table>
    </main>

    <?php require ROOT . "/App/Components/footerComponent.php"; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/resultatView.js"></script>

</html>