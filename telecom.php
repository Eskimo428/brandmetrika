<?php
/*
Template Name: telecom
*/

get_header();
?>


  <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">

                    <span class="orange">ТЕЛЕКОМ</span> и IT
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__telecom__descr">
					 <?php echo esc_html($main_descr); ?>
		<?php
}
?>
                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">
        <section class="extra__grade telecom-container-up">
            <h2 class="extra__grade__header">Маркетинговые исследования в сфере Телеком и IT позволяют решить множество
                <span class="orange">ЗАДАЧ</span>, включая
            </h2>
			
			 <div class="extra__telecom-container">
            <div class="column extra__tourism__left telecom-container-middle">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценку качества обслуживания клиентов в офисах и call-центрах компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Глубокое знание сотрудниками продуктов и услуг, предлагаемых компанией, и умение эффективно их
                    продавать
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Анализ бизнес-процессов при покупке продуктов и услуг компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Проверку работы франчайзинговых партнеров, включая соблюдение корпоративных стандартов и ценовой
                    политики
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
                    Аудит клиентских помещений для оценки внешнего оформления, наличия и состояния POS-материалов,
                    порядка выкладки товаров и других аспектов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">09</span>
                    Исследование интерфейса сайта и приложений, удобства работы, понятности навигации и пр.
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">10</span>
                    Анализ рынка, включая изучение конкурентной среды и социально-демографических характеристик
                    населения исследуемого региона
                </p>
				
				  </div>
				 
				 
				 <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/telecom@2x.png">
                        <img class="picture__img extra__grade__img extra__telecom-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/telecom@2x.png" alt="telecom">
                      </picture>
                </div>
				 
				   </div>
                <div class=" extra__black__container mt48 telecom-black-container">
                <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
                    Кроме перечисленных методов, в сфере Телеком и IT можно применять и другие исследовательские методы,
                    такие как анализ данных о поведении пользователей, проведение фокус групп, экспертные интервью,
                    анализ социальных медиа и многое другое.
                </p>
            </div>
				   
          
        </section>

        <section class="extra__feedback">
            <div class="extra__feedback__container">
                <h4 class="extra__feedback__header">
                    закажите консультацию сейчас
                </h4>

                <div class="extra__feedback__right" id="form-container">
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
    </div>



    <?php
    get_footer();