<?php get_header() ?>

    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit
         data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <div class="grid-container" style="margin-bottom: -50px; z-index: 3; position: relative; text-align: right;">
            <div class="slide-text-wrap">
                <h4 class="slide-text">Sizi Arayalım</h4>
            </div>
        </div>
        <ul class="orbit-container">
            <!-- <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button> -->


            <?php
            $args = array(
                'post_type' => 'slides',
                'post_status' => 'publish',
                'posts_per_page' => 8,
                'orderby' => 'title',
                'order' => 'ASC',
            );

            $loop = new WP_Query($args);
            $dataSlide = 0;
            while ($loop->have_posts()) : $loop->the_post();
                $dataSlide++; ?>
                <li class="is-active orbit-slide">
                    <img class="orbit-image" src="<?php the_post_thumbnail_url("1920x750") ?>">
                </li>
            <?php endwhile;

            wp_reset_postdata();
            ?>
        </ul>
        <nav class="orbit-bullets grid-container">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span
                        class="show-for-sr">Current Slide</span></button>

            <?php for ($i = 1; $i < $dataSlide; $i++) { ?>
                <button data-slide="<?php echo $i?>"><span class="show-for-sr">Second slide details.</span></button>
            <?php } ?>

        </nav>
    </div>

    <article class="grid-container">

        <div class="grid-x grid-margin-x">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>

                    <div class="cell medium-4 large-4 home-page-card">
                        <div class="grid-x cell">
                            <a href="<?php the_permalink() ?>">
                                <div class="small-12">
                                    <img src="<?php the_post_thumbnail_url("600x400") ?>" alt="" srcset="">
                                    <h4 class="text-center home-card-title"><?php the_title() ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php } // end while
            } // end if
            ?>


        </div>
    </article>

    <h2 class="text-center slogan">Uslu Yapı'dan ADEN PREMIUM</h2>

<?php echo the_custom_logo(); ?>


<?php get_footer() ?>