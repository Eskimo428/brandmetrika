<?php
/*
Template Name: financial
*/

get_header();
?>



       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__financial__main">
                    <span class="orange">ФИНАНСОВЫЙ</span> сектор
                </h1>
					<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__financial__descr">
                  <?php echo esc_html($main_descr); ?>
		<?php
}
?>  
                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">
        <section class="extra__grade">
            <h2 class="extra__grade__header">КАКИЕ <span class="orange">ЗАДАЧИ</span> решают проверки “Тайным
                посетителем” в сфере финансовых услуг?</h2>
            <div class="extra__grade__container  column financial-container-middle">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценка сервиса в офисах компании и оценка соблюдения стандартов обслуживания
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Оценка качества обслуживания страховыми агентами на объектах, включая передачу полной информации о
                    продуктах
                    и услугах клиентам
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Оценка бизнес-процессов при оформлении банковских и страховых продуктов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Проверка работы службы подбора персонала компании с помощью тайного соискателя, с целью оценки
                    работы рекрутинговой службы
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Опросы удовлетворенности клиентов для получения обратной связи, выявления проблем и повышения уровня
                    сервиса и доверия к компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Мониторинг конкурентов, включая условия предлагаемых продуктов, особенности сервиса и другие
                    параметры
                    для разработки конкурентоспособных стратегий
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Опросы сотрудников для определения уровня удовлетворенности условиями труда, вовлеченности в
                    корпоративную культуру
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Аудит офисного помещения для осуществления контроля за внешним видом сотрудников, состоянием рабочих
                    мест персонала, состояния офисного пространства, удобства для клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Аудио и видеомониторинг для оценки качества обслуживания клиентов на основе видеозаписей и
                    разговоров сотрудников с клиентами
                </p>

                <div class="extra__black__container mt48 telecom-black-container">
                        <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
                            Кроме проверки Тайным посетителем, в финансовом секторе бизнеса применяются и другие методы
                            маркетинговых исследований, такие как анализ данных, демографические исследования,
                            социальные исследования, экспертные оценки и другие инструменты, которые помогают более
                            глубоко и полно изучать потребности клиентов и требования рынка.
                        </p>
                </div>
            </div>
        </section>



        <section class="extra__feedback"  id="form-container">
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
            <h2 class="extra__grade__header financial-header"><span class="orange">ПРЕИМУЩЕСТВА</span> регулярных проверок «Тайный клиент»</h2>
            <div class="extra__grade__container retail-container-down">
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
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/financial1440.png">
                        <img class="picture__img  extra__grade__img extra__financial-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/financial1440.png" alt="financial">
                      </picture>
                </div>
            </div>
		</section>
      </div>



    <?php
    get_footer();