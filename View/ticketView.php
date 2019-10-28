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
  <p><?= $comment['author'] ?> dit :</p>
  <p><?= $comment['text'] ?></p>
<?php endforeach; ?>