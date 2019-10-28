<article>
  <header>
    <h1 class="ticketTitle"><?= $ticket['title'] ?></h1>
    <time><?= $ticket['date'] ?></time>
  </header>
  <p><?= $ticket['description'] ?></p>
</article>
<hr />
<header>
  <h1 id="answerTitle">Commentaire pour <?= $ticket['title'] ?> :</h1>
</header>
<?php foreach ($comments as $comment): ?>
  <p><?= $comment['author'] ?> a dit le <?=$comment['date'] ?>:</p>
  <p><?= $comment['text'] ?></p>
<?php endforeach; ?>
<form method="post" action="index.php?action=comment">
    <input id="authorComment" name="author" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtComment" name="contents" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $ticket['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>