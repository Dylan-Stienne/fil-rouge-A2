<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Game</title>
    <link rel="stylesheet" href="css/general-style.css">
    <link rel="stylesheet" href="css/home-page.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <main>
        <section categories>
            <ul class="max-width">
                <li class="btn">Cinema</li>
                <li class="btn">Sport</li>
                <li class="btn">Télévision</li>
                <li class="btn">Cuisine</li>
                <li class="btn">Jeux Vidéo</li>
                <li class="btn">Autre</li>
            </ul>
        </section>

        <section surveys class="max-width">

            <div class="survey">
                <label class="btn">Télévision</label>
                <a href="./survey.php">
                    <div class="content">
                        <h2>Koh Lanta</h2>
                        <p>Petites questions sur koh Lanta</p>
                        <div class="about">
                            <p>Créé par Alex</p>
                            <p>32 personnes ont répondus</p>
                            <p>5 questions</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="survey">
                <label class="btn">Jeux Vidéo</label>
                <a href="./survey.php">
                    <div class="content">
                        <h2>Valorant</h2>
                        <p>Quelles seront les nouveautés du jeu</p>
                        <div class="about">
                            <p>Créé par Dylan</p>
                            <p>1 personne a répondu</p>
                            <p>6 questions</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="survey">
                <label class="btn">Sport</label>
                <a href="./survey.php">
                    <div class="content">
                        <h2>Rolland Garros</h2>
                        <p>Venez parier !</p>
                        <div class="about">
                            <p>Créé par Antoine</p>
                            <p>15 personnes ont répondus</p>
                            <p>2 questions</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="survey">
                <label class="btn">Autre</label>
                <a href="./survey.php">
                    <div class="content">
                        <h2>Apple</h2>
                        <p>Les rumeurs de l'iphone 12</p>
                        <div class="about">
                            <p>Créé par Emmanuel</p>
                            <p>6 personnes ont répondus</p>
                            <p>4 questions</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="survey">
                <label class="btn">Autre</label>
                <a href="./survey.php">
                    <div class="content">
                        <h2>Covid 19</h2>
                        <p>Quizz sur le covid</p>
                        <div class="about">
                            <p>Créé par Axel</p>
                            <p>3 personnes ont répondus</p>
                            <p>13 questions</p>
                        </div>
                    </div>
                </a>
            </div>

        </section>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>