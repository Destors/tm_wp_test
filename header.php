<!DOCTYPE html>
<html class="no-js" lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript, разработка сайтов, создать сайт.">
    <meta name="description" content="Разработка и поддержка веб-сайтов, современный дизайн, новые технологии.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prosolovych Oleksandr">
    <title>Фронтенд разработчик Destors</title>
    <script>
      document.documentElement
        .classList.replace('no-js', 'js');
    </script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/mobile_style.css">
    <link rel="stylesheet" media="(min-width: 660px)" href="<?php bloginfo('template_directory') ?>/css/desktop_style.css">
    <link rel="stylesheet" media="(min-width: 2800px)" href="<?php bloginfo('template_directory') ?>/css/hight_res_style.css">
  </head>
  <body class="container">
    <header class="main-header">
      <section class="lang-menu">
        <h1 class="visually-hidden">Меню выбора языка</h1>
        <?php wp_nav_menu( array(
          'theme_location'  => '',
          'menu'            => '',
          'container'       => 'ul',
          'container_class' => 'lang-list',
          'container_id'    => '',
          'menu_class'      => 'lang-list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ) ); ?>
      </section>
      <section class="header-info">
        <div class="header-info__wrapper-photo">
          <picture>
            <source srcset="<?php bloginfo('template_directory') ?>/img/main_header_photo.jpg" media="(min-width: 2800px)">
            <img class="header-info__photo" src="<?php bloginfo('template_directory') ?>/img/main_header_photo_mobile.jpg" alt="На фото: Просолович Александр" title="Просолович Александр">
          </picture>
        </div>
        <div class="header-info__wrapper-info">
          <h1 class="header-info__title"><?php bloginfo('name'); ?></h1>
          <p class="header-info__description"><?php bloginfo('description'); ?></p>
        </div>
      </section>
    </header>