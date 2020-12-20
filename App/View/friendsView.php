<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/friendsView.css">
    <title>friends</title>
</head>

<body>
    <?php require ROOT . "/App/Components/headerComponent.php"; ?>

    <main class="content">
        <h2>Mes amis</h2>

        <div class="content-flex">
            <div>
                <i class="fas fa-search"></i>
                <input id="searching-input" type="text" placeholder="Qui recherchez-vous ?">
                <ul id="searching-list"></ul>
            </div>

            <table class="tableau">
                <tbody id="my-friends"></tbody>
            </table>
        </div>
    </main>

    <?php require ROOT . "/App/Components/footerComponent.php"; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/friendsView.js"></script>

</html>