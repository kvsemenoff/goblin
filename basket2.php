<?php require_once('/includes/header.php') ?>
<?php require_once('/includes/header_top.php') ?>
<section class="purchase">
  <div class="container basket__container">
          <nav class="purchase__breadcrumbs">
              <ul class="breadcrumbs__list">
                  <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Главная</a></li>
                  <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Корзина</a></li>
                  <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Оформление заказа</a></li>
              </ul>
          </nav>
          <h1 class="purchase__header">Оформление заказа</h1>
          <div class="purchase__basket">
              <div class="purchase__basket-items">
                  <span class="purchase__basket-title">Товары в вашей корзине</span>
                  <ul class="purchase__basket-list">
                      <li class="purchase__basket-item"><img src="/img/purchase-items/ssd.jpg" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/redbox.jpg" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/nut.png" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/tank.jpg" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/ssd.jpg" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/redbox.jpg" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/nut.png" alt="" class="purchase__basket-img"></li>
                      <li class="purchase__basket-item"><img src="/img/purchase-items/tank.jpg" alt="" class="purchase__basket-img"></li>
                  </ul>
              </div>
              <div class="purchase__basket-socials clearfix">
                  <div class="socials__left">
                      <div class="socials__left-content">
                          <div class="socials__left-imgwrap">
                              <img src="/img/icons/socials_left.png" alt="" class="socials__left-img">
                          </div>
                          <div class="socials__left-text">
                              <p class="socials__left-bold">Зайти на Opershop перед покупкой</p>
                              <p class="socials__left-light">для сохранения адреса доставки и других данных дальнейших покупок</p>
                          </div>
                      </div>
                  </div>
                  <div class="socials__right">
                      <div class="socials__right-block">
                          <ul class="socials__right-list">
                              <li class="socials__right-item signin"><a href="#" class="socials__right-sign">Войти</a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link vk"></a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link fb"></a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link ok"></a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link tw"></a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link mailru"></a></li>
                              <li class="socials__right-item"><a href="#" class="socials__right-link ggl"></a></li>
                              <li class="socials__right-item"></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="purchase__item">
              <table class="purchase__table">
                  <thead>
                      <tr>
                          <th>Товар</th>
                          <th>Краткая информация</th>
                          <th>Кол-во</th>
                          <th>Цена</th>
                      </tr>
                  </thead>
                  <tfoot></tfoot>
                  <tbody>
                      <tr class="item__tr">
                          <td class="purchase__item-pic">
                              <img src="/img/purchase-items/ssd_big.jpg" alt="" class="purchase__iten-img"></td>
                          <td class="purchase__item-desc">
                              <p class="purchase__item-title">Toshiba HDTS425EZSTA</p>
                              <p class="purchase__item-subtitle">Оперативная память</p>
                              <p class="purchase__item-info">Белый / XL 48 / 480 ГБ / 2.5” / SATA III</p>
                              <p class="purchase__item-gifts">+ 2 подарка (дополнительная щетка, набор валиков)</p>
                          </td>
                          <td class="purchase__item-count">
                              <div class="df-number increase">
                                    <span class="dfbutton dfbutton2">-</span>
                                    <input type="text" value="1" disabled="disabled">  
                                    <span class="dfbutton dfbutton3">+</span>
                                </div>
                          </td>
                          <td class="purchase__item-price">
                              <p class="totalprice"><span class="totalprice__count"></span> Р</p>
                              <p class="oneprice">1 шт.: <span class="oneprice__count">26 190</span> р</p>
                              <a href="#" class="close__btn"></a>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="purchase__form-block clearfix">
              <form action="#" class="purchase__form">
                  <div class="purchase__form-left">
                      <fieldset class="purchase__form-courier">
                          <label class="radio-lable purchase__form-label">
                                <input class="checkbox" type="radio" name="checkbox-delivery" checked>
                                <span class="checkbox-custom purchase__custom"></span>
                                <p class="label">КУРЬЕРОМ ПО МОСКВЕ <span class="purchase__form-span">(курьером до двери)</span></p>
                                <span class="purchase__form-action">ПОСЛЕ 7 ДЕКАБРЯ БЕСПЛАТНО</span>
                          </label>
                          <div class="purchase__form-fields active__field">
                              <label class="purchase__text-label">АДРЕС ДОСТАВКИ</label>
                              <input type="text" name="city__street" class="city__street purchase__input-text" placeholder="Город, улица">
                              <input type="text" name="apartment__office" class="apartment__office purchase__input-text" placeholder="Квартира или офис">
                              <label class="purchase__text-label">ДАННЫЕ ПОКУПАТЕЛЯ<span class="label__span">(для курьера и соббщений о статусе заказа)</span></label>
                              <input type="text" name="phone__number" class="phone__number purchase__input-text" placeholder="Укажите ваш номер тел">
                              <input type="email" name="purchase__email" class="purchase__email purchase__input-text" placeholder="Электронная почта">
                              <input type="text" name="purchase__name" class="purchase__name purchase__input-text" placeholder="Имя и фамилия">
                          </div>
                      </fieldset>
                      <fieldset>
                          <label class="radio-lable purchase__form-label">
                                <input class="checkbox" type="radio" name="checkbox-delivery" >
                                <span class="checkbox-custom purchase__custom"></span>
                                <p class="label">ЭНЕРГИЯ<span class="purchase__form-span">(до подъезда) (6 дней)</span></p>
                                <span class="purchase__form-terms">после 10 декабря <span class="purchase__form-price">3 425 р</span></span>
                             </label>
                             <div class="purchase__form-fields">
                              <label class="purchase__text-label">АДРЕС ДОСТАВКИ</label>
                              <input type="text" name="city__street" class="city__street purchase__input-text" placeholder="Город, улица">
                              <input type="text" name="apartment__office" class="apartment__office purchase__input-text" placeholder="Квартира или офис">
                              <label class="purchase__text-label">ДАННЫЕ ПОКУПАТЕЛЯ<span class="label__span">(для курьера и соббщений о статусе заказа)</span></label>
                              <input type="text" name="phone__number" class="phone__number purchase__input-text" placeholder="Укажите ваш номер тел">
                              <input type="email" name="purchase__email" class="purchase__email purchase__input-text" placeholder="Электронная почта">
                              <input type="text" name="purchase__name" class="purchase__name purchase__input-text" placeholder="Имя и фамилия">
                          </div>
                      </fieldset>
                      <fieldset>
                             <label class="radio-lable purchase__form-label">
                                <input class="checkbox" type="radio" name="checkbox-delivery" >
                                <span class="checkbox-custom purchase__custom"></span>
                                <p class="label">СПСР ЭКСПРЕСС<span class="purchase__form-span">(курьером до двери) (2 - 3 дня)</span></p>
                                <span class="purchase__form-terms">8.12 - 9.12<span class="purchase__form-price">850 р</span></span>
                             </label>
                             <div class="purchase__form-fields">
                              <label class="purchase__text-label">АДРЕС ДОСТАВКИ</label>
                              <input type="text" name="city__street" class="city__street purchase__input-text" placeholder="Город, улица">
                              <input type="text" name="apartment__office" class="apartment__office purchase__input-text" placeholder="Квартира или офис">
                              <label class="purchase__text-label">ДАННЫЕ ПОКУПАТЕЛЯ<span class="label__span">(для курьера и соббщений о статусе заказа)</span></label>
                              <input type="text" name="phone__number" class="phone__number purchase__input-text" placeholder="Укажите ваш номер тел">
                              <input type="email" name="purchase__email" class="purchase__email purchase__input-text" placeholder="Электронная почта">
                              <input type="text" name="purchase__name" class="purchase__name purchase__input-text" placeholder="Имя и фамилия">
                          </div>
                      </fieldset>
                    <fieldset>
                             <label class="radio-lable purchase__form-label">
                                <input class="checkbox" type="radio" name="checkbox-delivery" >
                                <span class="checkbox-custom purchase__custom"></span>
                                <p class="label">ПОЧТА РОССИИ<span class="purchase__form-span">предоплата</span></p>
                                <span class="purchase__form-terms">до 11 декабря<span class="purchase__form-price">1 645 р</span></span>
                             </label>
                             <div class="purchase__form-fields">
                              <label class="purchase__text-label">АДРЕС ДОСТАВКИ</label>
                              <input type="text" name="city__street" class="city__street purchase__input-text" placeholder="Город, улица">
                              <input type="text" name="apartment__office" class="apartment__office purchase__input-text" placeholder="Квартира или офис">
                              <label class="purchase__text-label">ДАННЫЕ ПОКУПАТЕЛЯ<span class="label__span">(для курьера и соббщений о статусе заказа)</span></label>
                              <input type="text" name="phone__number" class="phone__number purchase__input-text" placeholder="Укажите ваш номер тел">
                              <input type="email" name="purchase__email" class="purchase__email purchase__input-text" placeholder="Электронная почта">
                              <input type="text" name="purchase__name" class="purchase__name purchase__input-text" placeholder="Имя и фамилия">
                          </div>
                    </fieldset>
                    <div class="purchase__agreement-block">
                        <input type="checkbox" id="purchase__check" class="purchase__agreement-checkbox">
                        <label for="purchase__check" class="purchase__agreement">Я принимаю <a href="#">пользовательское соглашение</a>
                        </label>
                    </div>
                  </div>
                  <div class="purchase__form-right">
                      <p class="purchase__form-payment">Оплата</p>
                      <label class="radio-lable payment__label">
                            <input class="checkbox" type="radio" name="checkbox-payment" checked>
                            <span class="checkbox-custom right__span"></span>
                            <span class="label payment__span">Банковской картой онлайн</span>
                        </label>
                        <label class="radio-lable payment__label">
                            <input class="checkbox" type="radio" name="checkbox-payment" >
                            <span class="checkbox-custom right__span"></span>
                            <span class="label payment__span">Яндекс Деньги</span>
                        </label>
                        <label class="radio-lable payment__label">
                            <input class="checkbox" type="radio" name="checkbox-payment" >
                            <span class="checkbox-custom right__span"></span>
                            <span class="label payment__span">Web-Money</span>
                        </label>
                        <label class="radio-lable payment__label">
                            <input class="checkbox" type="radio" name="checkbox-payment" >
                            <span class="checkbox-custom right__span"></span>
                            <span class="label payment__span">Qiwi</span>
                        </label>
                        <label class="radio-lable payment__label">
                            <input class="checkbox" type="radio" name="checkbox-payment" >
                            <span class="checkbox-custom right__span"></span>
                            <span class="label payment__span">Наличными при получении</span>
                        </label>
                        <p class="payment__price">35 900 р</p>
                        <p class="payment__price delivery__price">С учетом доставки  3 450 р</p>
                        <a href="#thanks" name="modal">
                      <button type="submit"  class="button-1 button-2 payment__button">Отправить заказ</button>
                      </a>
                  </div>
              </form>
          </div>
      </div>
</section>

<?php require_once('includes/protect.php'); ?>  
<?php require_once('includes/shop-goblin.php'); ?>  
<?php require_once('includes/footer.php'); ?>
  
</body>
</html>