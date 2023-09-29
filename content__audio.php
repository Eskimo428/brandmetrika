<?php
/*
Template Name: content__audio
*/

get_header();
?>

<body>


    <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    <span class="orange">
                        АУДИО
                    </span>и видеомониторинг
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
                <span class="orange">
                    ЗАДАЧИ
                </span> аудио и видеомониторинга
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
                <span class="orange">АНАЛИТИКА</span> собранных данных включает в себя
            </h2>
            <div class="extra__grade__container extra__mysteryShopping__container-middle">
                <div class="extra__grade__left extra__mysteryShopping__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Идентификация ключевых проблем и потенциальных улучшений
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Анализ эмоционального отношения сотрудников к клиентам
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Сравнительный анализ работоспособности сотрудников и выявление наилучших практик
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Рекомендации по улучшению качества обслуживания клиентов и оптимизации процессов
                    </p>

                    </p>
                </div>
			   <div class="extra__grade__right extra__mysteryShopping__right">
                <picture>
                    <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/audio-video3600.png">
                    <img class="picture__img  extra__grade__img extra__audio-video-img" 
                    src="https://brandmetrika.ru/wp-content/uploads/2023/09/audio-video3600.png" alt="audio-video">
                  </picture> 
				   </div>
            </div>
		 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
		         <p class="extra__content__descr descr-tablet">
                         <?php echo $descr_1; ?>	
					                    <?php
    }
}
?>
                    </p>
            <button class="btn extra__grade__btn extra__content__btn">
		<a class="research__link" href="#form-container">Заказать услугу</a>
		</button>
        </section>


    </div>



    <?php
    get_footer();