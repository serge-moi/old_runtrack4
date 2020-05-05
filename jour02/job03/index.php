<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <header class="z-depth-2">
            <nav class="pink accent-3">
                <ul class="row right">
                    <li ><a href="index.php" class="z-depth-1">Accueil</a></li>
                    <li ><a href="index.php" class="z-depth-1">Inscription</a></li>
                    <li ><a href="index.php" class="z-depth-1">Connexion</a></li>
                    <li ><a href="index.php" class="z-depth-1">Rechercher</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <form action="">
                    <p>Civilité :</p>
                    <div>
                        <input type="radio" name="monsieur" value="monsieur" checked>
                        <label for="monsieur">M.</label>
                    </div>
                    <div>
                        <input type="radio" name="mademoiselle" value="mademoiselle">
                        <label for="mademoiselle">Mlle</label>
                    </div>
                    <div>
                        <input type="radio" name="madame" value="madame">
                        <label for="madame">Mme</label>
                    </div>
                    <div>
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" value="prenom">
                    </div>
                    <div>
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" value="nom">
                    </div>
                    <div>
                        <label for="adresse">Adresse :</label>
                        <input type="text" name="adresse" value="adresse">
                    </div>
                    <div>
                        <label for="mail">Email :</label>
                        <input type="email" name="mail" value="mail">
                    </div>
                    <div>
                        <label for="pass">Password :</label>
                        <input type="password" name="pass" value="pass">
                    </div><div>
                        <label for="pass2">Confirm Password :</label>
                        <input type="password" name="pass2" value="pass2">
                    </div>
                    <p>Vos passions:</p>
                    <div>
                    <input type="checkbox" name="lecture">
                    <label for="lecture">La lecture</label>
                    <input type="checkbox" name="sport">
                    <label for="sport">Le sport</label>
                    <input type="checkbox" name="nature">
                    <label for="nature">La nature</label>
                    <input type="checkbox" name="manger">
                    <label for="manger">manger manger manger</label>
                    <input type="checkbox" name="rien">
                    <label for="rien">Aucune passion</label>
                    </div>
                    <button type="submit">Valider</button>
                </form>
            </section>
        </main>
        <footer class="brown darken-4">
            <ul class="row">
                <div class="col 6 offset-6 s3 center-align">
                    <li><a href="index.php" class="grey-text text-lighten-5">Accueil</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Inscription</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Connexion</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Rechercher</a></li>
                </div>
            </ul>
        </footer>
    </body>
</html>