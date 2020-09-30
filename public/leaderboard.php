<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Game</title>
    <link rel="stylesheet" href="css/general-style.css">
    <link rel="stylesheet" href="css/leaderboard-page.css">
</head>

<body>
    <?php
    include('header.php');
    ?>

    <main>
        <section podium>
            <div class="line">
                <div class="place" id="p1">
                    <img src="img/trophy-solid.svg" alt="Première place">
                    <h2>Dylan</h2>
                    <p>856 points</p>
                </div>
            </div>
            <div class="line">
                <div class="place" id="p2">
                    <img src="img/medal-solid-2.svg" alt="Deuxième place">
                    <h2>Alex</h2>
                    <p>469 points</p>
                </div>
                <div class="place" id="p3">
                    <img src="img/medal-solid-3.svg" alt="Troisièpe place">
                    <h2>Antoine</h2>
                    <p>352 points</p>
                </div>
            </div>
        </section>

        <section ranking>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Pseudo</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#4</td>
                        <td>Axel</td>
                        <td>324 points</td>
                    </tr>
                    <tr>
                        <td>#5</td>
                        <td>Mathieu</td>
                        <td>232 points</td>
                    </tr>
                    <tr>
                        <td>#6</td>
                        <td>Mael</td>
                        <td>213 points</td>
                    </tr>
                    <tr>
                        <td>#7</td>
                        <td>Emmanuel</td>
                        <td>189 points</td>
                    </tr>
                    <tr>
                        <td>#8</td>
                        <td>Maxime</td>
                        <td>135 points</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php
    include('footer.php');
    ?>
</body>

</html>