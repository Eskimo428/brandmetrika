<?php
/*
Template Name: medical
*/

get_header();
?>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">

                    <span class="orange">МЕДИЦИНСКИЙ</span> сектор
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__medical__descr">
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
            <h2 class="extra__grade__header">
                <span class="orange">
                    ПРОВЕРКА
                </span> может проводиться в
            </h2>

            <ul class="extra__methods__list extra__medical__list">
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/hospital-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Медицинских
                        клиниках</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/bottle-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Медицинских
                        лабораториях</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/medicine-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Аптеках</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/tablet-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Фармацевтических
                        компаниях</span>
                </li>
                <li class="extra__methods__item extra__medical__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/glasses-icon.svg" alt="">
                    <span class="extra__methods__item-text extra__methods__medical__item-text">Салонах оптики</span>
                </li>
            </ul>
        </section>



        <section class="extra__grade">
            <h2 class="extra__grade__header">КАКИЕ <span class="orange">ЗАДАЧИ</span> позволяет решить данное
                исследование?</h2>
            <div class="extra__grade__container  column medical-container-middle">
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">01</span>
                    Компетентность сотрудников и соблюдение санитарных норм при работе с клиентами для обеспечения
                    высокого уровня сервиса и удовлетворенности пациентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">02</span>
                    Опросы удовлетворенности и лояльности клиентов для выявления проблем, установления обратной связи, и
                    улучшения качества предоставляемых услуг
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">03</span>
                    Проверка работы службы подбора персонала компании с помощью тайного соискателя, с целью оценки
                    работы рекрутинговой службы
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">04</span>
                    Опросы удовлетворенности клиентов для получения обратной связи, выявления проблем и повышения уровня
                    сервиса
                    и доверия к компании
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">05</span>
                    Мониторинг конкурентов, включая условия предлагаемых продуктов, особенности сервиса и другие
                    параметры
                    для разработки конкурентоспособных стратегий
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">06</span>
                    Аудит клиентских помещений для оценки внешнего оформления, наличия и состояния POS-материалов,
                    комфорта в зоне ожидания и других аспектов, которые влияют на удовлетворение пациентов
                </p>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">07</span>
                    Оценка первого предложения препаратов Заказчика, особенно важная задача для фармацевтических
                    компаний,
                    чтобы понимать, как фармацевты и доктора относятся к Вашей продукции и предлагают ли ее клиентам
                </p>


                <div class="extra__grade__container extra__black__container medical-container-15">
                    <div class="extra__grade__left extra__medical__left">
                        <p class="extra__grade__descr extra__medical__descr white-text">
                            Также, в сфере медицины могут применяться и другие методы исследований, такие как глубинные
                            интервью, наблюдение, фокус группы, анализ медицинских данных и другие, чтобы получить
                            полное представление о потребностях пациентов и повысить качество предоставляемых услуг.
                        </p>
                    </div>
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
            <h2 class="extra__grade__header">
                Что даёт
                <span class="orange">ПРОВЕРКА</span> тайным посетителем в сфере медицинских услуг?
            </h2>
            <div class="extra__grade__container medical-container-tablet-down">
                <div class="extra__grade__left extra__retail__left medical-left-down">
					<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
                    <p class="extra__grade__descr">
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
                <div class="extra__grade__right extra__medical-right-down">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/medical@2x2.png">
                        <img class="picture__img  extra__grade__img extra__medical-img"
                         src="https://brandmetrika.ru/wp-content/uploads/2023/09/medical@2x2.png" alt="medical">
                      </picture>
                </div>
            </div>

 <button class="btn extra__grade__btn extra__content__btn">
					<a class="research__link" href="#form-container">Заказать услугу</a>
					</button>
        </section>





    </div>



    <?php
    get_footer();