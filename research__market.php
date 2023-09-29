<?php
/*
Template Name: research__market
*/

get_header();
?>



       <main>
        <div class="extra__img__container__main extra__img__researchMarket__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main white-text">
                    Анализ
                    <span class="orange">РЫНКА</span>
                </h1>
				 <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__market__descr white-text">
              <?php echo esc_html($main_descr); ?>
                </p>
				 <?php
                }
                ?>
                <button class="btn extra__header_btn">
				<a class="research__link" href="#form-container">Заказать услугу</a>
				</button>
            </div>
        </div>
    </div>
    </main>

    <div class="extra__container">
        <section class="extra__task">
            <h2 class="extra__task__header">
                Основные <span class="orange">
                    ЗАДАЧИ
                </span> анализа рынка
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
                <span class="orange">МЕТОДЫ</span> исследования клиентов
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket">
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/analysis-icon.svg" alt="analystic-data-2">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
						<a class="extra__methods__item-text" href="#form-container">Анализ вторичных
                        данных</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/survey-icon.svg" alt="survey">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Опросы населения</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/Analysis-icon-2.svg" alt="analystic-data-1">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
						<a class="extra__methods__item-text" href="#form-container">Анализ первичных
                        данных</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/parsing-icon.svg" alt="parsing">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/parsing/">Парсинг данных</a>
						</span>
                </li>

            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает проведение <span class="orange">АНАЛИЗА</span> рынка?</h2>


           <ul class="extra__task__list">
                 <?php
            $content = get_field('content_2');
            if ($content) {
                foreach ($content as $content_item) {
                    $content_header_2 = esc_html($content_item['content-header-2']);
                    $content_descr_2 = esc_html($content_item['content-descr-2']);
            ?>
                    <li class="extra__task__item">
                        <h3 class="extra__task__title">
                            <?php echo  $content_header_2; ?>
                        </h3>
                        <p class="extra__task__descr">
                            <?php echo  $content_descr_2; ?>
                        </p>
                    </li>
            <?php
                }
            }
            ?>   
            </ul>

            <h2 class="extra__grade__header extra__personal__title-research">Почему <span class="orange">СТОИТ</span>
                выбрать именно нас?</h2>
            <div class="extra__grade__container extra__researchMarket__container">
                <div class="extra__grade__left uiux-container-descr">
                    <p class="extra__grade__descr">
						 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                          <?php echo $descr_1; ?>	
                        <br>
                       <?php echo $descr_2; ?>
                    </p>
                                   <?php
    }
}
?>   
					
                    </p>
                    <button class="btn extra__grade__btn">
				<a class="research__link" href="#form-container">Заказать услугу</a>
				</button>
                </div>
            </div>
        </section>



    </div>




    <?php
    get_footer();