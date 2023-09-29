<?php
/*
Template Name: company
*/

get_header();
?>


       <main>
      <div class="extra__img__container__main extra__img__about__container__main">
        <div class="extra__main__container">
          <div class="extra__main__content">
            <h1
              class="extra__header__main extra__header__store__main white-text"
            >
              О компании
            </h1>
            <p
              class="extra__header__descr extra__header__about__descr white-text"
            >
				<?php
$descr_up = get_field('descr-up');
if ($descr_up) {
    foreach ($descr_down as $descr_up_item) {
        $descr_up_1 = esc_html($descr_up_item['descr-up-1']);
        $descr_up_2 = esc_html($descr_up_item['descr-up-2']);
		$descr_up_3 = esc_html($descr_up_item['descr-up-2']);
        ?>
                <?php echo $descr_up_1; ?>
				<br>
				 <?php echo $descr_up_2; ?>
				<br>
				 <?php echo $descr_up_3; ?>
            </p>
			   <?php
    }
}
?>
          </div>
        </div>
      </div>
    </main>

    <div class="extra__container">
      <section class="extra__task">
        <h2 class="extra__task__header extra__about__task__header">
          Что делает <span class="orange"> НАС </span> особенными?
        </h2>

        <ul class="extra__special__list">
          <li class="extra__special____item">
            <p class="extra__special____descr">
              <span class="extra__special__task__figure orange">01</span>
              Страсть к маркетингу и стремление к совершенству. <br>Мы не просто
              предоставляем услуги, мы создаем индивидуальные решения,
              отвечающие уникальным потребностям каждого клиента.
            </p>
          </li>
          <li class="extra__special____item extra__special__item-right">
            <p class="extra__special____descr">
              <span class="extra__special__task__figure orange">02</span>
              Наша команда состоит из опытных экспертов с более чем 20-летним
              опытом в маркетинге. <br>Мы постоянно развиваемся, следим за
              последними тенденциями и применяем передовые методы и инструменты
              для конкурентного преимущества клиентов.
            </p>
          </li>
          <li class="extra__special____item">
            <p class="extra__special____descr">
              <span class="extra__special__task__figure orange">03</span>
              Мы стремимся к долгосрочным партнерским отношениям, основанным на
              взаимном доверии и успешных результатах. Если вы ищете надежного
              партнера, предлагающего инновационные решения и поддержку на
              каждом этапе, мы готовы помочь вам достичь новых высот.
            </p>
          </li>
        </ul>

        <ul class="extra__task__list">
          <li class="extra__task__item">
            <h3 class="extra__task__title">Масштаб</h3>
            <p class="extra__task__descr">
              Мы провели более 500 проектов в месяц, что повышает нашу
              экспертизу и опыт в различных сферах. Благодаря нашей масштабной
              работе, мы обладаем широким спектром знаний и подходим для
              успешного проведения маркетинговых кампаний в различных
              бизнес-средах.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">Инновационный подход</h3>
            <p class="extra__task__descr">
              Мы активно применяем передовые методы и технологии, включая
              использование искусственного интеллекта в наших решениях.
              Благодаря постоянному внедрению новшеств и стратегий, мы достигаем
              значительного роста и конкурентных преимуществ для наших клиентов.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">Профессиональная аналитика</h3>
            <p class="extra__task__descr">
              Наш подход к анализу данных позволяет обнаруживать ценные инсайты
              и разрабатывать маркетинговые стратегии для достижения оптимальных
              результатов.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">Гибкость и восприимчивость</h3>
            <p class="extra__task__descr">
              Мы понимаем, что каждый бизнес уникален, поэтому наши
              маркетинговые решения разрабатываются с учетом конкретных целей и
              целей каждого клиента. Мы готовы к изменениям в бизнес-среде и
              быстрому реагированию на новые возможности, следующие за успехом
              наших клиентов в динамичном мире B2B.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">Широкая география работы</h3>
            <p class="extra__task__descr">
              Мы активно работаем не только во всех городах России, но и в
              странах ближнего зарубежья. Наше присутствие в различных регионах
              позволяет нам более глубоко понимать специфику рынка и
              разрабатывать стратегии, учитывая особенности каждой страны или
              региона.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">
              Специализированное программное обеспечение
            </h3>
            <p class="extra__task__descr">
              Мы применяем передовые технологии и используем инновационные
              продукты для реализации наших маркетинговых проектов. Это
              позволяет нам эффективно управлять процессами, автоматизировать
              задачи и достигать оптимальных результатов для наших клиентов.
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">
              Соответствие мировым стандартам работы
            </h3>
            <p class="extra__task__descr">
              Мы работаем в соответствии с нормами и стандартами крупнейших
              мировых ассоциаций, таких как: MSPA (Mystery Shopping Providers
              Association) b ESOMAR — (European Society of Marketing Research
              Professionals)
            </p>
          </li>
          <li class="extra__task__item">
            <h3 class="extra__task__title">Команда профессионалов</h3>
            <p class="extra__task__descr">
              Наша команда состоит из высококвалифицированных экспертов с
              многолетним опытом работы в области маркетинговых исследований.
              Каждый наш специалист обладает всесторонними знаниями и пониманием
              маркетинговых стратегий, аналитических методов и передовых
              инструментов. Мы гордимся нашей командой профессионалов, которые
              готовы применить свой опыт и знания для достижения Ваших
              бизнес-целей.
            </p>
          </li>
        </ul>
      </section>

      <section class="extra__team">
        <div class="extra__team__container">
          <h2 class="extra__task__header">команда</h2>
        </div>

        <div class="extra__slider__container">
          <section
            class="splide"
            id="slider__company"
            aria-label="Splide Basic HTML Example"
          >
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-1" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-2" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-4" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-5" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-6" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-7" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-8" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
                <li class="splide__slide">
                  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/company__slider.png" alt="slide__company-9" />
                  <p class="company__slider__name">Имя Фамилия</p>
                </li>
              </ul>
            </div>
          </section>
			 <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
          <p class="extra__company__descr__down">
             <?php echo $descr_1; ?>	
          </p>
			<?php
    }
}
?>
        </div>
        <button class="btn extra__grade__btn extra__content__btn">
          Задать вопрос
        </button>
      </section>
    </div>




    <?php
    get_footer();