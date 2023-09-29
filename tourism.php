<?php
/*
Template Name: tourism
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">

                    <span class="orange"></span> туризм
                </h1>
								<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__financial__descr">
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
            <h2 class="extra__grade__header">ПО <span class="orange">РЕЗУЛЬТАТМ</span>
                проверки Тайным покупателем вы узнаете</h2>

            <div class="extra__grade__container tourism-container-up">
                <div class="extra__grade__left extra__tourism__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Что нравится и не нравится клиенту в агентстве
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Соблюдают ли менеджеры все стандарты обслуживания, принятые в компании
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Как выглядят сотрудники, как общаются, предлагают ли дополнительные услуги
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Соблюдается ли порядок в офисе
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Насколько удобно пользоваться вашим сайтом/сервисом/приложением
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">06</span>
                        С какой скоростью реагируют сотрудники на запросы клиентов
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">07</span>
                        Насколько хорошо менеджер владеет актуальной информацией о турах
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">08</span>
                        Качество работы фронт-офисов и call-центра
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">09</span>
                        Качество работы HR-службы с помощью тайных соискателей
                    </p>
                    </p>

                </div>
                <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/tourism@2x.png">
                        <img class="picture__img extra__grade__img extra__tourism-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/tourism@2x.png" alt="tourism">
                      </picture>
                </div>
            </div>
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
            <h2 class="extra__grade__header">Маркетинговые исследования в сфере туризма решают следующие <span class="orange">ЗАДАЧИ</span></h2>
            <div class="extra__grade__container  column tourism-container-middle">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Оценка выполнения стандартов компании при обслуживании клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Анализ качества продуктов и услуг, предлагаемых компанией, и эффективность их продажи
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Изучение бизнес-процессов при покупке услуг компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Опросы удовлетворенности и лояльности клиентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Мониторинг конкурентов. Сравнение сервиса, условий покупки, бонусных программ, дополнительных услуг
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Опросы сотрудников для выявления уровня их удовлетворенности работой и вовлеченности в корпоративную культуру
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Аудит клиентских помещений – оценка внешнего оформления, состояния POS-материалов, обустройства зоны ожидания
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">08</span>
                    Анализ социально-демографических характеристик населения исследуемого региона
                </p>
              <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
                <p class="extra__grade__descr tourism-descr-down">
                   <?php echo $descr_1; ?>	
                </p>
                <p class="extra__grade__descr mt20">
                    <?php echo $descr_2; ?>	
                </p>
				<?php
    }
}
?>

            </div>
            <button class="btn extra__grade__btn extra__content__btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
        </section>
    </div>



    <?php
    get_footer();