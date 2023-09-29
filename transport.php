<?php
/*
Template Name: transport
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main ">

                    <span class="orange"></span> Транспорт
                </h1>
								<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__transport__descr">
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
            <h2 class="extra__task__header">Маркетинговые 
                <span class="orange">
                   ИССЛЕДОВАНИЯ
                </span> методом Тайный посетитель проводятся
            </h2>

            <ul class="extra__methods__list extra__transport__list">
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/train-icon.svg" alt="train">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">На железнодорожных 
                        вокзалах</span>
                </li>
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/bus-icon.svg" alt="bus">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">На автовокзалах</span>
                </li>
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/auto-icon.svg" alt="auto">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">На городском 
                        наземном транспорте</span>
                </li>
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/metro-icon.svg" alt="metro">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">В метрополитене</span>
                </li>
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/Taxi-icon.svg" alt="taxi">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">В такси</span>
                </li>
                <li class="extra__methods__item extra__transport__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/airplane-icon.svg" alt="plane">
                    <span class="extra__methods__item-text extra__methods__transport__item-text">В аэропорту</span>
                </li>
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

        <section class="extra__grade">
            <h2 class="extra__grade__header">Маркетинговые исследования позволяют решить множество
               
                <span class="orange">ЗАДАЧ</span> в сфере транспорта, включая
            </h2>
			
            	 <div class="extra__telecom-container">
            <div class="column extra__tourism__left">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Опросы пассажиров для оценки удовлетворенности инфраструктурой, зонами ожидания и отдыха в зданиях вокзалов и на территории аэропортов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Опросы удовлетворенности пассажиров такси, поездов, электричек и наземного транспорта, а также оценка уровня сервиса 
                    при авиаперелетах
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Проверка выполнения стандартов стюардами и проводниками в перелетах и поездках
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Оценка предложения дополнительных продаж и дополнительных услуг во время ожидания и непосредственно во время перелета или поездки
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Аудит внешнего состояния транспортных средств, вокзалов и аэропортов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Анализ бизнес-процессов при покупке билетов и заказе такси
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Мониторинг конкурентов, включая особенности сервиса, наличие дополнительных услуг, стоимость услуг и другие параметры
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Опросы сотрудников для оценки удовлетворенности работой и вовлеченности в корпоративную культуру
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Исследование интерфейса сайтов и приложений для пассажиров, включая удобство использования, понятность навигации и другие аспекты
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">10</span>
                    Анализ рынка, исследование конкурентной среды и социально-демографических характеристик населения исследуемого региона
                </p>
            </div>
         
					 
				 	 <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/transport.png">
                        <img class="picture__img extra__grade__img extra__transport-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/transport.png" alt="transport">
                      </picture>
                </div>
				    </div>
			    <button class="btn extra__grade__btn extra__content__btn">
			<a class="research__link" href="#form-container">
                         Заказать проверку
                        </a>
			</button>
        </section>
    </div>


    <?php
    get_footer();