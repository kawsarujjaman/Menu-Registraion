<?php

// register nav menu
register_nav_menu('main_menu','Main Menu');
// Comment above function because that already come from bootstrap walker  menu

// Default menu function
// function defalut_menu_register()
// {
//     echo '<ul class="nav navbar-nav"';
//     echo '<li><a href="'.esc_url(home_url()).'">Home</a></li>';
//     echo '<ul class="nav navbar-nav"';
//     echo '<ul>';
// }


// register_nav_menus(array(
//     'loged_in_menu'=> 'loged-in-menu',
//     'loged_out_menu'=> 'loged-out-menu',
// ) );


function default_auth_menu(){
    echo '<ul class="nav navbar-nav"';

    if(is_user_logged_in( )){
        echo '<li><a href="'.home_url().'/wp-admin/nav-menus.php"> Create Primary Menu</a></li>';
    }
    else{
       echo '<li><a href="'.home_url().'"> Home</a></li>';
    
    }
    echo '<ul>';

    }