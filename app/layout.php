
<?php require_once('head.php');
?>

<main id="main">

<?php include_once "sidebar.php" ?>

<section class="content-site">
    <section class="page">
        <?php include($childView); ?>
    </section>
</section>
</main>


<?php require_once('views/modals/modal_addUser.php'); ?>
<?php require_once('views/modals/modal_ActivateAccount.php'); ?>
<?php require_once('views/modals/modal_PasswordSendSuccess.php'); ?>
<?php require_once('views/modals/modal_PasswordReset.php'); ?>
<?php require_once('views/modals/modal_ApproveChangeStatusOffer.php'); ?>
<?php require_once('views/modals/modal_SendNewProfileData.php'); ?>
<?php require_once('views/modals/modal_editProfile.php'); ?>
<?php require_once('views/modals/modal_SendNewProfileDataSuccess.php'); ?>
<?php require_once('views/modals/modal_ApproveChangeStatusOfferSuccess.php'); ?>
<?php require_once('views/modals/modal_CrmItemEdit.php'); ?>
<?php require_once('views/modals/modal_actionFinance.php'); ?>
<?php require_once('views/modals/modal_sourceInfo.php'); ?>
<?php require_once('views/modals/modal_createTicket.php'); ?>
<?php require_once('foot.php'); ?>
