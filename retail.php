<?php
/*
Template Name: retail
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    Розничная
                    <span class="orange">ТОРГОВЛЯ</span>
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__retail__descr">
                    <?php echo esc_html($main_descr); ?>
		<?php
}
?>
                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">
        <section class="extra__methods">
            <h2 class="extra__grade__header">
                В каких <span class="orange">
                    СФЕРАХ
                </span> мы проводим данное исследование
            </h2>

            <ul class="extra__methods__list extra__retail__list">
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/t-shirt-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах одежды и
                        обуви</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/bear-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах детских
                        товаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/truck-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Продуктовых
                        магазинах</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/laptop-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах электроники
                        и бытовой техники</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/makeup-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах косметических
                        товаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/earrings-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах
                        аксессуаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/smartphone-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Салоны связи</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/brilliant-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Ювелирные салоны</span>
                </li>
            </ul>
        </section>

        <section class="extra__grade">
            <h2 class="extra__grade__header">КАКИЕ <span class="orange">ЗАДАЧИ</span> решают проверки “Тайным
                покупателем” в сфере розничной торговли?</h2>

            <div class="extra__grade__container  column  retail-container-middle">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценка качества обслуживания в магазинах сети для создания положительного опыта покупателей и
                    увеличения лояльности
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Оценка бизнес-процессов при оформлении доставки товара через интернет-магазин для обеспечения
                    удобства и эффективности процесса заказа и доставки
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Проверка работы службы подбора персонала в магазинах сети и офисе компании с помощью тайного
                    соискателя,
                    чтобы обеспечить более эффективный рекрут и сократить текучку кадров
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Опросы удовлетворенности клиентов для получения обратной связи, выявления проблем и улучшения
                    качества товаров
                    и услуг
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Аудит мерчандайзинга для оценки правильности размещения товаров, их видимости и привлекательности
                    для потребителей
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Мониторинг конкурентов как в офлайн, так и в онлайн среде для анализа и сравнения продуктов, цен,
                    акций
                    и маркетинговых стратегий конкурентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Опросы сотрудников для оценки их мнений, мотивации, улучшения внутренних бизнес-процессов и создания
                    благоприятного рабочего окружения
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Аудит торговой точки для оценки внешнего оформления, витрин, уровня сервиса и общей атмосферы
                    магазина
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Исследования рынка, включая анализ потребительского поведения, предпочтений, трендов, а также
                    изучение новых сегментов рынка и определение потенциала для развития
                </p>



            </div>
        </section>



        <section class="extra__feedback" id="form-container">
            <div class="extra__feedback__container">
                <h4 class="extra__feedback__header">
                    закажите консультацию сейчас
                </h4>

                <div class="extra__feedback__right">
                                    <form action="#" class="extra__feedback__form" method="post"  id="feedback-form-1">
    <input type="text" name="name" class="feedback__input" placeholder="Имя" minlength="3" required>
	<input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
										<div class="delivered">
			  </div>
			  <button type="submit" class="btn feedback__btn" name="submit" id="submit-feedback-1">Отправить</button>
    <div class="extra__checkbox-wrapper">
        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">Я согласен на обработку персональных данных</label>
    </div>
			</form>
                </div>
            </div>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает проверка <span class="orange">ТАЙНЫМ</span> покупателем? </h2>
            <div class="extra__grade__container  retail-container-down">
                <div class="extra__grade__left extra__retail__left">
					<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
                    <p class="extra__grade__descr">
						<?php echo $descr_1; ?>	
                    </p>
                    <p class="extra__grade__descr mt20">
                        <?php echo $descr_2; ?>	
                    </p>
					 <?php
    }
}
?>
					      <button class="btn extra__grade__btn extra__content__btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
                </div>
               <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/retail.png">
                        <img class="picture__img  extra__grade__img extra__retail-img"
                         src="https://brandmetrika.ru/wp-content/uploads/2023/09/retail.png" alt="retail">
                      </picture>
                </div>
            </div>

        </section>





    </div>


    <?php
    get_footer();