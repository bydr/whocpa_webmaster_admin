<?php
$id = $alertId;
$message = $alertMessage;
$heading = $alertHeading;
$isClosable = $alertClosable;
// Статус состояния
/*
warning
error
success
info
*/
$status = $alertStatus


// Селекторы css состояния
/*
alert_warning
alert_error
alert_success
alert_info
*/
?>

<article id="<?php echo $id ?>" data-component="alert" class="alert alert_<?php echo $status ?>">

  <div class="alert-content">
      <?php if (isset($heading)): ?>
        <h4 class="alert-heading"><?php echo $heading ?></h4>
      <?php endif; ?>

      <?php if (isset($message)): ?>
        <p class="alert-message"><?php echo $message ?></p>
      <?php endif; ?>
  </div>

  <?php if ($isClosable): ?>
    <button type="button" class="button alert-close" data-alert-hide>
      <svg class="ui-icon">
        <use xlink:href="img/_src/sprite.svg#x"></use>
      </svg>
    </button>
  <?php endif; ?>

</article>
