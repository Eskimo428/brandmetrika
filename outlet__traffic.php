<?php
/*
Template Name: outlet__traffic
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__outlet__main">
                    Подсчет проходимости
                    <span class="orange">
                        ТОРОГОВОЙ
                    </span>
                    точки
                </h1>
				 <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__survey__descr">
                 <?php echo esc_html($main_descr); ?>
					  <?php
                }
                ?>

                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">
        <section class="extra__task">
            <h2 class="extra__task__header">
                Подсчет проходимости
				 <span class="orange">
               ТОРГОВОЙ
                </span>
				точки решает следующие ЗАДАЧИ
               
            </h2>

            <ul class="extra__task__list">
                    <?php
            $content = get_field('content');
            if ($content) {
                foreach ($content as $content_item) {
                    $content_header = esc_html($content_item['content-header']);
                    $content_descr = esc_html($content_item['content-descr']);
            ?>
                    <li class="extra__task__item">
                        <h3 class="extra__task__title">
                            <?php echo  $content_header; ?>
                        </h3>
                        <p class="extra__task__descr">
                            <?php echo  $content_descr; ?>
                        </p>
                    </li>
            <?php
                }
            }
            ?>  
            </ul>

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
                <span class="orange">ЭТАПЫ</span> проведения проходимости торговой точки
            </h2>

            <ul class="extra__survey__stages__list extra__outlet__stages__list">
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">01</span>
                    <h5 class="extra__audit__stages__subtitle">Сбор данных</h5>
                    <p class="extra__survey__stages__descr">
                        Мы используем передовое
                        фото- и видеооборудование
                        для фиксации проходимости посетителей в определенном месте. Это позволяет нам точно определить
                        входящий и проходящий трафик.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">02</span>
                    <h5 class="extra__audit__stages__subtitle">Анализ данных</h5>
                    <p class="extra__survey__stages__descr">
                        Мы тщательно анализируем полученные данные, проводим подсчет посетителей в различные периоды
                        времени
                        и предоставляем информацию
                        о социально-демографической структуре проходящего потока людей.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">03</span>
                    <h5 class="extra__audit__stages__subtitle">Формирование отчета</h5>
                    <p class="extra__survey__stages__descr">
                        Мы подготавливаем детальный аналитический отчет, содержащий ключевые показатели проходимости,
                        графики, статистику и рекомендации. Этот отчет поможет вам принять обоснованные решения и
                        разработать эффективные стратегии развития бизнеса.
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