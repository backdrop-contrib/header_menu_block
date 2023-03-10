<?php
/**
 * @file
 * Display site header components.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $language_switcher: The site language switcher.
 * - $nav_menu: The themed navigation menu.
 * - $user_menu: The themed user menu.
 * - $search_form: The themed search form.
 */
?>


<div class="custom-header-wrapper">
  <?php if ($site_name || $logo): ?>
    <div class="logo-and-name">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header-logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if ($site_name): ?>
        <?php if (!$is_front): ?>
          <div class="header-site-name"><strong>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </strong></div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 class="header-site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <?php if ($nav_menu || $user_menu): ?>
    <div class="menus-and-switcher">
      <?php if ($nav_menu): ?>
        <nav class="header-menu-block custom-nav-menu">
          <?php print $nav_menu; ?>
        </nav>
      <?php endif; ?>
      <?php if ($user_menu): ?>
        <nav class="header-menu-block custom-user-menu">
          <?php print $user_menu; ?>
        </nav>
      <?php endif; ?>
    </div>

  <?php endif; ?>
  <?php if ($search_form): ?>
    <div class="header-search">
      <div class="search-block-wrapper">
        <?php print $search_form; ?>
      </div>
      <div class="btn">
        <svg class="magnifier-wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="magnifier" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>
        <svg class="closex-wrapper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class="closex" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($language_menu): ?>
    <div class="menus-and-switcher">
      <nav class="header-menu-block custom-language-menu">
        <?php print $language_menu; ?>
      </nav>
    </div>
  <?php endif; ?>
</div>
