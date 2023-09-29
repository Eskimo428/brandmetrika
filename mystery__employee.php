<?php
/*
Template Name: mystery__employee
*/

get_header();
?>


     <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main extra__header_mysteryEmployee">
                    <span class="orange">
                        ТАЙНЫЙ
                    </span>соискатель (mystery employee)
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__survey__descr ">
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
            <h2 class="extra__grade__header">КАКИЕ <span class="orange">ЗАДАЧИ</span> решает исследование Тайный
                соискатель</h2>

            <div class="extra__grade__container  extra__mysteryShopping__container-middle">
                <div class="extra__grade__left extra__mysteryShopping__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Удобство отправки соискателем отклика с резюме на вакансию
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Скорость коммуникации и эффективность отдела по подбору персонала
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Контроль общения с кандидатами, общее впечатление, а также выполнение договоренностей со стороны
                        сотрудников HR-отдела
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Компетентность сотрудников HR-отдела при проведении собеседований, насколько сотрудники
                        HR-отдела понимают суть вакансии и обязанности соискателя
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Имидж компании. Качество и эффективность презентации компании, проводимой отделом
                        подбора персонала
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">06</span>
                        Условия найма в компаниях конкурентов
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">07</span>
                        Контроль соблюдения установленного порядка и дисциплины в трудовом коллективе
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">08</span>
                        Контроль правильности и полноты предоставляемой информации о вакансии, компании, уровне
                        заработной платы, возможностях карьерного роста и других аспектах
                    </p>
                    </p>

                </div>
                <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/mystery-employee.png">
                        <img class="picture__img  extra__grade__img extra__mystery-employee-img"
                         src="https://brandmetrika.ru/wp-content/uploads/2023/09/mystery-employee.png" alt="mystery-employee">
                      </picture>
                </div>
            </div>
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
                <span class="orange">ЭТАПЫ</span> проведения исследования Тайный соискатель
            </h2>

            <ul class="extra__survey__stages__list extra__mysteryEmployee__stages__list">
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">01</span>
                    <p class="extra__survey__stages__descr">
                        Изучение специфики бизнеса Заказчика, разработка методических материалов, включая стандарты
                        проведения собеседований, принятые в компании.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">02</span>
                    <p class="extra__survey__stages__descr">
                        Разработка анкеты и сертификации
                        для тайных соискателей.
                        Подготовка инструкций
                        для проверяющих и легенд проверок.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">03</span>
                    <p class="extra__survey__stages__descr">
                        Подбор и обучение проверяющих, координация работы сотрудников
                        в регионах, проведение пилотных проверок для оптимизации методологии.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">04</span>
                    <p class="extra__survey__stages__descr">
                        Назначение тайных соискателей
                        на проверки в соответствии с адресной программой.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">05</span>
                    <p class="extra__survey__stages__descr">
                        Контроль сроков и качества выполнения работ, подготовка и анализ массива данных, включая
                        статистические показатели и расчет индексов.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">06</span>
                    <p class="extra__survey__stages__descr">
                        Написание итоговых отчетов, подготовка выводов и рекомендаций 
                        на основе трендов отрасли.
                    </p>
                </li>

            </ul>
            <button class="btn extra__grade__btn extra__mysteryShopping__control__btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
        </section>

    </div>



    <?php
    get_footer();