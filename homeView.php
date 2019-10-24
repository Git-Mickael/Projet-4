<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header id="title">
                <a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>
                <form id="author" action="connexion.php" method="POST">
                    <p><label>Nom : <input type="text" name="name"/></label></p>
                    <p><label>Mot de passe : <input type="text" name="code"/></label></p>
                    <p><input type="submit" value="Se connecter" /></p>
                </form>
            </header>
            <div id="content">
                <?php foreach ($tickets as $ticket) :?>
                    <article id="tickets">
                        <header>
                            <h1 class ="ticketsTitle"> <?= $ticket['title'] ?> </h1>
                            <time> <?= $ticket['date'] ?> </time>
                        </header>
                        <p> <?= $ticket['description'] ?> </p>
                    </article>
                <?php endforeach; ?>
            </div>
            <footer>

            </footer>
        </div>
    </body>
</html>