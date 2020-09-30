<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Game</title>
    <link rel="stylesheet" href="css/general-style.css">
    <link rel="stylesheet" href="css/survey-page.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <main>
        <section survey>
            <form class="formulaire" action="" method="POST">
                <div class="header">
                    <h2>Koh Lanta</h2>
                    <p>Petites questions sur koh Lanta</p>
                </div>

                <div class="body">
                    <div class="field">
                        <label for="question_1">Comment s'appelle la nouvelle saison de Koh Lanta ?</label>
                        <input id="question_1" name="question_1" type="text">
                    </div>

                    <div class="field">
                        <label for="question_2">Quelle couleur d'équipe n'a jamais existé ?</label>
                        <ul>
                            <li>
                                <input id="question_2_reponse_1" name="question_2" type="radio" value="Rouge">
                                <label for="question_2_reponse_1">Rouge</label>
                            </li>
                            <li>
                                <input id="question_2_reponse_2" name="question_2" type="radio" value="Jaune">
                                <label for="question_2_reponse_2">Jaune</label>
                            </li>
                            <li>
                                <input id="question_2_reponse_3" name="question_2" type="radio" value="Rose">
                                <label for="question_2_reponse_3">Rose</label>
                            </li>
                        </ul>
                    </div>

                    <div class="field">
                        <label for="question_3">Combien a t-il eu de saisons de Koh Lanta ?</label>
                        <input id="question_3" name="question_3" type="number">
                    </div>

                    <div class="field">
                        <label for="question_4">Faite un resumé la saison actuelle</label>
                        <textarea id="question_4" name="question_4" cols="30" rows="10"></textarea>
                    </div>

                    <div class="field">
                        <label for="question_5">Qu'es ce qui est vrai ?</label>
                        <ul>
                            <li>
                                <input id="question_5_reponse_1" name="question_2" type="checkbox" value="Reponse A">
                                <label for="question_5_reponse_1">Reponse A</label>
                            </li>
                            <li>
                                <input id="question_5_reponse_2" name="question_2" type="checkbox" value="Reponse B">
                                <label for="question_5_reponse_2">Reponse B</label>
                            </li>
                            <li>
                                <input id="question_5_reponse_3" name="question_2" type="checkbox" value="Reponse C">
                                <label for="question_5_reponse_3">Reponse C</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>