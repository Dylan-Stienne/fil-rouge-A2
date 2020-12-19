<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/resultatView.css" />
    <title>Résultat</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Résultat d'un sondage</h1>
        <!-- header dupliqué partout juste pour la démo, on sait que c'est pas propre -->
        <nav>
            <ul>
                <li><a href="./">page home</a></li>
                <li><a href="?page=friends">page friends</a></li>
                <li><a href="?page=new">page créer un sondage</a></li>
                <li><a href="?page=profil">page profil</a></li>
                <li><a href="?page=register">page inscription</a></li>
                <li><a href="?page=login">page login</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <main>
        <h1 id="survey-title"></h1>
        <ul id="survey-answers"></ul>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../public/ajax/resultatView.js"></script>
    </main>
</body>

</html>