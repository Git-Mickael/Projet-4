<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contents/style.css" />
    <title>Mon Blog</title>
  </head>
  <body>
    <div id="global">
      <header id="title">
        <a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>
        <form id="author" action="index.php?action=admin" method="POST">
            <p><label>Nom : <input type="text" name="name"/></label></p>
            <p><label>Mot de passe : <input type="text" name="password"/></label></p>
            <p><input type="submit" value="Se connecter" /></p>
        </form>
      </header>
      <div id="content">
        <?= $content ?>
      </div>
      <footer>
   
      </footer>
    </div>
  </body>
</html>

