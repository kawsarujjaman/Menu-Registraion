<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php home_url() ;?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

    <?php wp_nav_menu(array(
        // 'theme_location' => is_user_logged_in( )? 'loged_in_menu' : 'loged_out_menu',
        'theme_location'=> 'main_menu',
        'menu_class'=> 'navbar-nav',
        'menu_id'=> 'navbarNavDropdown',
        'fallback_cb'=> 'default_auth_menu',
        'container'=> '',
        // 'container_class'=> 'collapse navbar-collapse ',
        // 'container_id'=> 'navbarNavDropdown',
        
        // 'walker'=> new bootstrap_5_wp_nav_menu_walker(),
     ) );?>
</div>
      
    </div>
  </div>
</nav>