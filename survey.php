<?php
/*
Template Name: survey
*/

get_header();
?>


        <main>
      <div class="extra__main__container">
        <div class="extra__main__content">
          <h1 class="extra__header__main extra__header__store__main">ОПРОСЫ</h1>
			 <?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
          <p class="extra__header__descr extra__header__survey__descr">
         <?php echo esc_html($main_descr); ?>
			    <?php
                }
                ?>
          </p>
        </div>
      </div>
    </main>

    <div class="extra__container">
      <section class="extra__task">
        <h2 class="extra__task__header extra__task__header__survey">
          Какие <span class="orange"> ВИДЫ </span> опросов мы проводим для наших
          клиентов
        </h2>

        <ul class="extra__survey__list">
          <li class="extra__survey__item">
            <span class="extra__survey__icon-tel"> </span>
            <h5 class="extra__survey__types__subtitle">телефонные опросы</h5>
            <p class="extra__survey__types__descr">
              проведение интервью с использованием системы CATI
              (Computer-Assisted Telephone Interviewing), которая позволяет нам
              автоматизировать сбор данных, улучшая таким образом качество и
              эффективность исследований. В дополнение, мы предлагаем
              исследование с помощью "ручного дозвона" для работы с базами с
              меньшей достижимостью и сложной аудиторией.
            </p>
          </li>
          <li class="extra__survey__item">
            <span class="extra__survey__icon-personal"> </span>
            <h5 class="extra__survey__types__subtitle">Личные опросы</h5>
            <p class="extra__survey__types__descr">
              проведение интервью face-to-face на территории торговых объектов,
              на улице или в других местах сосредоточения целевой аудитории.
              Этот подход позволяет вам получить детальную информацию и лучше
              понять отношение респондентов.
            </p>
          </li>
          <li class="extra__survey__item">
            <span class="extra__survey__icon-online"> </span>
            <h5 class="extra__survey__types__subtitle">Онлайн-опросы</h5>
            <p class="extra__survey__types__descr">
              проведение сбора данных от большого числа респондентов в
              кратчайшие сроки. Онлайн-формат позволяет участникам принимать
              участие в опросе в удобное для них время и в удобном месте, что
              способствует повышению уровня вовлеченности и качества ответов.
            </p>
          </li>
        </ul>

        <h2 class="extra__task__header extra__survey__cell__header">
          Для каких <span class="orange"> ЦЕЛЕЙ </span> могут быть использованы
          маркетинговые опросы
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
            ?>  
        </ul>
      </section>

      <section class="extra__feedback" id="form-container">
        <div class="extra__feedback__container">
          <h4 class="extra__feedback__header">закажите консультацию сейчас</h4>

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
          <span class="orange">ЭТАПЫ</span> проведения опроса
        </h2>

        <ul class="extra__survey__stages__list">
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">01</span>
            <h5 class="extra__survey__stages__subtitle">
              Подготовительный этап
            </h5>
            <p class="extra__survey__stages__descr">
              Разработка анкеты на основе конкретных исследовательских задач и
              ее программирование на специализированном портале.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">02</span>
            <h5 class="extra__survey__stages__subtitle">Основной этап</h5>
            <p class="extra__survey__stages__descr">
              Проведение опроса - взаимодействие с респондентами и сбор данных.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">03</span>
            <h5 class="extra__survey__stages__subtitle">
              Контроль качества данных
            </h5>
            <p class="extra__survey__stages__descr">
              Проверка данных на логику и соответствие аудиозаписи для
              обеспечения высокой достоверности исследования.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">04</span>
            <h5 class="extra__survey__stages__subtitle">Заключительный этап</h5>
            <p class="extra__survey__stages__descr">
              Предоставление детального отчета с анализом полученных данных,
              ключевыми выводами и рекомендациями по улучшению показателей.
            </p>
          </li>
        </ul>
      </section>

      <div class="extra__grade__container extra__survey__stage__down">
        <div class="extra__grade__left">
				 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
			
          <p class="extra__survey__stage__subdescr">
           <?php echo $descr_1; ?>	
          </p>
			  <?php
    }
}
?>
   
          <button class="btn extra__grade__btn">
			<a class="research__link" href="#form-container">Заказать услугу</a>
			</button>
        </div>
        <div class="extra__grade__right extra__grade__survey__right">
          <picture>
            <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/survey1440.png">
            <img class="picture__img  extra__grade__img extra__mysteryShopping__task-img" 
            src="https://brandmetrika.ru/wp-content/uploads/2023/09/survey1440.png" alt="survey">
          </picture>
        </div>
      </div>
    </div>




    <?php
    get_footer();