<?php require_once _ROOTPATH_.'\templates\header.php'; 
/* @var $book \App\Modele\Book */
?>

<h1 class="text-center m-2 p-2"><?=$book->getTitle()?></h1>
<p class="text-center m-2 p-2"><?=$book->getDescription()?></p>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>

