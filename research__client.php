<?php
/*
Template Name: research__client
*/

get_header();
?>



       <main>
        <div class="extra__img__container__main extra__img__researchClient__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main white-text">
                    Исследования <br>
                    <span class="orange">КЛИЕНТОВ</span>
                </h1>
                 <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__store__descr">
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
                Какие <span class="orange">
                    ЗАДАЧИ
                </span> помогают решить исследования клиентов? 
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
            ?>            </ul>
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



        <section class="extra__methods">
            <h2 class="extra__methods__header extra__header-researchClient">
                Какие
                <span class="orange">МЕТОДЫ</span> исследования клиентов мы используем
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket research-object-icon-container">
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/telephone3-icon.svg" alt="tel-survey">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Телефонные
                        опросы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/people-icon.svg" alt="">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Личные
                        опросы (face to
                        face)</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/groups-icon.svg" alt="">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/focus-group/">Фокус
                        группы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/laptop2-icon.svg" alt="">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Online-опросы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/interview-icon.svg" alt="">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/interview/">Глубинные
                        интервью</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/binoculars-icon.svg" alt="">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text extra__methods__clientResearch__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/off-observation/">Наблюдения
                        за покупателями
                        торговой точки</a>
						</span>
                </li>
            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает <span class="orange">ИССЛЕДОВАНИЕ</span> клиентов?</h2>


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
            ?>            </ul>


            <div class="extra__grade__container  extra__grade__container__client">
                <div class="extra__grade__left extra__researchBrand__container">
                   <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
					
                    <p class="extra__grade__descr">
                    <p class="extra__grade__descr__item extra__store__descr__item ">
                     <?php echo $descr_1; ?>
                    </p>
                    <p class="extra__grade__descr__item extra__store__descr__item ">
                     <?php echo $descr_2; ?>
                    </p>
                    </p>
				                     <?php
    }
}
?>
                    <button class="btn extra__grade__btn">
				<a class="research__link" href="#form-container">Заказать услугу</a>
				</button>
                </div>
            
            </div>
        </section>







    </div>

    <?php
    get_footer();