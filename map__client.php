<?php
/*
Template Name: map__client
*/

get_header();
?>


  <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    <span class="orange">КАРТА</span> пути клиента (Customer Journey Map)
                </h1>
				<?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__market__descr">
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
            <h2 class="extra__grade__header">
                <span class="orange">ЗАДАЧИ</span> исследования Customer Journey Map
            </h2>

            <div class="extra__grade__container extra__mysteryShopping__container-middle">
                <div class="extra__grade__left extra__mysteryShopping__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Понять поведение и мотивацию клиентов на каждом этапе пути клиента
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Выявить сильные и слабые стороны взаимодействия клиентов с вашим брендом
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Определить ключевые моменты и точки контакта, которые оказывают наибольшее влияние на клиентское
                        решение
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Идентифицировать возможности для улучшения клиентского опыта и повышения лояльности к компании
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Разработать персонализированные стратегии и тактики взаимодействия с клиентами на каждом этапе
                    </p>
                    </p>

                </div>
                <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/map-client1440.png">
                        <img class="picture__img extra__map-client-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/map-client1440.png" alt="map-client">
                      </picture>
                </div>
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

        <section class="extra__methods">
            <h2 class="extra__methods__header">
                <span class="orange">ЭТАПЫ</span> проведения проверки Customer Journey Map
            </h2>

            <ul class="extra__survey__stages__list">
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">01</span>
                    <p class="extra__survey__stages__descr">
                        Изучение специфики бизнеса Заказчика, разработка методических материалов, подготовка инструкций
                        для проверяющих и легенд проверок, проработка формата отчета.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">02</span>
                    <p class="extra__survey__stages__descr">
                        Подбор и обучение проверяющих, координация работы сотрудников
                        в регионах, проведение пилотных проверок для оптимизации методологии.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">03</span>
                    <p class="extra__survey__stages__descr">
                        Проведение проверок, заполнение анкет.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">04</span>
                    <p class="extra__survey__stages__descr">
                        Контроль сроков и качества выполнения работ, подготовка и анализ массива данных, включая
                        статистические показатели и расчет индексов.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">05</span>
                    <p class="extra__survey__stages__descr">
                        Написание итоговых отчетов, подготовка выводов и рекомендаций
                        на основе трендов отрасли.
                    </p>
                </li>
            </ul>
            <button class="btn extra__grade__btn extra__mysteryShopping__control__btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
        </section>
    </div>

  <?php
    get_footer();