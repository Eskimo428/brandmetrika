<?php
/*
Template Name: store__object
*/

get_header();
?>


       <main>
      <div class="extra__img__container__main extra__img__storeObject__container__main">
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main white-text">
                    Исследование <br>
                    <span class="orange">ТОРГОВЫХ</span> объектов
                </h1>
				     <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
                <p class="extra__header__descr extra__header__store__descr">
                     <?php echo esc_html($main_descr); ?>
                </p>
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
                Какие <span class="orange">
                    ЗАДАЧИ
                </span> решают исследования торговых объектов?
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
            ?>            </ul>
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
					 <span class="delivered" style="display: none;">Ваше сообщение отправлено</span>
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
                Какие
                <span class="orange">МЕТОДЫ</span> исследования торговых точек мы используем
            </h2>

            <ul class="extra__methods__list extra__methods__list__researchMarket research-object-icon-container">
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/audits2-icon.svg" alt="audit-store">
                    <span class="extra__methods__item-text">
						<a class="extra__methods__item-text" href="https://brandmetrika.ru/audit-store/">Открытый аудит
                        торговых точек (фотоаудит)</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/shoppingBag-icon.svg" alt="audit-merch">
                    <span class="extra__methods__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/audit-merch/">Аудит мерчандайзинга</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/ion_analytics-icon.svg" alt="outlet-traffic">
                    <span class="extra__methods__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/outlet-traffic/">Подсчет проходимости
                        торговой точки</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/bx_map-icon.svg" alt="geomarketing">
                    <span class="extra__methods__item-text">
							<a class="extra__methods__item-text" href="#">Геомаркетинг</a>
						</span>
                </li>
                <li class="extra__methods__item">
                    <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/survey-icon.svg" alt="survey">
                    <span class="extra__methods__item-text">
							<a class="extra__methods__item-text" href="https://brandmetrika.ru/survey/">Опросы</a>
						</span>
                </li>
            </ul>
        </section>


        <section class="extra__grade">
            <h2 class="extra__grade__header">Что дает <span class="orange">ИССЛЕДОВАНИЕ</span> торговых объектов?</h2>
            <div class="extra__grade__container">
                <div class="extra__grade__left extra__researchBrand__container">
					<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
					
                    <p class="extra__grade__descr">
                    <p class="extra__grade__descr__item extra__store__descr__item ">
                     <?php echo $descr_1; ?>
                    </p>
                    <p class="extra__grade__descr__item extra__store__descr__item ">
                     <?php echo $descr_2; ?>
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
        </section>







    </div>



    <?php
    get_footer();