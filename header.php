<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet'
          type='text/css'>
    <?php wp_head() ?>
    <title><?php wp_title(); ?></title>
</head>

<body>
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12">
            <ul class="menu align-right social-icons">
                <li><a href="#"><i class="fi-social-facebook icon"></i></a></li>
                <li><a href="#"><i class="fi-social-instagram icon"></i></a></li>
                <li><a href="#"><i class="fi-telephone icon"> </i> 0212 212 21 21</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Start Top Bar -->
<div class="title-bar" data-responsive-toggle="mainNavigation" data-hide-for="medium">
    <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
        <div class="title-bar-title">Menu</div>
    </div>
    <div class="title-bar-right">
        ADENPREMIUM
    </div>
</div>

<div class="top-bar" id="mainNavigation">
    <div class="top-bar-left">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 text-right">
                    <ul class="menu  vertical medium-horizontal">
                        <li class="menu-text hide-for-small-only">

                                <?php
                                if (function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                ?>

                        </li>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'items_wrap' => '%3$s',
                            'container' => false
                        )); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar -->
</div>