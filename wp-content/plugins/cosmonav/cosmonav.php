<?php /**
 * Plugin Name: Cosmonav
 * Description: Cosmonav add navigation to your theme with space design and animation.
 * Plugin URI: http://dedenkof.pro/cosmonav
 * Author: V Dedenko
 * Author URI: http://dedenkof.pro
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: text-domain
 * Domain Path: domain/path
 */

/*
    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//add_menu_page('Cosmonav', 'Top-level menu title', 8, __FILE__, 'my_magic_function');
//add_submenu_page(__FILE__, 'Cosmonav', 'Cosmonav option', 8, __FILE__, 'my_magic_function');


         // add_menu_page('Cosmonav', 'My Test', 'manage_options', 'cosmonav', 'page');
         
/**
 * Register a custom menu page.
 */
function cosmonav_page(){
    add_menu_page( 
        'CosmoNav',
        'manage_options',
        'cosmonav',
        'cosmonav_page',
        plugins_url( 'cosmonav/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'cosmonav_page' );


/*register_activation_hook( __FILE__, 'cosmonav_activate' );
   выполнение при активации плагина
   например действия с БД
   $file(строка) (обязательный)
Путь до PHP файла, в котором находится функция обратного вызова, указанная во втором параметре $callback. Обычно используется волшебная константа PHP __FILE__.
$function(строка/массив) (обязательный)
Название функции обратного вызова. Для классов используйте массив: array( $this, 'название_функции' );

function cosmonav_activate (){
    
}

*/
 
/**
 * Display a custom menu page
 */
/*function my_custom_menu_page(){
    esc_html_e( 'Admin Page Test', 'textdomain' );  
}
     
     function cosmonav_page()
      {
          ?>
           <div class="wrap">
			<h2>Jumbo, by Bonfire</h2>
			<strong>Psst!</strong> Jumbo's color options can be changed under <strong>Appearance > Customize > Jumbo plugin colors</strong>.<br>
			Logo can be added under <strong>Appearance > Customize > Jumbo plugin logo</strong>

			<br>
			<br>
			<br>
			<strong>Jump to:</strong>
			<a href="#placement">Menu buttons placement options</a> | 
			<a href="#main-menu">Main menu options</a> | 
			<a href="#secondary-menu">Secondary menu options</a> | 
			<a href="#gravatar">Gravatar options</a>
			
			<?php
       }*/

	
	// ENQUEUE JS and CSS
	

	function cosmonav_css() {
	// enqueue cosmonav.css
		wp_register_style( 'cosmonav-css', plugins_url( 'css/cosmonav.css', __FILE__ ) . '', array(), '1', 'all' );
		wp_enqueue_style( 'cosmonav-css' );
	}
	add_action( 'wp_enqueue_scripts', 'cosmonav_css' );


	
	function cosmonav_js() {
	// enqueue cosmonav.js
		wp_register_script( 'cosmonav-js', plugins_url( 'js/cosmonav.js', __FILE__ ) . '', array( 'jquery' ), '1', true );  
		wp_enqueue_script( 'cosmonav-js' );
	}
	add_action( 'wp_enqueue_scripts', 'cosmonav_js' );