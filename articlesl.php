<?php
/*
Template Name: articles
*/

get_header();
?>





    <div class="extra__container">
        <div class="articles__container">
<ul class="articles__list">
    <?php
    $articles = get_field('articles');
    if ($articles) {
        $totalArticles = count($articles);
        $visibleArticles = 6; // Сколько статей видно изначально
        $hiddenArticles = $totalArticles - $visibleArticles;

        foreach ($articles as $key => $articles_item) {
            $link = esc_url($articles_item['link']);
            $img = esc_url($articles_item['img']);
            $date = esc_html($articles_item['date']);
            $title = esc_html($articles_item['title']);
            $class = ($key >= $visibleArticles) ? 'hidden-article' : ''; 
            ?>

            <li class="articles__item <?php echo $class; ?>">
                <a href="<?php echo $link; ?>" class="articles__link">
                    <div class="articles__img-container">
                        <img class="articles__img" src="<?php echo $img; ?>" alt="<?php echo $title; ?>">
                    </div>
                    <p class="articles__date"><?php echo $date; ?></p>
                    <p class="articles__title"><?php echo $title; ?></p>
                </a>
            </li>
            <?php
        }
    }
    ?>
</ul>
<button class="btn article_btn" id="loadMoreBtn">
    Загрузить еще
</button>

        </div>
    </div>

    <?php
    get_footer();