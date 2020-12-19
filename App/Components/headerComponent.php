<header>
    <section identification>
        <div class="content">
            <img src="./assets/images/header/times-solid.svg" alt="close" id="close-button" class="btn">
            <form class="formulaire" id="login">
                <div class="header">
                    <h2>Login</h2>
                </div>
                <div class="body">
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" required>
                    </div>
                    <div class="field">
                        <label for="password">Mot de passe</label>
                        <input id="password" name="password" type="password" required>
                    </div>
                    <div class="field">
                        <button class="btn" id="submit-login">Me connecter</button>
                    </div>
                </div>
            </form>
            <form class="formulaire" id="register">
                <div class="header">
                    <h2>Inscritpion</h2>
                </div>
                <div class="body">
                    <div class="field">
                        <label for="username">Pseudo</label>
                        <input id="username" name="username" type="text" required>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" required>
                    </div>
                    <div class="field">
                        <label for="password">Mot de passe</label>
                        <input id="password" name="password" type="password" required>
                    </div>
                    <div class="field">
                        <label for="password2">Confirmation du mot de passe</label>
                        <input id="password2" name="password2" type="password" required>
                    </div>
                    <div class="field">
                        <button class="btn" id="submit-register">Créer mon compte</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <nav>
        <a href="./" id="logo" class="item">
            <img src="./assets/images/header/poll-solid.svg" alt="Survey Game">
            <h1>Survey Game</h1>
        </a>
        <div class="item" id="search">
            <input type="search" placeholder="Rechercher un sondage" name="search">
        </div>
        <div class="item btn" id="identification-button">
            <img src="./assets/images/header/user-solid.svg" alt="Login">
            <p>Connexion</p>
        </div>
    </nav>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../public/ajax/headerComponent.js"></script>