<?php foreach ($tickets as $ticket) :?>
    <article id="tickets">
    	<a href="<?= 'index.php?action=ticket&id=' . $ticket['id'] ?>">
	    	<h1 class ="ticketsTitle"> <?= $ticket['title'] ?> </h1>
	    </a>
	    <time> <?= $ticket['date'] ?> </time>
	    <p> <?= $ticket['description'] ?> </p>
    </article>
<?php endforeach; ?>