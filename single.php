<?php get_header() ?>

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>

	  <div class="grid-container full">
		  <img src="<?php the_post_thumbnail_url("1920x500") ?>" alt="" srcset="">
		  <h4 class="text-center home-card-title"><?php the_title() ?></h4>
      </div>  

    <div class="grid-container" style="max-width: 800px; margin-bottom: 100px;">
      <?php the_content() ?>
    </div>
<?php } // end while
} // end if
?>


<?php get_footer() ?>