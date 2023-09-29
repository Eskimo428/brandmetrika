<?php
/*
Template Name: beauty
*/

get_header();
?>


       <main>
      <div class="extra__main__container">
        <div class="extra__main__content">
          <h1 class="extra__header__main extra__header__store__main">
            <span class="orange">БЬЮТИ-</span>индустрия
          </h1>
			<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
          <p class="extra__header__descr extra__header__beauty__descr">
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
          Маркетинговые <span class="orange"> ИССЛЕДОВАНИЯ </span> в
          бьюти-индустрии могут проводиться в
        </h2>

        <ul class="extra__methods__list extra__beauty__list">
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/manic.svg" alt="manic" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              >Маникюрных салонах</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/haircut.svg" alt="haircut" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              >Парикмахерских</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/spa.svg" alt="spa" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              >Спа-салонах</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item beauty__grid"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/09/massage.svg" alt="massage" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              >Массажных кабинетах</span
            >
          </li>
        </ul>

        <div class="extra__black__container mt48 telecom-black-container">
          <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
            Маркетинговые исследования в сфере бьюти-индустрии имеют несколько
            значимых аспектов. Во-первых, они позволяют оценить уровень сервиса
            при посещении салона красоты, включая внимательность персонала,
            профессионализм мастеров и комфортность условий обслуживания.
            Во-вторых, исследования помогают определить качество работы мастеров
            и их соответствие ожиданиям клиентов. 
          </p>
        </div>
      </section>

      <section class="extra__methods">
        <h2 class="extra__methods__header">
          <span class="orange">ЗАЧЕМ</span> владельцу SPA или салона красоты
          нужна такая проверка?
        </h2>
        <ul class="extra__beauty__stages__list">
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">01</span>
            <p class="extra__audit__beauty__subtitle">
              Увеличение продаж и максимизация прибыли
            </p>
          </li>
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">02</span>
            <p class="extra__audit__beauty__subtitle">
              Проверка клиентоориентированности сотрудников
            </p>
          </li>
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">03</span>
            <p class="extra__audit__beauty__subtitle">
              Увеличение количества новых и лояльных клиентов
            </p>
          </li>
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">04</span>
            <p class="extra__audit__beauty__subtitle">
              Проверка качества предоставляемых услуг
            </p>
          </li>
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">05</span>
            <p class="extra__audit__beauty__subtitle">
              Изучение деятельности конкурентов
            </p>
          </li>
          <li class="extra__beauty__stages__item">
            <span class="extra__beauty__stages__fugure">06</span>
            <p class="extra__audit__beauty__subtitle">
              Повышение мотивации персонала
            </p>
          </li>
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

      <section class="extra__grade">
        <h2 class="extra__grade__header extra__grade__header__beauty">
          Маркетинговые <span class="orange">ЗАДАЧИ</span>, решаемые в сфере
          бьюти-индустрии, включают
        </h2>
		  
		   <div class="extra__telecom-container">
            <div class="column extra__tourism__left">
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">01</span>
          Оценку сервиса при посещении салона красоты
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">02</span>
          Оценку качества работы мастеров
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">03</span>
          Опросы удовлетворенности и лояльности клиентов
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">04</span>
          Исследование уровня знаний сотрудников о продуктах и услугах компании
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">05</span>
          Оценка предложения покупки дополнительных продуктов и услуг салона
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">06</span>
          Мониторинг конкурентов (особенности сервиса, условия покупки, бонусы
          при покупке, дополнительные услуги и пр.)
        </p>
        <p class="extra__mysteryShopping__task__item">
          <span class="extra__mysteryShopping__task__figure orange">07</span>
          Анализ рынка, исследование конкурентной среды и
          социально-демографических характеристик населения исследуемого региона
        </p>
				</div>
		  
		       <div class="extra__grade__right extra__mysteryShopping__right  extra__beauty__right">
            <picture>
              <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/beauty3600.png">
              <img class="picture__img extra__grade__img extra__beauty-img" 
              src="https://brandmetrika.ru/wp-content/uploads/2023/09/beauty3600.png" alt="beauty">
            </picture>
          </div>
</div>
		  
        <div class="extra__grade__container beauty-container-down">
		
          <div class="extra__grade__left extra__beauty-down">
			   <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
            <p class="extra__grade__descr extra__beauty__descr__down">
               <?php echo $descr_1; ?>	
            </p>
			  <?php
    }
}
?>
            <button class="btn extra__grade__btn extra__content__btn">
				<a class="research__link" href="#form-container"> Заказать услугу </a>
            </button>
          </div>
        </div>
      </section>
    </div>


    <?php
    get_footer();