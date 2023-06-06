<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<?php if ($error) {?>

<section class="alert alert-danger">
    <div class="text-center">
        <p class="m-2 p-2"><?=$error; ?></p>
            <!-- <p>La page demandée n'existe pas</p> -->
    </div>
</section

<?php }?>


<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>

