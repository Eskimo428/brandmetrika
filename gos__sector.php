<?php
/*
Template Name: gos sector
*/

get_header();
?>

    <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    Государственный сектор
                    <span class="orange">БИЗНЕСА</span>
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__market__descr gos-main-descr">
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
            <h2 class="extra__methods__header">
                Основные
                <span class="orange">ЗАДАЧИ</span>
                маркетингового исследования

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
                <h4 class="extra__feedback__header">закажите консультацию сейчас</h4>

                <div class="extra__feedback__right">
                    <form action="#" class="extra__feedback__form" method="post" id="feedback-form-1">
                        <input type="text" name="name" class="feedback__input" placeholder="Имя" minlength="3" required>
                        <input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
                        <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11"
                            maxlength="25" required>
                        <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30"
                            rows="10"></textarea>
                        <div class="delivered">
                        </div>
                        <button type="submit" class="btn feedback__btn" name="submit"
                            id="submit-feedback-1">Отправить</button>
                        <div class="extra__checkbox-wrapper">
                            <input type="checkbox" id="agreement" name="agreement" required>
                            <label for="agreement">Я согласен на обработку персональных данных</label>
                        </div>

                    </form>
                </div>
            </div>
        </section>


        <section class="extra__methods">
            <h2 class="extra__grade__header">
                Какие
                <span class="orange">
                    МЕТОДЫ
                </span>
                маркетингового исследования мы используем?

            </h2>

            <ul class="extra__methods__list extra__medical__list gos-container-icon">
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/survey-icon.svg" alt="survey">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Опросы</a>
						</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/laptop2-icon.svg" alt="web">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">
						<a class="extra__methods__item-text" href="#form-container">Оценка веб-ресурсов</a>
                    </span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/anketa.svg" alt="anketa">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">
						<a class="extra__methods__item-text" href="#form-container">Анкетирование</a>
                    </span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/analysis-icon.svg" alt="analysis">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">
						<a class="extra__methods__item-text" href="#form-container">Анализ</a>                  
                    </span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/binoculars-icon.svg" alt="binokl">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/off-observation/">Наблюдение</a> 
                    </span>
                </li>
            </ul>
        </section>


        <section class="extra__grade">

            <div class="extra__grade__container medical-container-tablet-down">
                <div class="extra__grade__left extra__retail__left medical-left-down">
					<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
                    <p class="extra__grade__descr gos-descr-down">
                         <?php echo $descr_1; ?>	
                    </p>
					
					 <?php
    }
}
?>
					    <button class="btn extra__grade__btn extra__content__btn">
                <a class="research__link" href="#form-container">Заказать исследование</a>
            </button>
                </div>
                <div class="extra__grade__right extra__medical-right-down">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/gos-sector.png">
                        <img class="picture__img  extra__grade__img extra__gos-img"
                            src="https://brandmetrika.ru/wp-content/uploads/2023/09/gos-sector.png" alt="gos-img">
                    </picture>
                </div>
            </div>
        </section>



    </div>


    <?php
    get_footer();