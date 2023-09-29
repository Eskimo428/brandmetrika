<?php
/*
Template Name: usability
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__usability__main">
                    <span class="orange">
                        USABILITY-</span>тестирование
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__survey__descr ">
                    <?php echo esc_html($main_descr); ?>
		<?php
}
?>
                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">
        <section class="extra__grade usability-container-up">
            <h2 class="extra__grade__header">Usability-тестирования помогает решать следующие <span
                    class="orange">ЗАДАЧИ</span></h2>

            <div class="extra__grade__container  extra__mysteryShopping__container-middle">
                <div class="extra__grade__left extra__mysteryShopping__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Оценка навигации и структуры веб-сайта или приложения
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Проверка понятности и интуитивности интерфейса для пользователя
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Идентификация препятствий, с которыми сталкиваются пользователи при взаимодействии с сайтом
                        или приложением
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Определение уровня удовлетворенности пользователей и выявление их потребностей и ожиданий
                        при работе с сайтом или приложением
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Сравнение работы Вашего веб-сайта или приложения с аналогичными продуктами конкурентов
                    </p>
                    </p>

                </div>
                <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/usabilityTest.png">
                        <img class="picture__img extra__grade__img extra__usability-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/usabilityTest.png" alt="usabilityTest">
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
                <span class="orange">ЭТАПЫ</span> проведения проекта Usability-тестирования
            </h2>

            <ul class="extra__survey__stages__list extra__usability__stages__list">
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">01</span>
                    <h5 class="extra__audit__stages__subtitle">Планирование и подготовка</h5>
                    <ul class="extra__usability__stage__subList">
                        <li class="extra__usability__stage__item">Определение целей и задач тестирования.
                        </li>
                        <li class="extra__usability__stage__item">
                            Разработка тестовых сценариев
                            и сценариев использования.
                        </li>
                        <li class="extra__usability__stage__item">
                            Подбор участников тестирования.
                        </li>
                    </ul>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">02</span>
                    <h5 class="extra__audit__stages__subtitle">Проведение тестирования</h5>
                    <ul class="extra__usability__stage__subList">
                        <li class="extra__usability__stage__item">
                            Проведение сеансов тестирования
                            с участием пользователей.
                        </li>
                        <li class="extra__usability__stage__item">
                            Наблюдение и запись действий
                            и комментариев пользователей.
                        </li>
                        <li class="extra__usability__stage__item">
                            Сбор данных о проблемных
                            моментах и отзывах пользователей.
                        </li>
                    </ul>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">03</span>
                    <h5 class="extra__audit__stages__subtitle">Анализ и интерпретация данных</h5>
                    <ul class="extra__usability__stage__subList">
                        <li class="extra__usability__stage__item">
                            Обработка результатов
                            тестирования.
                        </li>
                        <li class="extra__usability__stage__item">
                            Выявление основных проблем
                            и паттернов использования.
                        </li>
                        <li class="extra__usability__stage__item">
                            Формулировка рекомендаций
                            по улучшению пользовательского опыта.
                        </li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="extra__grade mt350">
            <h2 class="extra__grade__header">
				<span
                    class="orange">РЕЗУЛЬТАТЫ</span>
				Usability-тестирования включают</h2>
            <div class="extra__grade__container column usability_container-down">
              <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
				
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">
					 <?php echo $descr_1; ?>	
					</span>
                    <?php echo $descr_2; ?>	
                </p>
				                    <?php
    }
}
?>
               
             
            </div>
			   <button class="btn extra__grade__btn parsing-btn">
				<a class="research__link" href="#form-container">Заказать услугу</a>
				</button>
        </section>


    </div>

    <?php
    get_footer();