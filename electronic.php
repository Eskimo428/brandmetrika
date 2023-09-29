<?php
/*
Template Name: electronic
*/

get_header();
?>


<body>


      <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main ">

                    <span class="orange">ЭЛЕКТРОНИКА</span> и бытовая техника
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

        <section class="extra__grade">
            <h2 class="extra__grade__header">Маркетинговые
                <span class="orange">ЗАДАЧИ</span>, которые можно решить в сфере электроники и бытовой техники, включают
            </h2>
			
           	  	 <div class="extra__telecom-container">
            <div class="column extra__tourism__left">
				
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценка качества обслуживания покупателей в магазинах техники
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Опросы удовлетворенности и лояльности клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Исследование уровня знаний сотрудников о продуктах и услугах компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Оценка предложения покупки дополнительных продуктов и услуг магазина
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Аудит внешнего оформления магазинов, в том числе, аудит мерчандайзинга
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Анализ бизнес-процессов при совершении покупки в интернет-магазине
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Проверка работы службы подбора персонала с помощью тайного соискателя, чтобы обеспечить более
                    эффективный рекрут и сократить текучку кадров
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Мониторинг конкурентов (особенности сервиса, условия покупки, бонусы при покупке, дополнительные
                    услуги и пр.)
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Опросы сотрудников (удовлетворенность работой, вовлеченность в корпоративную культуру и пр)
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">10</span>
                    Исследование интерфейса сайта и приложения, удобство работы, понятность навигации и пр.
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">11</span>
                    Анализ рынка, исследование конкурентной среды и социально-демографических характеристик населения
                    исследуемого региона
                </p>
				  </div>
					 
					  <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/electronic@2x.png">
                        <img class="picture__img extra__grade__img extra__electronic-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/electronic@2x.png" alt="electronic">
                      </picture>
                </div>
				 
				    </div>
				
    <div class="extra__black__container mt48 telecom-black-container">
            <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
                        В дополнение к перечисленным методам, для сферы электроники и бытовой техники применимы и другие
                        исследовательские подходы,
                        такие как проведение фокус групп, анализ отзывов и рейтингов продуктов, мониторинг трендов в
                        индустрии и изучение потребительского поведения.
                    </p>
                </div>
       
        </section>

        <section class="extra__feedback">
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
    </div>




 
    <?php
    get_footer();