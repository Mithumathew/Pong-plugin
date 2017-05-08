<?php
/*
Plugin Name: Pong Plugin
*/

function pong_shortcodes_init()
{
    function pong_shortcode($atts = [], $content = null)
    {
        $content .= <<<EOT
        <div class="row"><div class="col-md-4"><h1></h1></div>
	<div class="col-md-4">Your score: <span id="playerScore">0</span></div>
	<div class="col-md-4">Computer score: <span id="computerScore">0</span></div></div>
	<canvas id="stage" width=600 height=450 style="background-color: black;"></canvas>
       
EOT;
        return $content;
    }
    add_shortcode('pong-plugin', 'pong_shortcode');
}
add_action('init', 'pong_shortcodes_init');
/*bring in external css resources*/
wp_register_style('your_css_and_js', plugins_url('styles/bootstrap.min.css',__FILE__ ));
wp_enqueue_style('your_css_and_js');

/*bring in external javascript resources*/
wp_register_script( 'your_css_and_js1', plugins_url('js/main.js',__FILE__ ));
wp_enqueue_script('your_css_and_js1');
wp_register_script( 'your_css_and_js2', plugins_url('js/easeljs.min.js',__FILE__ ));
wp_enqueue_script('your_css_and_js2');
wp_register_script( 'your_css_and_js3', plugins_url('js/jquery-1.11.0.min.js',__FILE__ ));
wp_enqueue_script('your_css_and_js3');
wp_register_script( 'your_css_and_js4', plugins_url('js/js-toolbox.js',__FILE__ ));
wp_enqueue_script('your_css_and_js4');

