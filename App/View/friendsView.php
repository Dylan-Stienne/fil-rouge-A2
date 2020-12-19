<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/friendsView.css">
    <title>friends</title>
</head>

<body>
    <header>
        <h1 style="color: blue;">Amis</h1>
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

    <main class="centre">
        <i class="fas fa-search"></i>
        <input id="searching-input" type="text" placeholder="Qui recherchez-vous ?">
        <div id="searching-list"></div>

        <h2>mes amis actuel</h2>
        <table id="my-friends"></table>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/friendsView.js"></script>
</body>

</html>