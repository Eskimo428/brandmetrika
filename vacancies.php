<?php
/*
Template Name: vacancies
*/

get_header();
?>


       <main>
      <div class="extra__main__container">
        <div class="extra__main__content">
          <h1 class="extra__header__main extra__header__store__main">
            вакансии
          </h1>
			<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
          <p class="extra__header__descr extra__header__vacation__descr">
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
		  
		  <ul class="extra__task__list">
          <li class="extra__task__item item-vacancies">
            <h3 class="extra__task__title">Тайный покупатель</h3>
            <p class="extra__task__descr">
             <b>Вы:</b> Желаете работать в своем ритме, выбирая проекты,
              которые вас больше всего интересуют. Вы готовы к динамичной работе
              и быстрому решению задач.
            </p>
			    <p class="extra__task__descr">
           <b>Мы предлагаем:</b> Компенсацию за выполненные проверки,
              обучение и поддержку на протяжении всего периода работы.<br />
              Вам доступны разнообразные проекты: от удаленных звонков в
              call-центры и проверки сервисов доставки до визитов в организации
              в вашем городе проживания (банки, кафе, магазины одежды и пр.)
            </p>
			 
          </li>
			    <button class="btn extra__grade__btn extra__content__btn ms__btn">
              <a href="https://brandmetrika.shopmetrics.com/auth/index.asp#signup" class="mysteryShopping__link">Зарегистрироваться в качестве тайного покупателя</a>
            </button>
	</ul>
				  
				  
				    <ul class="extra__task__list vacancies-list">
          <li class="extra__task__item item-vacancies-interview">
            <h3 class="extra__task__title">Интервьюер</h3>
            <p class="extra__task__descr">
                 <b>Вы:</b> Умеете находить общий язык с людьми, ориентированы на
              результат и готовы развиваться в профессиональной сфере.
            </p>
			    <p class="extra__task__descr">
           <b>Мы предлагаем:</b> Оплату по итогам выполненной работы,
              возможность работать удаленно или на территории города и
              магазинов. Мы также предоставляем всю необходимую поддержку и
              обучение.
            </p>
          </li>
			      <div
              class="extra__feedback__container mt48 extra__feedback__container__vacancies"
            >
              <h4
                class="extra__feedback__header extra__feedback__header__vacancies"
              >
                Отправить резюме
              </h4>

              <div class="extra__feedback__right">
               <form action="#" class="extra__feedback__form" method="post" id="feedback-form-3" enctype="multipart/form-data">
    <input type="text" name="name" class="feedback__input" placeholder="ФИО" minlength="3" required pattern="^[А-Яа-яЁёA-Za-z]+$" title="Пожалуйста, введите правильное имя">
    <input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
    <input type="file" id="fileInput__one" name="attachment" accept=".doc, .pdf ,.docx" class="file-input" />
    <div class="file_container">
        <label for="fileInput__one" class="file-input-label">Прикрепить файл</label>
        <div id="selectedFileNameOne" class="selected-file-name">Файл не выбран</div>
    </div>

    <div class="extra__checkbox-wrapper extra__checkbox-wrapper__vacation">
        <p class="label__top label__vacancies">
            Отправляя форму, я даю своё согласие на обработку персональных данных и подтверждаю факт ознакомления с Политикой конфиденциальности
        </p>
        <input type="checkbox" id="interview2" name="interview" required title="Пожалуйста, отметьте это поле" />
        <label for="interview2">Я согласен на обработку персональных данных</label>
		   <div class="delivered-3"></div>
        <button type="submit" class="btn feedback__btn vacancies__btn" name="submit" id="submit-feedback-3">Отправить</button>
    </div>

</form>

              </div>
            </div>
		</ul>
				  
				  
				    <ul class="extra__task__list vacancies-list">
          <li class="extra__task__item item-vacancies-validator">
            <h3 class="extra__task__title">Валидатор данных</h3>
            <p class="extra__task__descr">
                 <b>Вы:</b> Ответственно подходите к работе, обладаете
              аналитическим складом ума и внимательностью к деталям.
            </p>
			    <p class="extra__task__descr">
          <b>Мы предлагаем:</b> Удаленную работу с оплатой за каждую
              проверенную анкету. Ваша задача - проверять анкеты тайных
              покупателей, сверять массивы данных по опросам и интервью с аудио
              и видеозаписями, фотографиями.
            </p>
          </li>
			      <div
              class="extra__feedback__container mt48 extra__feedback__container__vacancies"
            >
              <h4
                class="extra__feedback__header extra__feedback__header__vacancies"
              >
                Отправить резюме
              </h4>

              <div class="extra__feedback__right">
              <form action="#" class="extra__feedback__form" method="post" id="feedback-form-4" enctype="multipart/form-data">
    <input type="text" name="name" class="feedback__input" placeholder="ФИО" minlength="3" required pattern="^[А-Яа-яЁёA-Za-z]+$" title="Пожалуйста, введите правильное имя">
    <input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
    
   <input type="file" id="fileInput__two" name="attachment" accept=".doc, .pdf ,.docx" class="file-input" />
    <div class="file_container">
        <label for="fileInput__two" class="file-input-label">Прикрепить файл</label>
        <div id="selectedFileNameTwo" class="selected-file-name">Файл не выбран</div>
    </div>

    <div class="extra__checkbox-wrapper extra__checkbox-wrapper__vacation">
        <p class="label__top label__vacancies">
            Отправляя форму, я даю своё согласие на обработку персональных данных и подтверждаю факт ознакомления с Политикой конфиденциальности
        </p>
        <input type="checkbox" id="interview3" name="interview" required title="Пожалуйста, отметьте это поле" />
        <label for="interview3">Я согласен на обработку персональных данных</label>
		    <div class="delivered-4"></div>
        <button type="submit" class="btn feedback__btn vacancies__btn" name="submit" id="submit-feedback-4">Отправить</button>
    </div>

</form>

              </div>
            </div>
						</ul>
				  
						 <ul class="extra__task__list vacancies-list">
          <li class="extra__task__item item-vacancies-coordinator">
            <h3 class="extra__task__title">Координатор проектов</h3>
            <p class="extra__task__descr">
                 <b>Вы:</b> Имеете опыт работы в команде, умеете организовывать и
              мотивировать других. Готовы действовать активно и участвовать в
              общении с разными людьми.
            </p>
			    <p class="extra__task__descr">
        	 <b>Мы предлагаем:</b> Удаленную работу, возможность выбора между
              сдельной оплатой и полным рабочим днем. Ваша задача - подбор и
              обучение тайных покупателей и интервьюеров по всей территории
              России. Оплата согласуется дополнительно в зависимости от опыта и
              времени, которые готов удалять работе кандидат.
            </p>
          </li>
			      <div
              class="extra__feedback__container mt48 extra__feedback__container__vacancies"
            >
              <h4
                class="extra__feedback__header extra__feedback__header__vacancies"
              >
                Отправить резюме
              </h4>

              <div class="extra__feedback__right">
                            <form action="#" class="extra__feedback__form" method="post" id="feedback-form-5" enctype="multipart/form-data">
    <input type="text" name="name" class="feedback__input" placeholder="ФИО" minlength="3" required pattern="^[А-Яа-яЁёA-Za-z]+$" title="Пожалуйста, введите правильное имя">
    <input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
    
   <input type="file" id="fileInput__three" name="attachment" accept=".doc, .pdf ,.docx" class="file-input" />
    <div class="file_container">
        <label for="fileInput__three" class="file-input-label">Прикрепить файл</label>
        <div id="selectedFileNameThree" class="selected-file-name">Файл не выбран</div>
    </div>

    <div class="extra__checkbox-wrapper extra__checkbox-wrapper__vacation">
        <p class="label__top label__vacancies">
            Отправляя форму, я даю своё согласие на обработку персональных данных и подтверждаю факт ознакомления с Политикой конфиденциальности
        </p>
        <input type="checkbox" id="interview4" name="interview" required title="Пожалуйста, отметьте это поле" />
        <label for="interview4">Я согласен на обработку персональных данных</label>
		  <div class="delivered-5"></div>
        <button type="submit" class="btn feedback__btn vacancies__btn" name="submit" id="submit-feedback-5">Отправить</button>
    </div>
  
</form>
              </div>
            </div>
        </ul>
      </section>
		<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
      <p class="extra__vacation__descr mt100">
         <?php echo $descr_1; ?>	
		  <?php
    }
}
?>
      </p>
    </div>


    <?php
    get_footer();