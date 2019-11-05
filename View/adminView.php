<article>
    <header>
        <h1 id="whrite">Administration</h1>
    </header>
</article>

<body>
    <form method="post" action="index.php?action=createTicket">
        <input id="writeTitle" name="title" type="text" placeholder="Titre" required /><br/>
        <textarea id="writeDescription" name="description"></textarea><br/>
        <input type="submit" value="Valider" />
    </form>
</body>
<?php foreach ($tickets as $ticket) :?>
    <article class="tickets">
        <form method="post" action="<?='index.php?action=deleteTicket&id=' . $ticket['id']  ?>">
	    <h1 class ="ticketsTitle"> <?= $ticket['title'] ?> </h1>
            <time> <?= $ticket['date'] ?> </time>
            <p> <?= $ticket['description'] ?> </p>
            <input type="submit" value="Supprimer" />
        </form>
    </article>
<?php endforeach; ?>
<?php foreach ($reports as $report) :?>
    <article >
	    <p><?= $report['author'] ?> a dit le <?=$report['date'] ?>:</p>
            <p><?= $report['text'] ?></p>
    </article>
<?php endforeach; ?>