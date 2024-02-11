<div class="" style="display: flex;
flex-direction: column;">

  <?php
    $payments = [
      "capitalist.svg",
      "payoneer.svg",
      "usdt.svg",
    ]
  ?>

  <div class="payment-row">
      <?php foreach ($payments as $item): ?>
        <div class="payment-icon  payment-icon_size-40">
          <img src="img/_src/payments/<?php echo $item ?>" alt="">
        </div>
      <?php endforeach; ?>
  </div>
  <br>
    <div class="payment-row">
      <?php foreach ($payments as $item): ?>
        <div class="payment-icon">
          <img src="img/_src/payments/<?php echo $item ?>" alt="">
        </div>
      <?php endforeach; ?>
    </div>
  <br>
  <div class="payment-row">
      <?php foreach ($payments as $item): ?>
        <div class="payment-icon  payment-icon_size-20">
          <img src="img/_src/payments/<?php echo $item ?>" alt="">
        </div>
      <?php endforeach; ?>
  </div>

    <?php
    $alertId = "alert5";
    $alertMessage = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dicta dolores ducimus et illo iure magni non perspiciatis sequi sunt.";
    $alertHeading = "Ошибка!";
    $alertClosable = false;
    $alertStatus = "error";
    include("components/alerts/alert.php")
    ?>

    <?php
    $alertId = "alert1";
    $alertMessage = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dicta dolores ducimus et illo iure magni non perspiciatis sequi sunt.";
    $alertHeading = "Предупреждение!";
    $alertClosable = true;
    $alertStatus = "warning";
    include("components/alerts/alert.php")
    ?>

    <button class="button" data-alert="#<?php echo $alertId ?>">Открыть <?php echo $alertStatus ?></button>


    <?php
    $alertId = "alert2";
    $alertMessage = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dicta dolores ducimus et illo iure magni non perspiciatis sequi sunt.";
    $alertHeading = null;
    $alertClosable = true;
    $alertStatus = "info";
    include("components/alerts/alert.php")
    ?>

    <button class="button" data-alert="#<?php echo $alertId ?>">Открыть <?php echo $alertStatus ?></button>

    <?php
    $alertId = "alert3";
    $alertMessage = null;
    $alertHeading = "Успех!";
    $alertClosable = true;
    $alertStatus = "success";
    include("components/alerts/alert.php")
    ?>

    <button class="button" data-alert="#<?php echo $alertId ?>">Открыть <?php echo $alertStatus ?></button>


    <?php
    $alertId = "alert4";
    $alertMessage = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dicta dolores ducimus et illo iure magni non perspiciatis sequi sunt.";
    $alertHeading = "Ошибка!";
    $alertClosable = false;
    $alertStatus = "error";
    include("components/alerts/alert.php")
    ?>

    <button class="button" data-alert="#<?php echo $alertId ?>">Открыть <?php echo $alertStatus ?></button>


  <div class="" style="height: 700px"></div>

  <button class="button" data-alert="#alert5">Открыть со скроллом к алерту</button>

  <button class="button" data-alert="#alert5" data-alert-scroll="false">Открыть без скролла к алерту</button>


</div>
