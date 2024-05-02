<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main_style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <?php wp_head() ?>
</head>
<body class="dark_theme">
    <header class="main_header">
        <div class="logo">
            <?php $logoimg = get_header_image() ?>
            <a href="<?php echo site_url() ?>">
                <img src="<?php echo $logoimg ?>" alt="">
            </a>
        </div>
        <nav class="main_header_nav">
            <div class="header_menu">
                <?php wp_nav_menu(array('theme-location' => 'primary-menu')) ?>
            </div>
            <div class="mobile-menu-icon">
                <span class="material-symbols-outlined">
                    menu_open
                </span>
            </div>
            <div class="mobile-menu">
                <div class="close-m-menu-icon">
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </div>
                <?php wp_nav_menu(array('theme-location' => 'primary-menu')) ?>
            </div>
            <div class="searchbox">
                <div class="search_wrap">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </div>
                <form action="<?php echo esc_url(home_url()); ?>" method="get" class="searchform">
                    <input type="search" name="s" placeholder="Search" id="search" required>
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </nav>
    </header>