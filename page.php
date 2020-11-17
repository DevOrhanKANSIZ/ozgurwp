<?php get_header() ?>

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>

    <div class="grid-container iletisim-page-container">
      <h4 class="iletisim-page-title"><?php the_title() ?></h4>
    </div>

    <div class="grid-container" style="margin-bottom: 100px;">
      <?php the_content() ?>
    </div>
<?php } // end while
} // end if
?>


<?php get_footer() ?>