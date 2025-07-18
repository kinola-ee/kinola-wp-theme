<header class="kinola-header">
  <nav class="kinola-nav">
    <div class="kinola-logo">
      <?php
        if (has_custom_logo()) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image($custom_logo_id, 'full', false, array(
            'class' => 'kinola-logo-photo',
            'alt' => get_bloginfo('name')
          ));
          echo '<a href="' . esc_url(home_url('/')) . '">' . $logo . '</a>';
        } else {
          echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
        }
      ?>
    </div>

    <button class="kinola-mobilemenu-open js-kinola-mobilemenu-open" aria-label="Open menu">
      <span class="kinola-mobilemenu-stripe"></span>
      <span class="kinola-mobilemenu-stripe"></span>
      <span class="kinola-mobilemenu-stripe"></span>
    </button>

    <nav class="kinola-mainmenu-wrap js-kinola-mobilemenu">
      <div class="kinola-logo">
        <?php
          if (has_custom_logo()) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image($custom_logo_id, 'full', false, array(
              'class' => 'kinola-logo-photo',
              'alt' => get_bloginfo('name')
            ));
            echo '<a href="' . esc_url(home_url('/')) . '" class="kinola-logo">' . $logo . '</a>';
          } else {
            echo '<a href="' . esc_url(home_url('/')) . '" class="kinola-logo">' . get_bloginfo('name') . '</a>';
          }
        ?>
      </div>

      <button class="kinola-mobilemenu-close js-kinola-mobilemenu-close" aria-label="Close menu">
        <span class="kinola-mobilemenu-stripe"></span>
        <span class="kinola-mobilemenu-stripe"></span>
      </button>
      
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class'     => 'kinola-mainmenu',
          'container'      => false,
          'fallback_cb'    => 'wp_page_menu',
        ));
      ?>
    </nav>
  </nav>
</header>
