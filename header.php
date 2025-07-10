<header class="kinola-header">
  <nav class="kinola-nav">
    <div class="kinola-logo">
      <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($custom_logo_id , 'full');

        if ($logo_url) :
        ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="kinola-logo-link">
            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="kinola-logo-photo" />
          </a>
        <?php
        else :
        ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="kinola-logo-link">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
    </div>

    <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container'      => false,
        'menu_class'     => 'kinola-mainmenu',
      ]);
    ?>
  </nav>
</header>
