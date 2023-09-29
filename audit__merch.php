<?php
/*
Template Name: audit__merch
*/

get_header();
?>


    <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">
                    <span class="orange">АУДИТ</span> мерчандайзинга
                </h1>
				 <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__auditMerch__descr">
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
                В каких <span class="orange">
                    СФЕРАХ
                </span> мы проводим аудит мерчандайзинга
            </h2>

            <ul class="extra__methods__list extra__auditMerch__list">
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/t-shirt-icon.svg" alt="Магазинах одежды и
                    обуви">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах одежды и
                        обуви</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/bear-icon.svg" alt="Магазинах детских
                    товаров">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах детских
                        товаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/truck-icon.svg" alt="Продуктовых
                    магазинах">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Продуктовых
                        магазинах</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/laptop-icon.svg" alt="Магазинах электроники
                    и бытовой техники">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах электроники
                        и бытовой техники</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/makeup-icon.svg" alt="агазинах косметических
                    товаров">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах косметических
                        товаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/earrings-icon.svg" alt="Магазинах
                    аксессуаров">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Магазинах
                        аксессуаров</span>
                </li>
                <li class="extra__methods__item extra__mysteryShopping__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/medicine-icon.svg" alt="Аптеках">
                    <span class="extra__methods__item-text extra__methods__client__item-text">Аптеках</span>
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
            <h2 class="extra__grade__header">КАКИЕ <span class="orange">ЗАДАЧИ</span> позволяет решить аудит
                мерчандайзинга?</h2>

            <div class="extra__grade__container extra__mysteryShopping__container-middle ">
                <div class="extra__grade__left extra__mysteryShopping__left">
                    <p class="extra__grade__descr">
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">01</span>
                        Качество выкладки товара в торговом зале и на витринах
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">02</span>
                        Наличие товара на полках и витринах, соответствие выкладки утвержденной планограмме
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">03</span>
                        Наличие и правильность ценников на товары
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">04</span>
                        Проверка сроков годности товаров
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">05</span>
                        Присутствие акционного товара на полках и достаточном количестве
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">06</span>
                        Оформление торгового зала и входной группы
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">07</span>
                        Правильность оформления бренд зоны
                    </p>
                    <p class="extra__mysteryShopping__task__item">
                        <span class="extra__mysteryShopping__task__figure orange">08</span>
                        Соблюдение чистоты и порядка в торговом зале
                    </p>
                    </p>

                </div>
                <div class="extra__grade__right extra__mysteryShopping__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/audit__merch.png">
                        <img class="picture__img  extra__grade__img extra__audit-merch-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/audit__merch.png" alt="audit__merch">
                      </picture>
                </div>
            </div>
        </section>

        <section class="extra__methods">
            <h2 class="extra__methods__header">
                <span class="orange">ЭТАПЫ</span> проведения проекта "Аудит мерчандайзинга" включают
            </h2>

            <ul class="extra__survey__stages__list extra__auditMerch__stages__list">
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">01</span>
                    <h5 class="extra__audit__stages__subtitle">Подготовительный этап</h5>
                    <p class="extra__survey__stages__descr">
                        Изучение специфики бизнеса Заказчика,  включая стандарты мерчандайзинга, утвержденные
                        в компании, разработка методических материалов, подготовка инструкций
                        для проверяющих и легенд проверок, проработка формата отчета.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">02</span>
                    <h5 class="extra__audit__stages__subtitle">Основной этап</h5>
                    <p class="extra__survey__stages__descr">
                        Проведение проверки, заполнение анкет, фото и видео фиксация выявленных нарушений.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">03</span>
                    <h5 class="extra__audit__stages__subtitle">Заключительный этап</h5>
                    <p class="extra__survey__stages__descr">
                        Контроль сроков и качества выполнения работ, подготовка и анализ отчетов, включая фото и
                        видеоматериалы, собранные в ходе аудита мерчандайзинга.
                    </p>
                </li>
                <li class="extra__survey__stages__item">
                    <span class="extra__survey__stages__fugure">04</span>
                    <h5 class="extra__audit__stages__subtitle">Подготовка выводов</h5>
                    <p class="extra__survey__stages__descr">
                        Написание итоговых отчетов, подготовка выводов и рекомендаций
                        на основе собранных материалов.
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