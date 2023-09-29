<?php
/*
Template Name: client__services
*/

get_header();
?>


  <main>
    <div class="image__container__clientServies extra__img__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main white-text">
                    ОЦЕНКА <span class="orange">КЛИЕНТСКОГО</span> <br>СЕРВИСА
                </h1>
				
                <?php
                $client_services_main_descr = get_field('client-services-main-descr');
                if ($client_services_main_descr) {
                ?>
                    <h4 class="extra__header__descr white-text">
                        <?php echo esc_html($client_services_main_descr); ?>
                    </h4>
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
            Какие <span class="orange">ЗАДАЧИ</span> позволяет решить оценка клиентского сервиса?
        </h2>

        <ul class="extra__task__list">
            <?php
            $client_services_main_content = get_field('client-services-main-content');
            if ($client_services_main_content) {
                foreach ($client_services_main_content as $client_services_main_content_item) {
                    $client_services_main_content_header = esc_html($client_services_main_content_item['client-services-content-header']);
                    $client_services_main_content_descr = esc_html($client_services_main_content_item['client-services-content-descr']);
            ?>
                    <li class="extra__task__item">
                        <h3 class="extra__task__title">
                            <?php echo $client_services_main_content_header; ?>
                        </h3>
                        <p class="extra__task__descr">
                            <?php echo $client_services_main_content_descr; ?>
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
                <h3 class="extra__feedback__header">
                    закажите консультацию сейчас
                </h3>

                <div class="extra__feedback__right">
                     <form action="#" class="extra__feedback__form" method="post"  id="feedback-form-1">
    <input type="text" name="name" class="feedback__input" placeholder="Имя" minlength="3" required>
	<input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
	<div class="delivered"> </div>
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
                Какие
                <span class="orange">МЕТОДЫ</span> оценки клиентского сервиса мы используем
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket research-object-icon-container">
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/magnifyingGlass-icon.svg" alt="Тайный покупатель">
                    <span class="extra__methods__item-text extra__client__services__item-text">
					<a class="extra__methods__item-text" href="https://brandmetrika.ru/mystery-shopping/">Тайный покупатель</a>
					</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/headphone-icon.svg" alt="Тайный звонок">
                    <span class="extra__methods__item-text extra__client__services__item-text">
					<a class="extra__methods__item-text" href="#">Тайный звонок</a>
					</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/map-icon.svg" alt="Карта пути клиента">
                    <span class="extra__methods__item-text extra__client__services__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/map-client/">Карта пути клиента</a>
					</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/microphone-icon.svg" alt="Аудио
                    и видеомониторинг">
                    <span class="extra__methods__item-text extra__client__services__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/audio-video-monitoring/">Аудио
                        и видеомониторинг</a>
						</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/analysis-icon.svg" alt="Контент анализ">
                    <span class="extra__methods__item-text extra__client__services__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/content-analystic/">Контент-анализ</a>
						</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/survey-icon.svg" alt="просы клиентов">
                    <span class="extra__methods__item-text extra__client__services__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Опросы клиентов</a>
						</span>
                </li>
                <li class="extra__methods__item extra__client__services__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/binoculars-icon.svg" alt="Наблюдение
                    за работой сотрудников">
                    <span class="extra__methods__item-text extra__client__services__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/off-observation/">Наблюдение
                        за работой сотрудников</a>
					</span>
                </li>
            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает <span class="orange">ОЦЕНКА</span> клиентского сервиса?</h2>
           <div class="extra__grade__container">
			   
	<?php
$client_services_content_down = get_field('client-services-content-down');
if ($client_services_content_down) {
    foreach ($client_services_content_down as $client_services_content_down_item) {
        $client_services_main_content_down_descr_1 = esc_html($client_services_content_down_item['client-services-content-down-descr-1']);
        $client_services_main_content_down_descr_2 = esc_html($client_services_content_down_item['client-services-content-down-descr-2']);
        ?>
                    
        <div class="extra__grade__left client-services-container-down">
            <p class="extra__grade__descr">
                <p class="extra__grade__descr__item">
                    <?php echo $client_services_main_content_down_descr_1; ?>
                </p>

                <p class="extra__grade__descr__item">
                    <?php echo $client_services_main_content_down_descr_2; ?>
                </p>
            </p>
            <button class="btn extra__grade__btn">
                <a class="research__link" href="#form-container">Заказать услугу</a>
            </button>
        </div>
        <?php
    }
}
?>

			   
			   
                </div>
            </div>
        </section>

    </div>





    <?php
    get_footer();