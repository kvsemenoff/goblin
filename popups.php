<?php require_once('includes/header.php'); ?>
<?php require_once('includes/header_top.php'); ?>
<br>
<div align="center" width="200">
<a href="#db-form1" name="modal">Попап1</a><br><br>
<a href="#db-form2" name="modal">Попап2</a><br><br>
<a href="#db-form3" name="modal">Попап3</a><br><br>
<a href="#thanks" name="modal">Попап Спасибо</a>
</div>
<br>
<div id="mask"></div>
<div  class="window" id="db-form1">
  <div class="db-popaps-form1" >
    <h1 class="db-popaps-h1">Заказать обратный звонок</h1>
    <form action="#" method="post" class="db-form-1 form1">
      <input type="text" name="uname" class="input-view input-view_width input-view input-view_db-popaps1" placeholder="Введите ваше имя"><br>
      <input type="email" name="email" class="input-view input-view_width input-view_db-popaps1" placeholder="Укажите вашу почту"><br>
      <textarea name="text" class="textarea-view_db-popaps1" id="" cols="30" rows="8" placeholder="Ваш комментарий"></textarea><br>
      <input type="submit" name="submit" class="submit-view submit-view-width db-submit-popaps" value="Отправить сейчас">
    </form>
    <span class="db-close1 dd-close"></span>
  </div>
</div>
<div class="window" id="db-form2">
  <div class="db-popaps-form2">
    <h1 class="db-popaps-h1">Заказать обратный звонок</h1>
    <form action="#" method="post" class="db-form-1">
      <input type="text" name="uname" class="input-view input-view_width input-view input-view_db-popaps2" placeholder="Введите ваше имя"><br>
      <input type="email" name="email" class="input-view input-view_width input-view_db-popaps2" placeholder="Укажите вашу почту"><br>
      <textarea name="text" class="textarea-view_db-popaps2" id="" cols="30" rows="8" placeholder="Ваш комментарий"></textarea><br>
      <input type="submit" name="submit" class="submit-view submit-view-width db-submit-popaps" value="Отправить сейчас">
    </form>
    <span class="db-close1 dd-close"></span>
  </div>
</div>
<div class="window" id="db-form3">
  <div class="db-popaps-form3">
    <h1 class="db-popaps2-h1">Заказать обратный звонок</h1>
    <form action="#" method="post" class="db-form-1">
      <input type="text" name="uname" class="input-view input-view_width input-view input-view_db-popaps3" placeholder="Введите ваше имя"><br>
      <input type="email" name="email" class="input-view input-view_width input-view_db-popaps3" placeholder="Укажите вашу почту"><br>
      <textarea name="text" class="textarea-view_db-popaps3" id="" cols="29" rows="8" placeholder="Ваш комментарий"></textarea><br>
      <input type="submit" name="submit" class="submit-view submit-view-width db-submit-popaps" value="Отправить сейчас">
    </form>
    <span class="db-close2 dd-close"></span>
  </div>
</div>
<div class="window2" id="thanks">
  <div class="db-popaps-form4">
    <img src="img/db-message.png" alt="img"><br>
    <h1 class="db-message-h1">Ваша заявка<br>
      успешно отправлена</h1>
      <p class="db-message-p">наш представитель свяжется с вами в<br> ближайшее время</p>
      <a href="#" class="db-message-a dd-close">ЗАКРЫТЬ</a>
      <span class="db-close2 dd-close"></span>
    </div>
  </div>
  <?php require_once('includes/footer.php'); ?>


  
</body>
</html>
