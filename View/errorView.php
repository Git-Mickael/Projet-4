<?php ob_start() ?>
<p>Une erreur est survenue : <?= $msgError ?></p>
<?php $content = ob_get_clean(); ?>

<?php require 'View/gabarit.php'; ?>