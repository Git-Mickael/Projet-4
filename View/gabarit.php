<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contents/style.css" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea#writeDescription'});</script>
        <title>Mon Blog</title>
    </head>
    <header id="title">
        <a href="index.php"><h1>Billet simple pour l'Alaska</h1></a>
        <form id="author" action="index.php?action=admin" method="POST">
            <p><label>Nom : <input type="text" name="name"/></label></p>
            <p><label>Mot de passe : <input type="text" name="password"/></label></p>
            <p><input id="connection" type="submit" value="Se connecter" /></p>
        </form>
        <a href="<?= 'index.php?action=disconnection'?>">
            <p><input type="submit" value="Se déconnecter" /></p>
        </a>
    </header>
  <body>
    <div id="global">
        <div id="content">
          <?= $content ?>
        </div>
        <footer>

        </footer>
    </div>
    <script src="Contents/blog.js"></script>
  </body>
</html>

