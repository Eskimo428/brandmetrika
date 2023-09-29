<?php
/*
Template Name: research__personal
*/

get_header();
?>


      <main>
        <div class="extra__img__container__main extra__img__researchPersonal__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main white-text">
                    Исследования 
                    <span class="orange">ПЕРСОНАЛА</span>
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
                <button class="btn extra__header_btn extra__header_btn__personal">
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
                </span> исследования персонала
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
					 <span class="delivered" style="display: none;">Ваше сообщение отправлено</span>
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
            <h2 class="extra__methods__header extra__header-researchPersonal">
                <span class="orange">МЕТОДЫ</span> исследования персонала которые мы используем
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket research-personal-icon-container">
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/magnifyingGlass-icon.svg" alt="mystery-emploee">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/mystery-empolyee/">Тайный соискатель
                        (mystery employee)</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/telephone3-icon.svg" alt="tel-survey">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Телефонные опросы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/people-icon.svg" alt="survey-face-to-face">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Личные опросы (face to
                        face)</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/laptop2-icon.svg" alt="online-survey">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Online-опросы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/interview-icon.svg" alt="interview">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/interview/">Глубинные интервью</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/groups-icon.svg" alt="focus-group">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/focus-group/">Фокус группы</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/analysis-icon.svg" alt="analystic">
                    <span class="extra__methods__item-text extra__methods__list__researchPersonal-text">
						<a class="extra__methods__item-text" href="#">Анализ вторичных данных</a>
                     </span>
                </li>
            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает <span class="orange">ИССЛЕДОВАНИЕ</span> персонала</h2>


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

            <h2 class="extra__grade__header extra__personal__title-research">Почему проведение <span
                    class="orange">ИССЛЕДОВАНИЯ</span> стоит доверить именно нам?</h2>
            <div class="extra__grade__container extra__researchBrand__container">
                <div class="extra__grade__left extra__grade-descr-down">
                    <p class="extra__grade__descr">
						 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
						
                    <p class="extra__personal__descr__item">
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