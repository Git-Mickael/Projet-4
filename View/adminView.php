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
        <div>
            <form method="post" action="<?='index.php?action=deleteTicket&id=' . $ticket['id']  ?>">
                <h1 class ="ticketsTitle"> <?= $ticket['title'] ?> </h1>
                <time> <?= $ticket['date'] ?> </time>
                <p> <?= $ticket['description'] ?> </p>
                <input type="submit" value="Supprimer" />
            </form>
            <input type="submit" value="Modifier" />
        </div>
        <div>      
            <input id="changeTitle" name="newTitle" type="text" placeholder="Titre" required /><br/>
            <textarea id="changeDescription" name="newDescription"></textarea><br/>
            <a href="<?= 'index.php?action=modify&id=' . $ticket['id'] ?>">
                 <input type="submit" value="OK" />
            </a>
        </div>
    </article>
<?php endforeach; ?>
<?php foreach ($reports as $report) :?>
    <article >
        <form method="post" action="<?='index.php?action=deleteComment&id=' . $report['id']  ?>">
	    <p><?= $report['author'] ?> a dit le <?=$report['date'] ?>:</p>
            <p><?= $report['text'] ?></p>
            <input type="submit" value="Retirer" />   
        </form>
        <a href="<?= 'index.php?action=cancel&id=' . $report['id'] ?>">
                 <input type="submit" value="Annuler" />
        </a>
    </article>
<?php endforeach; ?>