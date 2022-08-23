
<?php require_once('head.php');
?>

<main id="main">

<?php include_once "sidebar.php" ?>

<section class="content-site">
    <?php include($childView); ?>
</section>
</main>


<?php require_once('views/modals/modal_addUser.php'); ?>
<?php require_once('views/modals/modal_PasswordReset.php'); ?>
<?php require_once('views/modals/modal_PasswordSendSuccess.php'); ?>
<?php require_once('foot.php'); ?>
