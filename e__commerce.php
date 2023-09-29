<?php
/*
Template Name: e__commerce
*/

get_header();
?>

<body>


       <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main ecommerce">
                    E-commerce
                    <span class="orange"></span>
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__ecommerce__descr">
                   <?php echo esc_html($main_descr); ?>
		<?php
}
?>
                </p>
            </div>
        </div>
    </main>

    <div class="extra__container">

        <section class="extra__ecommerce__bussines">
            <h2 class="extra__grade__header extra__personal__title-research"><span class="orange">ВЗГЛЯНИТЕ</span> на
                бизнес
                глазами вашего клиента</h2>
            <div class="extra__grade__container column ecomm-container-up">
           
                    <p class="extra__grade__descr ecomm-descr">
                        Сейчас онлайн-магазины крайне популярны. Конкуренция непрестанно усиливается. Чтобы оставаться конкурентоспособными и увеличивать прибыль, необходимо предлагать своим покупателям безупречный сервис. 
						     </p>
				  <p class="extra__grade__descr ecomm-descr">
					    На что в первую очередь посетители интернет-магазина обращают внимание?
					      </p>
                    <p class="extra__monitoring__descr__item mt20 ecomm-descr">
                        <span class="extra__company__tick">&#10004;</span>
                        Скорость обработки заказа
                    </p>
                    <p class="extra__monitoring__descr__item ecomm-descr">
                        <span class="extra__company__tick">&#10004;</span>
                        Скорость доставки
                    </p>
                    <p class="extra__monitoring__descr__item ecomm-descr">
                        <span class="extra__company__tick">&#10004;</span>
                        Клиентоориентированность на всех этапах оформления заказа
                    </p>
                    <p class="extra__monitoring__descr__item ecomm-descr">
                        <span class="extra__company__tick">&#10004;</span>
                        Удобный и интуитивно понятный сайт
                    </p>

               

            </div>
        </section>

        <section class="extra__grade">
            <h2 class="extra__grade__header ecomm-header">Маркетинговые исследования в сфере
				<nobr>E-commerce</nobr> могут помочь решить следующие
                <span class="orange">ЗАДАЧИ</span>
            </h2>
            <div class="extra__grade__container  column extra__telecom-container ecomm-container">
						 <?php
            $content = get_field('content');
            if ($content) {
                foreach ($content as $content_item) {
                    $content_header = esc_html($content_item['content-header']);
                    $content_descr = esc_html($content_item['content-descr']);
            ?>
                <p class="extra__mysteryShopping__task__item">
			
                    <span class="extra__mysteryShopping__task__figure orange">
					 <?php echo  $content_header; ?>
					</span>
                   <?php echo  $content_descr; ?>
			
                </p>
           		     <?php
                }
            }
            ?>  
            </div>
            <div class="extra__black__container mt48 telecom-black-container">
                <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
                    Кроме перечисленных методов, для сферы E-commerce применимы и другие исследовательские методы,
                    такие
                    как анализ данных о покупках, использование инструментов веб-аналитики для изучения поведения
                    пользователей, проведение А/Б-тестирования и другие.
                </p>
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
                    </form>
                </div>
            </div>
        </section>

        <section class="extra__task">
            <h2 class="extra__task__header">
                <span class="orange">
                    ПРОВЕРКА
                </span> в интернет-магазине делится на два вида: контроль отдела продаж и контроль доставки и пункта
                вывоза
            </h2>
            <p class="extra__header__descr extra__header__ecommerce__descr">
                Как проверяется работа отдела продаж:
            </p>
          <ul class="extra__task__list">
                 <?php
            $content = get_field('content_2');
            if ($content) {
                foreach ($content as $content_item) {
                    $content_header_2 = esc_html($content_item['content-header-2']);
                    $content_descr_2 = esc_html($content_item['content-descr-2']);
            ?>
                    <li class="extra__task__item">
                        <h3 class="extra__task__title">
                            <?php echo  $content_header_2; ?>
                        </h3>
                        <p class="extra__task__descr">
                            <?php echo  $content_descr_2; ?>
                        </p>
                    </li>
            <?php
                }
            }
            ?>   
            </ul>

            <p class="extra__header__descr extra__header__ecommerce__descr">
                Как проверяется доставка и пункт выдачи заказа:
            </p>
            <div class="extra__grade__container extra__mysteryShopping__container-middle">
                <div class="extra__grade__left extra__ecommerce__left">
                    <p class="extra__grade__descr">
                        Работа курьера оценивается по следующим критериям:
                    <p class="extra__monitoring__descr__item mt5">
                        <span class="extra__company__tick">&#10004;</span>
                        Скорость доставки
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Адекватная и вежливая манера общения
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Внешний вид
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Наличие сдачи
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Наличие чека
                    </p>
                    </p>

                    <p class="extra__grade__descr mt20">
                        В пункте выдачи тайный покупатель отмечает:
                    <p class="extra__monitoring__descr__item mt5">
                        <span class="extra__company__tick">&#10004;</span>
                        Насколько чисто внутри помещения и во входной группе
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Как быстро выдаются заказы
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Насколько опрятно выглядят сотрудники пункта выдачи
                    </p>
                    <p class="extra__monitoring__descr__item">
                        <span class="extra__company__tick">&#10004;</span>
                        Насколько профессионально они выполняют свои обязанности
                    </p>
                    </p>
             
                </div>
                <div class="extra__grade__right">
                    <picture>
                        <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/E-commerce.png">
                        <img class="picture__img  extra__grade__img extra__ecommerce-img" 
                        src="https://brandmetrika.ru/wp-content/uploads/2023/09/E-commerce.png" alt="E-commerce">
                      </picture>
                </div>
	   
            </div>
    <button class="btn extra__grade__btn">
			<a class="research__link" href="#form-container">Заказать проверку</a>
			</button>
        </section>
    </div>





    <?php
    get_footer();