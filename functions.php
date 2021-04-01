<?php

// funtions.php is empty
// just VITE live refresh and enqueue styles & scripts for easy understanding



/*
 *
 * VITE & Tailwind JIT development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 * v0.1
 *
 */

// Some dev/prod mechanism would exist in your project
// Handling manualy here, change to test both cases
define('IS_VITE_DEVELOPMENT', true);
define('DIST_DEF', 'dist');

// deine some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);

// js enqueue settings
define('JS_DEPENDENCY', array()); // 'jquery' as example
define('JS_LOAD_IN_FOOTER', true);


function enqueue_scripts_and_styles() {
    
    
    if (@IS_VITE_DEVELOPMENT) {

        // 'npm run dev' running
        // ----------

        function vite_head_module_hook() {
            ?>
            <script type="module" crossorigin src="http://localhost:3000/main.js"></script>
            <?php
        }
        add_action('wp_head', 'vite_head_module_hook');        

    } else {

        // production version, 'npm run build' must be executed in order to generate assets
        // ----------

        // read manifest.json to figure out what to enqueue
        $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );
        
        // is ok
        if (is_array($manifest)) {
            
            // get first key, by default is 'main.js' but it can change
            $manifest_key = array_keys($manifest);
            if (isset($manifest_key[0])) {
                
                // enqueue CSS files
                foreach(@$manifest[$manifest_key[0]]['css'] as $css_file) {
                    wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
                }
                
                // enqueue main JS file
                $js_file = @$manifest[$manifest_key[0]]['file'];
                if ( ! empty($js_file)) {
                    wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
                }
                
            }

        }

    }

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

