<?php
/* Template Name: İletisim Template */
?>

<?php get_header() ?>

<div class="grid-container full">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1288.4967925819935!2d34.797596340227095!3d39.81643198419657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408070bcab35d055%3A0x2d85441338972669!2sYozgat%2C%20Yozgat%20Merkez%2FYozgat!5e0!3m2!1str!2str!4v1605634366232!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<?php
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>
    
    <div class="grid-container iletisim-page-container">
      <h4 class="iletisim-page-title"><?php the_title() ?></h4>
    </div>

    <div class="grid-container" style="max-width: 800px; margin-bottom: 100px;">
      <?php the_content() ?>
    </div>
<?php } // end while
} // end if
?>


<?php get_footer() ?>