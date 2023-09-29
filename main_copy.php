<?php
/*
Template Name: main_copy
*/

get_header();
?>


  <main class="main">
        <div class="main__container">
            <div class="main__content-left">
				
<?php
$main_titles = get_field('main_title'); 

if ($main_titles) {
    foreach ($main_titles as $main_title) {
       
        $main_header = $main_title['main-header'];
        $orange_text = $main_title['orange-text'];
        $main_header_2 = $main_title['main-header-2'];
        ?>

        <h1 class="header__main">
            <?php echo esc_html($main_header); ?> <span class="orange"><?php echo esc_html($orange_text); ?></span> <br>
            <?php echo esc_html($main_header_2); ?> 
        </h1>

        <?php
    }
}
?>

                <h3 class="header_descr">
					<?php
$sub_title = get_field('sub_title');
					  echo esc_html($sub_title); ?> 
					

                <button class="btn header_btn">
					  <a class="research__link" href="#form-container">
                          Заказать услугу
                        </a>
					</button>
            </div>
         
        </div>
    </main>



<div class="container">
        <div class="research__border">
        </div>
<section class="research" id="research">
    <?php
    $research_repeater = get_field('research');

    if ($research_repeater) {
        echo '<ul class="research__list">';

        $counter = 1;

        foreach ($research_repeater as $research_item) {
         
            $research_header_text_orange = esc_html($research_item['research__header']['research_header-text-orange']);
          
            $research_header_text = esc_html($research_item['research__header']['research_header-text']);
    ?>

            <h2 class="research__main-header">
                <span class="orange"><?php echo $research_header_text_orange; ?></span>
                <?php echo $research_header_text; ?>
            </h2>

            <?php
            $cart_counter = 1;

            
            for ($cart_counter = 1; $cart_counter <= 20; $cart_counter++) {
                $cart_item = $research_item["research-{$cart_counter}-cart"];

                if ($cart_item) {
                    foreach ($cart_item as $item) {
                        $research_header = esc_html($item['research-first-header']);
                        $research_descr = esc_html($item['research-first-descr']);
                        $research_descr_2 = esc_html($item['research-first-descr-2']);
                        $research_descr_3 = esc_html($item['research-first-descr-3']);
            ?>

                        <li class="research__item<?php echo ($cart_counter % 2 === 0) ? ' item-right' : ''; ?>">
                            <h3 class="research__header">
                                <span class="orange visible"><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span> <?php echo $research_header; ?>
                            </h3>
                            <p class="research__descr">
                                <?php echo $research_descr; ?><br><br>
                                <?php echo $research_descr_2; ?><?php echo ($research_descr_3) ? '<br><br>' . $research_descr_3 : ''; ?>
                            </p>
                            <button class="btn research__btn">
                   <a class="research__link" href="<?php echo esc_url($item['client-services-content-link']); ?>">
    Подробнее
</a>
                            </button>
                        </li>

            <?php
                        $counter++;
                    }
                }
            }
        }
    }
    ?>
    </ul>
</section>


 <section class="company">
    <?php
    $about_company_mains = get_field('about-company-main');

    if ($about_company_mains) {
        foreach ($about_company_mains as $about_company_main) {
            $about_company_main_header = $about_company_main['about-company-main-header'];
            ?>

            <h2 class="company_header">
                <?php echo esc_html($about_company_main_header); ?>
            </h2>

            <div class="company__container">
                <div class="company_left">
                    <?php
                    $about_company_main_descrs = $about_company_main['about-company-main-descr'];

                    if ($about_company_main_descrs) {
                        foreach ($about_company_main_descrs as $about_company_main_descr) {
                            $descr_1 = $about_company_main_descr['descr-1'];
                            $descr_2 = $about_company_main_descr['descr-2'];
                            $descr_3 = $about_company_main_descr['descr-3'];
                            $descr_4 = $about_company_main_descr['descr-4'];
                            $descr_5 = $about_company_main_descr['descr-5'];
                            $descr_6 = $about_company_main_descr['descr-6'];
                            $descr_7 = $about_company_main_descr['descr-7'];
                            $descr_8 = $about_company_main_descr['descr-8'];
                            ?>

                            <p class="company_descr">
                                <?php echo esc_html($descr_1); ?>
                                <br>
                                <br>
                                <?php echo esc_html($descr_2); ?>
                                <br>
                                <br>
                                <span class="company__tick">&#10004;</span>
                                <?php echo esc_html($descr_3); ?>
                                <br>
                                <span class="company__tick">&#10004;</span>
                                <?php echo esc_html($descr_4); ?>
                                <br>
                                <span class="company__tick">&#10004;</span>
                                <?php echo esc_html($descr_5); ?>
                                <br>
                                <br>
                                <?php echo esc_html($descr_6); ?>
                                <br>
                                <?php echo esc_html($descr_7); ?>
                                <br>
                                <?php echo esc_html($descr_8); ?>
                            </p>

                        <?php
                        }
                    }
                    ?>
                </div>

                <div class="company_right">
                    <picture>
                        <?php
                        $about_company_main_img = $about_company_main['about-company-main-img'];
                        ?>
                        <img class="company-img" src="<?php echo esc_html($about_company_main_img); ?>" alt="company-img">
                    </picture>
                </div>
            </div>
        <?php
        }
    }
    ?>
</section>

	
				
		<section class="feedback"  id="form-container">		
            <div class="feedback__container">
                <h3 class="feedback__header">
                    Оставьте свои данные
                    <br>
                    для получения бесплатной консультации
                </h3>

         
  <div class="feedback__right">
          <form action="#" class="feedback__form" method="post"  id="feedback-form-1">
    <input type="text" name="name" class="feedback__input" placeholder="Имя" minlength="3" required>
	<input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
    <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25" required>
    <textarea name="message" class="feedback__textarea" placeholder="Сообщение" cols="30" rows="10"></textarea>
			  <button type="submit" class="btn feedback__btn" name="submit" id="submit-feedback-1">Отправить</button>
    <div class="checkbox-wrapper">
        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">Я согласен на обработку персональных данных</label>
    </div>
			  <div class="delivered">
				  
			  </div>
</form>
                </div>
            </div>
        </section>

                    

        
<section class="companyFacts">
    <?php
    $company_facts = get_field('company-facts');
    if ($company_facts) {
        foreach ($company_facts as $fact_item) {
            $fact_orange_text = $fact_item['orange-text'];
            $fact_text = $fact_item['text-2'];
            $fact_cards = $fact_item['company-facts-carts'];

            ?>
            <h2 class="companyFacts__header">
                <span class="orange">
                    <?php echo esc_html($fact_orange_text); ?>
                </span>
                <?php echo esc_html($fact_text); ?>
            </h2>
            <ul class="companyFacts__list">
                <?php
                if ($fact_cards) {
                    foreach ($fact_cards as $fact_card) {
                        $fact_card_figure = $fact_card['figure'];
                        $fact_card_symbol = $fact_card['symbol'];
                        $fact_card_text = $fact_card['text'];
                        ?>
                        <li class="companyFacts__item">
                            <h3 class="companyFacts__fugure"><?php echo str_replace(' ', '', esc_html($fact_card_figure)); ?><span class="orange"><?php echo esc_html($fact_card_symbol); ?>
                                </span>
							</h3>
                            <p class="companyFacts_descr"><?php echo esc_html($fact_card_text); ?>
                            </p>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
            <?php
        }
    }
    ?>
    <button class="btn companyFacts_btn">
        <a class="research__link" href="https://brandmetrika.ru/company/">
            Подробнее о нас
        </a>
    </button>
</section>






    </div>  

          <section class="methods" id="methods">
  <div class="methods__container">
                <h2 class="methods__header">
                    КЛЮЧЕВЫЕ МЕТОДЫ СБОРА ДАННЫХ
                </h2>
                <h2 class="methods__header__mobile">
                    <span class="orange">КЛЮЧЕВЫЕ</span> МЕТОДЫ СБОРА ДАННЫХ
                </h2>
              <div class="methods__container-items">
    <?php
    $methods__main = get_field('methods__main');
    if ($methods__main) {
        $odd_items = array();
        $even_items = array();
        
        foreach ($methods__main as $key => $methods__main_item) {
            $methods_main_text = $methods__main_item['methods-main-text'];
            $methods_main_link = $methods__main_item['methods-main-link'];
            
            if ($key % 2 == 0) {
              
                $even_items[] = array('text' => $methods_main_text, 'link' => $methods_main_link);
            } else {
               
                $odd_items[] = array('text' => $methods_main_text, 'link' => $methods_main_link);
            }
        }
        ?>

        <div class="methods__left">
            <ul class="methods__list">
                <?php
                foreach ($odd_items as $item) {
                    ?>
                    <li class="methods__item">
                        <a class="research__link" href="<?php echo esc_html($item['link']); ?>">
                            <?php echo esc_html($item['text']); ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>

        <div class="methods__right">
            <ul class="methods__list">
                <?php
                foreach ($even_items as $item) {
                    ?>
                    <li class="methods__item">
                        <a class="research__link" href="<?php echo esc_html($item['link']); ?>">
                            <?php echo esc_html($item['text']); ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
</div>

	  

<div class="methods__mobile">
    <?php
    $methods__main_mobile = get_field('methods__main_mobile');
    if ($methods__main_mobile) {
        ?>
        <ul class="methods__list__mobile">
            <?php
            foreach ($methods__main_mobile as $methods__main_mobile_item) {
                $methods_main_text_mobile = $methods__main_mobile_item['methods-main-text-mobile'];
                $methods_main_descr_mobile = $methods__main_mobile_item['methods-main-descr-mobile'];
                $methods_main_link_mobile = $methods__main_mobile_item['methods-main-link-mobile'];
                ?>
                <li class="methods__item__mobile">
                    <h4 class="methods__subtitle__mobile">
                       <?php echo esc_html($methods_main_text_mobile); ?>
                        <span class="accordion-icon active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                                <path d="M6 9L12 15L18 9" stroke="#2B2B2B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </h4>
                    <div class="methods__content__mobile">
                        <p class="methods__description__mobile">
                           <?php echo esc_html($methods_main_descr_mobile); ?>
                        </p>
                        <button class="btn methods__btn__mobile">
                            <a class="methods__link__mobile" href="<?php echo esc_html($methods_main_link_mobile); ?>">
                                Перейти к услуге
                            </a>
                        </button>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
        <?php
    }
    ?>
</div>

	  
                </div>
            </div>
        </section>
                    

<div class="container">
      <section class="business" id="business">
            <h2 class="busuness_header">
                <span class="orange"> BRANDMETRIKA</span> ПАРТНЕР <br> В РАЗНООБРАЗНЫХ ОТРАСЛЯХ БИЗНЕСА
            </h2>

            <ul class="business__list">
                <li class="business__item">
                      <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/fmcg-icon.svg" alt="fmcg">
                    <span class="business__item-text">  
					<a class=" business__item-text" href="https://brandmetrika.ru/fmcg/">
                              FMCG
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/tourism-icon1.svg" alt="tourism">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/tourism/">
                             Туризм
                        </a>
					</span>
                </li>
                <li class="business__item">  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/retail-icon1.svg" alt="retail">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/retail/">
                            Розничная торговля
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/financial-icon1.svg" alt="financial">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/financial/">
                            Финансовый сектор
                        </a>
					</span>
                </li>
                <li class="business__item">  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/medical-icon1.svg" alt="medical">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/medical/">
                            Медицина
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/telecom-icon1.svg" alt="telecom">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/telecom-it/">
                            Телеком и IT
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/horeca-icon1.svg" alt="horeca">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/horeca/">
                            HoReCa
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/real-estate-icon1.svg" alt="real-estate">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/real-estate/">
                           Недвижимость
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/e-commerce-icon.svg" alt="ecommerce">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/e-commerce/">
                         E-commerce
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/transport-icon.svg" alt="transport">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/transport/">
                           Транспорт
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/sport-icon.svg" alt="sport">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/sport/">
                             Спортивная индустрия
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/beauty-icon.svg" alt="beauty">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/beauty/">
                            Бьюти-индустрия
                        </a>
					</span>
                </li>
                <li class="business__item">  <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/electronic-icon.svg" alt="electronic">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/electronic/">
                             Электроника и бытовая техника
                        </a>
					</span>
                </li>
                <li class="business__item">   <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/auto-icon.svg" alt="auto">
                    <span class="business__item-text">
					<a class=" business__item-text" href="https://brandmetrika.ru/auto/">
                           Автомобильная промышленность
                        </a>
					</span>
                </li>
                <li class="business__item"> <img src="https://brandmetrika.ru/wp-content/uploads/2023/08/gos-icon.svg" alt="gos">
					<span class="business__item-text">
					<a class=" business__item-text" href="/">
                           Государственный сектор
                        </a>
					</span>
                </li> 
            </ul>
        </section>

        <section class="trust">
            <h2 class="header__trust">
                <span class="orange">НАМ</span> ДОВЕРЯЮТ
            </h2>


            <div class="trust__slider-container">
               <section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
<ul class="splide__list">
    <?php
    $main_slider = get_field('main-slider');
    if ($main_slider) {
        foreach ($main_slider as $key => $main_slider_item) {
            $main_slider_img = $main_slider_item['main-slider-img'];
            
            $img_classes = '';

            if ($key == 6) {
                $img_classes = 'slider-sokolov';
            } elseif ($key == 7) {
                $img_classes = 'slider-sony';
            } elseif ($key == 1) {
                $img_classes = 'slider-mts';
            } elseif ($key == 10) {
                $img_classes = 'slider-lukoil';
            }
            
            if (!empty($main_slider_img)) {
                ?>
                <li class="splide__slide">
                    <img class="<?php echo esc_attr($img_classes); ?>" src="<?php echo esc_url($main_slider_img['url']); ?>" alt="<?php echo esc_attr($main_slider_img['alt']); ?>">
                </li>
                <?php
            }
        }
    }
    ?>
</ul>



  </div>
</section>
            </div>

            <div class="trust__feedback">
                <ul class="trust__feedback-list">
                 <li class="trust__feedback-item">
    <a href="https://yandex.ru/profile/71785699396" target="_blank">
        <img class="trust__feedback-img" src="https://brandmetrika.ru/wp-content/uploads/2023/09/яндекс-2.svg" alt="yandex">
    </a>
</li>
<li class="trust__feedback-item">
    <a href="https://2gis.ru/spb/firm/70000001078823855/tab/reviews?m=30.32981%2C59.875668%2F16" target="_blank">
        <img class="trust__feedback-img" src="https://brandmetrika.ru/wp-content/uploads/2023/09/2гис-2.svg" alt="2gis">
    </a>
</li>


                  <li class="trust__feedback-item">
    <a href="https://g.page/r/CVfHvUPHVyv_EAI/review" target="_blank">
        <img class="trust__feedback-img" src="https://brandmetrika.ru/wp-content/uploads/2023/09/гугл-2.svg" alt="google">
    </a>
</li>

                    <li class="trust__feedback-item">
						   <a href="https://otzovik.com/review_15187408.html" target="_blank">
						<img class="trust__feedback-img" src="https://brandmetrika.ru/wp-content/uploads/2023/08/отзовик-4.png" alt="otzovik"></li>
                </ul>
            </div>
        </section>
	


        <section class="contacts" id="contacts">
            <h2 class="contacts__header">
                КОНТАКТЫ
            </h2>
            <div class="contacts__container">
                <div class="contacts__left">
                    <p class="contacts__descr">
                        Свяжитесь с нами прямо сейчас, чтобы начать сотрудничество
                        и проконсультироваться о том, как мы можем помочь вашему бизнесу достичь успеха.
                        <br>
                        <br>
                        Заполните форму на нашем сайте или свяжитесь
                        с нами по указанным контактам.
                    </p>

                    <div class="contacts__container-feedback">
                        <a class="contacts__tel" href="tel:+78003501136">+7(800)350-11-36</a>
                        <a class="contacts__mail" href="mailto:info@brandmetrika.ru">info@brandmetrika.ru</a>
                    </div>

                    <div class="contacts__container-social">
                        <a class="contacts__vk" href="https://vk.com/vk_brandmetrika">
                            <svg width="48" height="48" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.073 2H8.937C3.333 2 2 3.333 2 8.927V15.063C2 20.666 3.323 22 8.927 22H15.063C20.666 22 22 20.677 22 15.073V8.937C22 3.333 20.677 2 15.073 2ZM18.146 16.27H16.687C16.135 16.27 15.969 15.823 14.979 14.833C14.115 14 13.75 13.896 13.531 13.896C13.229 13.896 13.146 13.979 13.146 14.396V15.708C13.146 16.063 13.031 16.271 12.104 16.271C11.2043 16.2105 10.3319 15.9372 9.5586 15.4735C8.78527 15.0098 8.13317 14.3691 7.656 13.604C6.52317 12.194 5.73494 10.5391 5.354 8.771C5.354 8.552 5.437 8.354 5.854 8.354H7.312C7.687 8.354 7.822 8.521 7.969 8.906C8.677 10.99 9.885 12.802 10.375 12.802C10.563 12.802 10.645 12.719 10.645 12.25V10.104C10.583 9.125 10.063 9.042 10.063 8.688C10.0697 8.59463 10.1125 8.50753 10.1823 8.44518C10.2521 8.38283 10.3435 8.35012 10.437 8.354H12.729C13.042 8.354 13.146 8.51 13.146 8.885V11.781C13.146 12.094 13.281 12.198 13.375 12.198C13.563 12.198 13.708 12.094 14.052 11.75C14.7909 10.8489 15.3945 9.84508 15.844 8.77C15.8899 8.64086 15.9769 8.5303 16.0915 8.45519C16.2062 8.38008 16.3423 8.34454 16.479 8.354H17.938C18.375 8.354 18.468 8.573 18.375 8.885C17.8445 10.0734 17.1881 11.2015 16.417 12.25C16.26 12.49 16.197 12.615 16.417 12.896C16.562 13.115 17.073 13.542 17.417 13.948C17.9169 14.4466 18.332 15.0236 18.646 15.656C18.771 16.062 18.562 16.27 18.146 16.27Z"
                                    fill="#151515"></path>
                            </svg>
                        </a>
                        <a class="contacts__vk" href="https://t.me/Brandmetrika">
                            <svg width="47" height="48" viewbox="0 0 24 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0517 1.12925L0.788779 9.3711C-0.0668777 9.75491 -0.356284 10.5235 0.581966 10.9407L6.03681 12.6831L19.2259 4.48986C19.9461 3.9755 20.6833 4.11266 20.0489 4.67849L8.72125 14.9879L8.36542 19.3509C8.695 20.0245 9.29847 20.0277 9.6834 19.6928L12.8174 16.7121L18.1848 20.7521C19.4314 21.494 20.1098 21.0152 20.378 19.6555L23.8985 2.89911C24.2641 1.22544 23.6407 0.488002 22.0517 1.12925Z"
                                    fill="#151515"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="contacts__right">
                    <form action="#" class="feedback__form"  id="feedback-form-2">
                        <input type="text" class="feedback__input" name='name' placeholder="Имя" minlength="3" required
                            pattern="^[А-Яа-яЁёA-Za-z]+$" title="Пожалуйста, введите правильное имя">
						<input type="email" name="email" class="feedback__input" placeholder="E-mail" required>
                        <input type="tel" name="phone" class="feedback__input" placeholder="Телефон" minlength="11" maxlength="25"
                            required>
                        <textarea name="message" class="feedback__textarea" placeholder="Сообщение" id="" cols="30"
                            rows="10"></textarea>
                        <label for="" class="contacts__label">Отправляя форму, я даю своё согласие на обработку
                            персональных данных и подтверждаю факт ознакомления
                            с Политикой конфиденциальности </label>

                        <div class="checkbox-wrapper checkbox-wrapper-contacts ">
                            <input type="checkbox" id="form-2" name="form-2" required
                                title="Пожалуйста, отметьте это поле">
                            <label for="form-2">Подтверждаю свое согласие на обработку персональных 
данных</label>
                        </div>
						<div class="delivered-2">
				  
			  </div>
                        <button class="btn contacts-btn" id="submit-feedback-2" type="submit">Отправить заявку</button>
                    </form>
                </div>
            </div>

        </section>
    </div>









<?php
get_footer();
