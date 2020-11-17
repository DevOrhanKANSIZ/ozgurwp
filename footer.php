<footer class="grid-container full text-center">
    <div class="footer-menu footer-section">
        <ul class="menu align-center">
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'items_wrap' => '%3$s',
                'container' => false
            )); ?>
        </ul>
    </div>
    <div class="footer-section">
        BİZE ULAŞIN: <strong>0212 212 21 21</strong>
    </div>
    <div class="footer-section footer-logo">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
<script>
    $(document).foundation();
</script>
<?php wp_footer() ?>
</body>

</html>