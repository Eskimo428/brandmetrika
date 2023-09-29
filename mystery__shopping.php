<?php
/*
Template Name: mystery__shopping
*/

get_header();
?>

       <main>
      <div class="extra__main__container">
        <div class="extra__main__content">
          <h1 class="extra__header__main extra__header__store__main">
            Тайный
            <span class="orange">ПОКУПАТЕЛЬ</span> (Mystery Shopping)
          </h1>
			<?php
                $main_descr = get_field('main-descr');
                if ($main_descr) {
                ?>
          <p class="extra__header__descr extra__header__market__descr">
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
        <h2 class="extra__task__header extra__task__header__monitoring">
          В каких <span class="orange"> СФЕРАХ </span> мы проводим данное
          исследование
        </h2>

        <ul
          class="extra__methods__list extra__monitoring__list extra__methods__mysteryShopping__list"
        >
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/retail-icon1.svg" alt="retail" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              > <a class="extra__methods__item-text" href="https://brandmetrika.ru/retail/">
				Розничная торговля
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/financial-icon1.svg" alt="fin-sector" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/financial/">
				Финансовый сектор
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/medical-icon1.svg" alt="medical" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/medical/">
				Медицина
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/auto-icon.svg" alt="auto" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/auto//">
				Автомобильная промышленность
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/tourism-icon1.svg" alt="tourism" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/tourism/">
				Туризм
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/telecom-icon1.svg" alt="telecom" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/telecom-it/">
				Телеком и IT
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/real-estate-icon1.svg" alt="real-estate" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/real-estate/">
				Недвижимость
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/horeca-icon1.svg" alt="horeca" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/horeca/">
				HoReCa
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/e-commerce-icon.svg" alt="ecomm" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/e-commerce/">
				E-commerce
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/sport-icon.svg" alt="" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/sport/">
				Спортивная индустрия
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/beauty-icon.svg" alt="beauty" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/beauty/">
				Бьюти-индустрия
				</a>
				</span
            >
          </li>
          <li
            class="extra__methods__item extra__mysteryShopping__methods__item"
          >
            <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/transport-icon.svg" alt="transport" />
            <span
              class="extra__methods__item-text extra__methods__client__item-text"
              ><a class="extra__methods__item-text" href="https://brandmetrika.ru/transport/">
				Транспорт
				</a>
				</span
            >
          </li>
        </ul>
      </section>

      <section class="extra__grade">
        <h2 class="extra__grade__header">
          КАКИЕ <span class="orange">ЗАДАЧИ</span> решает исследование Тайный
          покупатель
        </h2>

        <div
          class="extra__grade__container extra__mysteryShopping__container-middle ">
          <div class="extra__grade__left extra__mysteryShopping__left extra__mysteryShopping__grade__left">
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >01</span>
              Оценить выполнение стандартов компании в торговых точках
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >02</span
              >
              Повысить качество обслуживания клиентов
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >03</span
              >
              Осуществить контроль работы персонала сети даже в самых отдалённых
              точках продаж и обслуживания
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >04</span
              >
              Использование результатов исследования как часть мотивационной
              схемы персонала
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >05</span
              >
              Использование проекта для проведения обучения сотрудников на
              основе выявленных недостатков
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >06</span
              >
              Мониторинг сервиса конкурентов и выявление лучших практик
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >07</span
              >
              Получать регулярную информацию от покупателей об уровне
              обслуживания торговой или сервисной точки
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >08</span
              >
              Поддержание работы персонала на стабильно высоком уровне
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >09</span
              >
              Контроль работы call-центра компании
            </p>
            <p class="extra__mysteryShopping__task__item">
              <span class="extra__mysteryShopping__task__figure orange"
                >10</span
              >
              Провокационные проверки, включая просьбу провести услугу "мимо
              кассы" или предоставить необоснованную скидку клиенту
            </p>
          </div>
          <div class="extra__grade__right extra__mysteryShopping__right extra__mysteryShopping__grade__right">
            <picture>
              <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/mystery-shooing3600.png">
              <img class="picture__img  extra__grade__img extra__mysteryShopping__task-img"
               src="https://brandmetrika.ru/wp-content/uploads/2023/09/mystery-shooing3600.png" alt="mystery-shooing">
            </picture>
          </div>
        </div>
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
        <h2 class="extra__grade__header">
          Кто наши <span class="orange">ТАЙНЫЕ</span> покупатели?
        </h2>
        <div
          class="extra__grade__container extra__mysteryShopping__container-middle"
        >
          <div class="extra__grade__left extra__mysteryShopping__left-who">
			   <?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
            <p class="extra__grade__descr">
                  <?php echo $descr_1; ?>	
			   <?php
    }
}
?>
            </p>
          </div>
        </div>
      </section>

      <section class="extra__methods">
        <h2 class="extra__methods__header">
          <span class="orange">ЭТАПЫ</span> проведения проверки Тайным
          покупателем
        </h2>

        <ul class="extra__survey__stages__list">
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">01</span>
            <p class="extra__survey__stages__descr">
              Изучение специфики бизнеса Заказчика, разработка методических
              материалов, подготовка инструкций для проверяющих и легенд
              проверок, проработка формата отчета.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">02</span>
            <p class="extra__survey__stages__descr">
              Подбор и обучение проверяющих, координация работы сотрудников в
              регионах, проведение пилотных проверок для оптимизации
              методологии.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">03</span>
            <p class="extra__survey__stages__descr">
              Проведение проверок, заполнение анкет.
            </p>
          </li>
          <li class="extra__survey__stages__item">
            <span class="extra__survey__stages__fugure">04</span>
            <p class="extra__survey__stages__descr">
              Контроль сроков и качества выполнения работ, подготовка и анализ
              массива данных, включая статистические показатели и расчет
              индексов.
            </p>
          </li>
          <li class="extra__survey__stages__item extra__survey__mysteryShopping__stages__item">
            <span class="extra__survey__stages__fugure">05</span>
            <p class="extra__survey__stages__descr">
              Написание итоговых отчетов, подготовка выводов и рекомендаций на
              основе трендов отрасли.
            </p>
          </li>
        </ul>
      </section>

      <section class="extra__methods">
        <h2 class="extra__methods__header">
          <span class="orange">КОНТРОЛЬ</span> качества
        </h2>
        <p class="extra__task__descr extra__mysteryShopping__control-p">
          Мы придаем огромное значение контролю качества на всех этапах
          реализации проекта. Вот некоторые методы, которые мы применяем:
        </p>

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
        <button
          class="btn extra__grade__btn extra__mysteryShopping__control__btn">
      <a class="research__link" href="#form-container">Заказать услугу</a>
        </button>
      </section>
    </div>



    <?php
    get_footer();