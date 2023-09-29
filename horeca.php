    <?php
    /*
    Template Name: horeca
    */
    
    get_header();
    ?>

<main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main horeca">

                    <span class="orange"></span> HoReCa
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__horeca__descr">
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
            <h2 class="extra__task__header">
                <span class="orange">
                    ПРОВЕРКА
                </span> может проведена в
            </h2>
            <ul class="extra__methods__list extra__horeca__list">
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/coffee-icon.svg" alt="Кафе">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Кафе</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/restaurant-icon.svg" alt="Ресторане">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Ресторане</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/glass-icom.svg" alt="Баре">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Баре</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/Pub-icon.svg" alt="Пабе">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Пабе</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/coffee-house-icon.svg" alt="Кофейне">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Кофейне</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/pizza-icon.svg" alt="Пиццерии">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Пиццерии</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/fast-food-icon.svg" alt="Fast-food">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Точке Fast-food</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/hotel-icon.svg" alt="Гостинице">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Гостинице</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/hotel1-icon.svg" alt="Отеле">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Отеле</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/motel-icon.svg" alt="Мотеле">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Мотеле</span>
                </li>
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

        <section class="extra__grade">
            <h2 class="extra__grade__header">Маркетинговые исследования в сфере HoReCa могут решить множество
                <span class="orange">ЗАДАЧ</span>, включая
            </h2>
            <div class="extra__grade__container  column extra__telecom-container column-horeca">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценку качества выполнения стандартов компании при обслуживании клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Знание и понимание сотрудниками услуг и продуктов, предлагаемых компанией, и умение эффективно их
                    продавать
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Оценку бизнес-процессов на всех этапах приобретения продуктов и услуг компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Проверку работы службы подбора персонала с помощью тайного соискателя для обеспечения более
                    эффективного рекрутинга и сокращения текучести кадров
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Проведение опросов удовлетворенности и лояльности клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Мониторинг конкурентов, включая анализ особенностей сервиса, условий покупки, бонусных программ и
                    дополнительных услуг
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Опросы сотрудников для измерения уровня удовлетворенности работой и вовлеченности в корпоративную
                    культуру
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Аудит клиентских помещений для оценки внешнего оформления, наличия и состояния POS-материалов, а
                    также качества уборки помещений
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Исследование интерфейса сайта и приложений, удобства работы, понятности навигации и прочих аспектов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">10</span>
                    Анализ рынка, включая исследование конкурентной среды и социально-демографических характеристик
                    населения исследуемого региона
                </p>
            </div>
            <div class="extra__black__container mt48 telecom-black-container">
                <p class="extra__grade__descr extra__medical__descr white-text">
                    Для того, чтобы увидеть сервис  в вашем заведении глазами клиента и получить объективную оценку
                    ваших услуг, существует метод "Тайный посетитель". Аналитический отчет с рекомендациями по повышению
                    уровня сервиса, подготовленный по результатам проверки, позволит вам устранить обнаруженные недочёты
                    в обслуживании клиентов. Персонал – один из важнейших элементов качественного сервиса.
                    Количество лояльных посетителей зависит не только от владения вашими сотрудниками техникой продаж,
                    но и от того, насколько они приветливы
                    и доброжелательны. Все хотят быть встреченными профессиональными и вежливыми сотрудниками при
                    посещении заведения или заселении
                    в гостиницу.
                </p>
            </div>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Контроль
                <span class="orange">КАЧЕСТВА</span> гостиничных услуг
            </h2>
			
		<div class="extra__telecom-container">
            <div class="column extra__tourism__left">
				 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
            <p class="extra__grade__descr extra__medical__descr extra__horeca__descr-down">
 <?php echo $descr_1; ?>                
            </p>
				 <?php
    }
}
?>
			</div>
				 <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/horeca@2x.png">
                        <img class="picture__img extra__grade__img extra__horeca-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/horeca@2x.png" alt="horeca">
                      </picture>
                </div>
			  </div>
        </section>
        <button class="btn extra__grade__btn extra__content__btn">
		<a class="research__link" href="#form-container">Заказать проверку</a>
		</button>
    </div>




    <?php
    get_footer();