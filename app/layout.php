
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
<?php require_once('views/modals/modal_activateAccount.php'); ?>
<?php require_once('views/modals/modal_passwordSendSuccess.php'); ?>
<?php require_once('views/modals/modal_passwordReset.php'); ?>
<?php require_once('views/modals/modal_passwordUpdate.php'); ?>
<?php require_once('views/modals/modal_approveChangeStatusOffer.php'); ?>
<?php require_once('views/modals/modal_sendNewProfileData.php'); ?>
<?php require_once('views/modals/modal_editProfile.php'); ?>
<?php require_once('views/modals/modal_sendNewProfileDataSuccess.php'); ?>
<?php require_once('views/modals/modal_approveChangeStatusOfferSuccess.php'); ?>
<?php require_once('views/modals/modal_crmItemEdit.php'); ?>
<?php require_once('views/modals/modal_actionFinance.php'); ?>
<?php require_once('views/modals/modal_sourceInfo.php'); ?>
<?php require_once('views/modals/modal_createTicket.php'); ?>
<?php require_once('views/modals/modal_createTaskLead.php'); ?>
<?php require_once('views/modals/modal_createEvent.php'); ?>
<?php require_once('views/modals/modal_createNews.php'); ?>
<?php require_once('views/modals/modal_createNewsOffers.php'); ?>
<?php require_once('views/modals/modal_createNewsStopOffer.php'); ?>
<?php require_once('views/modals/modal_createNewsSystem.php'); ?>
<?php require_once('views/modals/modal_createPromo.php'); ?>
<?php require_once('views/modals/modal_createPurpose.php'); ?>
<?php require_once('views/modals/modal_createSpecialCondition.php'); ?>
<?php require_once('views/modals/modal_connectWebmaster.php'); ?>
<?php require_once('views/modals/modal_createLanding.php'); ?>
<?php require_once('foot.php'); ?>
