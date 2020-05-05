<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <main class="row">
            <section class="col s3">

            </section>
            <section class="col s6">
                <form action="#" method="post">
                    <h5>Civilité : </h5>
                    <p>
                    <label>
                    <input name="yourchoice" class="with-gap" type="radio" checked />
                    <span>M.</span>
                    </label>
                    </p>
                    <p>
                    <label>
                    <input name="yourchoice" class="with-gap" type="radio" />
                    <span>Mlle</span>
                    </label>
                    </p>
                    <p>
                    <label>
                    <input name="yourchoice" class="with-gap" type="radio" />
                    <span>Mme</span>
                    </label>
                    </p>   
                    <div class="row valign-wrapper">
                            <i class="small material-icons center col s2">account_circle</i>
                            <input type="text" name="prenom" placeholder="Prénom" class="validate" class="col s4">
                            <i class="small material-icons center col s2">account_circle</i>
                            <input type="text" name="nom" placeholder="Nom" class="validate" class="col s4">
                    </div>
                    <div class="row valign-wrapper">
                        <i class="small material-icons center col s1">add_location</i>
                        <input type="text" name="adresse" placeholder="Adresse" class="col 12 offset-12 s11">
                    </div>
                    <div class="row valign-wrapper">
                        <i class="small material-icons center col s1">mail</i>
                        <input type="email" name="mail" placeholder="Email" class="col 12 offset-12 s11">
                    </div>
                    <div class="row valign-wrapper">
                        <i class="small material-icons center col s1">lock</i>
                        <input type="password" name="pass" placeholder="Password" class="col 12 offset-12 s11">
                    </div>
                    <div class="row valign-wrapper">
                        <i class="small material-icons center col s1">lock_outline</i>
                        <input type="password" name="pass2" placeholder="Confirm Password" class="col 12 offset-12 s11">
                    </div>
                    <h5>Vos passions :</h5>
                    <div>
                        <p>
                            <label>
                                <input type="checkbox" class="Yellow">
                                <span>La lecture</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="Yellow">
                                <span>Le sport</span>
                            </label>
                        </p><p>
                            <label>
                                <input type="checkbox" class="Yellow">
                                <span>Le coloriage</span>
                            </label>
                        </p><p>
                            <label>
                                <input type="checkbox" class="Yellow">
                                <span>L'apéro</span>
                            </label>
                        </p><p>
                            <label>
                                <input type="checkbox" class="Yellow">
                                <span>La sieste</span>
                            </label>
                        </p>
                    </div>
                    <div class="row center">
                        <button class="btn waves-effect waves-light" type="submit" >Valider<i class="material-icons right">send</i></button>
                    </div>
                </form>
            </section>
            <section class="col s2">

            </section>
        </main>
        <footer class="brown darken-4">
            <ul class="row">
                <div class="col 12 offset-12 s3 center-align">
                    <li><a href="index.php" class="grey-text text-lighten-5">Accueil</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Inscription</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Connexion</a></li>
                    <li><a href="index.php" class="grey-text text-lighten-5">Rechercher</a></li>
                </div>
            </ul>
        </footer>
    </body>
</html>