<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  
    
/*
 * VITE & Tailwind JIT development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 *
 */

// dist subfolder - defined in vite.config.json
define('DIST_DEF', 'dist');

// defining some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);

// js enqueue settings
define('JS_DEPENDENCY', array()); // array('jquery') as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?

// deafult server address, port and entry point can be customized in vite.config.json
define('VITE_SERVER', 'http://localhost:3000');
define('VITE_ENTRY_POINT', '/main.js');

// enqueue hook
add_action( 'wp_enqueue_scripts', function() {
    
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {

        // insert hmr into head for live reload
        function vite_head_module_hook() {
            echo '<script type="module" crossorigin src="' . VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
        }
        add_action('wp_head', 'vite_head_module_hook');        

    } else {

        // production version, 'npm run build' must be executed in order to generate assets
        // ----------

        // read manifest.json to figure out what to enqueue
        $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );
        
        if (is_array($manifest)) {
            // Look for 'main.js' index
            $manifest_key = array_keys($manifest);
            $main_js_key = array_search('main.js', $manifest_key);

            if (isset($manifest_key[$main_js_key])) {
                // enqueue CSS files if there is any
                if (isset($manifest[$manifest_key[$main_js_key]]['css'])) {
                  foreach($manifest[$manifest_key[$main_js_key]]['css'] as $css_file) {
                      wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
                  }
                }

                // enqueue main JS file
                if ( ! empty($manifest[$manifest_key[$main_js_key]]['file'])) {
                    wp_enqueue_script( 'main', DIST_URI . '/' . $manifest[$manifest_key[$main_js_key]]['file'], JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
                }
            }
        }

    }

});
