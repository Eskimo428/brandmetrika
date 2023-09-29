<?php
/*
Template Name: parsing
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    <span class="orange">
                        ПАРСИНГ
                    </span> данных
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__parsing__descr">
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
            <h2 class="extra__grade__header parsing-header">
                <span class="orange">ПАРСИНГ</span>
                может быть двух видов
            </h2>

            <div class="extra__parsing__container__type">
                <h3 class="extra__parsing__type__subtitle">
                    ✓ Технический <span class="orange">ПАРСИНГ</span> веб-сайтов
                </h3>

                <p class="extra__parsing__type__descr">
                    Позволяет выявлять различные технические проблемы на страницах интернет-ресурсов, такие как битые
                    ссылки, неправильная настройка микроразметки, неполные описания, дублирование товаров и другие
                    технические задачи.
                </p>
				

            </div>

            <p class="extra__header__descr extra__type__descr extra-parsing-descr">
                ✓ Парсинг для развития бизнеса, который помогает решать множество разнообразных
                <span class="orange">ЗАДАЧ</span>
            </p>
            <div
            class="extra__grade__container extra__mysteryShopping__container-middle extra__parsing__container-middle"
          >
            <div class="extra__grade__left extra__mysteryShopping__left extra__parsing__left">
            <ul class="extra__parsing__list-up">
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Эффективное установление и проверка стоимости товаров и услуг путем отслеживания цен конкурентов
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Актуализация стоимости товаров в соответствии с данными от поставщиков
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Мониторинг соблюдения рекомендуемых розничных цен со стороны партнеров
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Получение полезных данных для исследования рынка в своей нише, включая анализ объемов продаж
                        у конкурентов
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Получение контактов потенциальных клиентов, таких как целевая аудитория из социальных сетей
                        или компаний в определенном регионе 
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">06</span>
                        Получение и использование актуальной информации о потенциальных сотрудниках на рынке труда
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">07</span>
                        Автоматическое обновление информации на вашем веб-сайте или интернет-магазине из других
                        источников, таких как маркетплейсы
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">08</span>
                        Анализ структуры веб-сайтов конкурентов с целью улучшения и развития своего интернет-присутствия
                    </p>
                </li>
                <li>
                    <p class="extra__mysteryShopping__task__item ">
                        <span class="extra__mysteryShopping__task__figure orange">09</span>
                        Отслеживание отзывов клиентов на сторонних платформах, что позволяет быстро на них реагировать
                    </p>
                </li>
            </ul></div>
            <div class="extra__grade__right extra__mysteryShopping__right extra__parsing__right">
                <picture>
                    <img class="picture__img  extra__grade__img extra__parsing-img"
                     src="https://brandmetrika.ru/wp-content/uploads/2023/09/parsing3600-1.png" alt="parsing">
                  </picture>
              </div>
            
            </div>
            <div class="extra__grade__container  extra__black__container extra__parsing-container">
               
                    <p class="extra__grade__descr extra__parsing__type__descr parsing-descr-2">
                        Для любой компании важно регулярно получать новую информацию и актуализировать имеющиеся данные,
                        минимизируя риск получения недостоверной информации.
                        Мы предлагаем комплексные решения для сбора и систематизации данных, начиная от настройки
                        парсера и заканчивая их обработкой и интеграцией на вашем веб-сайте.
                        Мы разрабатываем индивидуальные алгоритмы программ с учетом целей и задач каждого заказчика,
                        тщательно учитывая все требования и пожелания.
                        Наши специалисты обладают обширным опытом и хорошо знакомы с технологиями,
                        поэтому мы быстро решаем любые возникающие проблемы при работе с парсером.
                    </p>
            
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
                    </form>
                </div>
            </div>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">
                <span class="orange">ПРЕИМУЩЕСТВА,</span>
                которые мы предлагаем вам
            </h2>
            <ul class="extra__parsing__list-down">
				<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
				
				
                <li>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">
						 <?php echo $descr_1; ?>	
						</span>
                         <?php echo $descr_2; ?>	
                    </p>
                </li>
             <?php
    }
}
?>
            </ul>
		
            <p class="extra__grade__descr extra__type_descr__parsing mt48 parsing-descr-down"> Парсинг является законным, если не нарушает запретов, установленных
                законодательством Российской Федерации, в частности не противоречит
                <a href="http://www.kremlin.ru/acts/constitution/item" class="link__parsing"> статье 29 Конституции РФ.</a>
                <br>
                В нашей компании парсинг не предполагает незаконные действия, такие как сбор контента, защищенного
                авторским правом, несанкционированный доступ или DDOS-атаку. Наши алгоритмы сбора данных не нагружают
                целевые сайты и не создают проблем в их работе.
                Автоматизируйте свои процессы по сбору и обработке информации. Современные возможности парсинга
                практически безграничны.
            </p>
            <button class="btn extra__grade__btn extra__mysteryShopping__control__btn parsing-btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
					
			
        </section>


    </div>





    <?php
    get_footer();