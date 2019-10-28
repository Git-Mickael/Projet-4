<?php ob_start(); ?>
<?php foreach ($tickets as $ticket): ?>
<article>
    <header>
        <a href="<?= "index.php?action=ticket&id=" . $ticket['id'] ?>">
        <h1 class="ticketTitle"><?= $ticket['title'] ?></h1>
        <time><?= $ticket['date'] ?></time>
    </header>
    <p><?= $ticket['description'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>
<?php require 'View/gabarit.php';?>