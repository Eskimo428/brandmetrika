<?php
/*
Template Name: auto
*/

get_header();
?>


    <main>
        <div class="extra__main__container">
            <div class="extra__main__content">
                <h1 class="extra__header__main extra__header__store__main">

                    <span class="orange">АВТОМОБИЛЬНЫЙ</span> сектор
                </h1>
				<?php
$main_descr = get_field('main-descr');
if ($main_descr) {
?>
                <p class="extra__header__descr extra__header__auto__descr">
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
            <h2 class="extra__grade__header">Маркетинговые исследования в сфере автомобильной промышленности помогут
                решить следующие <span class="orange">ЗАДАЧИ</span> </h2>
            <div class="extra__grade__container  column  extra__auto-container">
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


               <div class="extra__black__container mt48 telecom-black-container">
            <p class="extra__grade__descr extra__medical__descr white-text telecom-descr-down">
                            Кроме того, в сфере автомобильной промышленности могут быть применены и другие методы
                            исследований, включая анализ продаж, изучение мнения экспертов, проведение фокус групп,
                            анализ данных онлайн-поведения клиентов и многое другое.
                        </p>
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
			  <button type="submit" class="btn feedback__btn" name="submit" id="submit-feedback-1">Отправить</button>
    <div class="extra__checkbox-wrapper">
        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">Я согласен на обработку персональных данных</label>
    </div>
			  <div class="delivered">
				  
			  </div>
			</form>
                </div>
            </div>
        </section>

        <section class="extra__grade">
			<?php
$descr_down = get_field('descr-down');
if ($descr_down) {
    foreach ($descr_down as $descr_down_item) {
        $descr_1 = esc_html($descr_down_item['descr-1']);
        $descr_2 = esc_html($descr_down_item['descr-2']);
        ?>
            <p class="extra__grade__descr extra__auto__descr">
                <?php echo $descr_1; ?>	
            </p>
			                 <?php
    }
}
?>
          	 <div class="extra__telecom-container">
            <div class="column extra__tourism__left auto-container-down">
				<?php
            $content = get_field('content_2');
            if ($content) {
                foreach ($content as $content_item) {
                    $content_header_2 = esc_html($content_item['content-header-2']);
                    $content_descr_2 = esc_html($content_item['content-descr-2']);
            ?>
                <p class="extra__mysteryShopping__task__item">
                    <span class="extra__mysteryShopping__task__figure orange">
					 <?php echo  $content_header_2; ?>
					</span>
                    <?php echo  $content_descr_2; ?>
                </p>
             <?php
                }
            }
            ?>   
            </div>

           <div class="extra__grade__right extra__mysteryShopping__right">
                <picture>
                    <source srcset="https://brandmetrika.ru/wp-content/uploads/2023/09/auto.png">
                    <img class="picture__img  extra__grade__img extra__auto-img" 
                    src="https://brandmetrika.ru/wp-content/uploads/2023/09/auto.png" alt="auto">
                  </picture>
            </div>
        </div>
           

            <button class="btn extra__grade__btn extra__content__btn">
				<a class="research__link" href="#form-container">
                          Заказать услугу
                        </a>
			</button>


        </section>





    </div>



    <?php
    get_footer();