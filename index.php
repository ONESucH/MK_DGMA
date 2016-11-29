<?php get_header(); ?>
<div class="content">
    <div class="news-day">
        <div class="active-form">
            <button id="newspaper">Новини</button>
            <button id="calendar">Оголошення</button>
        </div>
        <div class="block-newspaper">
            <?php if( have_posts() ): while ( have_posts() ): the_post(); ?>
                <!-- post -->
            <div class="information-panel">
                <h3><a href="<?php the_permalink(); ?>" class="titleUrl"><?php the_title(); ?></a></h3>
                <span><?php the_time('j F Y в H:i'); ?></span>
                <div class="information-block">
                    <?php the_post_thumbnail('full'); ?>
                    <p><?php kama_excerpt("maxchar=410"); ?></p>
                    <a href="<?php the_permalink(); ?>" class="accessBack">ЧИТАТИ ДАЛІ</a>
                </div>
            </div>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no post navigation -->
            <?php endif; ?>
            <div class="bottom-button">
                <a href="#">ДИВИТИСЯ ІНШІ<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>