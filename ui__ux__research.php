<?php
/*
Template Name: ui/ux
*/

get_header();
?>


      <main>
        <div class="extra__img__container__main extra__img__uiUxResearch__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main white-text">
                    UX/UI
                    <span class="orange">ИССЛЕДОВАНИЯ</span>
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
    <p class="extra__header__descr extra__header__uiux__descr white-text">
        <?php echo esc_html($main_descr); ?>
		<?php
}
?>
    </p>


					
                </p>
				
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
                </span> User Experience и User Interface исследований
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
            <h2 class="extra__methods__header">
                <span class="orange">МЕТОДЫ</span> UX/UI исследований
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket">
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/interview-icon.svg" alt="interview">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/interview/">Глубинные интервью</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/testing-icon.svg" alt="usability">
                    <span
                        class="extra__methods__item-text extra__methods__client__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/usability/">Usability-тестирование</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/schedule-icon.svg" alt="alystic-warm-map">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
							<a class="extra__methods__item-text" href="#form-container">Анализ поведения
                        пользователей
                        (построение тепловых карт)</a>
						</span>
                </li>
                <li class="extra__methods__item extra__monitoring__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/mdi_ab-testing-icon.svg" alt="a-b-test">
                    <span class="extra__methods__item-text extra__methods__client__item-text">
							<a class="extra__methods__item-text" href="#form-container">A/B тестирование</a>
						</span>
                </li>

            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает проведение<span class="orange">UX/UI</span> исследований?</h2>
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
            <div class="extra__grade__container extra__uiux__container">
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