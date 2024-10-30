<?php
/**
 * Plugin Name: LH Sortable Tables
 * Plugin URI: https://lhero.org/portfolio/lh-sortable-tables/
 * Description: Make tables sortable the LocalHero way
 * Author: Peter Shaw
 * Author URI: https://shawfactor.com
 * Version: 1.01
 * Requires PHP: 5.6
 * Text Domain: lh_sortable_tables
 * Domain Path: /languages
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* LH Sortable tables plugin class
*/

if (!class_exists('LH_Sortable_tables_plugin')) {

class LH_Sortable_tables_plugin {
    
private static $instance;


static function return_plugin_namespace(){
    
    return 'lh_sortable_tables';
    
}


public function register_core_scripts(){
    
    
 if (!class_exists('LH_Register_file_class')) {
     
    include_once('includes/lh-register-file-class.php');
    
}

$add_array = array('defer="defer"');
$add_array[] = 'id="'.self::return_plugin_namespace().'-script"';

$lh_sortable_tables_script = new LH_Register_file_class( self::return_plugin_namespace().'-script', plugin_dir_path( __FILE__ ).'scripts/sortable.mega-advanced.js', plugins_url( '/scripts/sortable.mega-advanced.js', __FILE__ ), true, array(), true, $add_array);

unset($add_array);


$lh_sortable_tables_style = new LH_Register_file_class( self::return_plugin_namespace().'-style', plugin_dir_path( __FILE__ ).'styles/sortable.css', plugins_url( '/styles/sortable.css', __FILE__ ), false, array(), false, array(), 'screen');

unset($add_array);



}


public function maybe_filter_the_content($content){
    
    if (!empty($content)){
    
    libxml_use_internal_errors(true); 

	// Create new dom object
	$dom = new DOMDocument;

	// Load html into the object
	$dom->loadHTML( mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );


	// Loop through all content links
	foreach( $dom->getElementsByTagName( 'table' ) as $table ) {
	    
	    if ( !$table->getAttribute( 'class' ) ) { continue; }
	    
	    if (preg_match("/^sortable$/", $table->getAttribute('class'))) {
	        
	        $style_handle = apply_filters( self::return_plugin_namespace().'_style_handle_filter', self::return_plugin_namespace().'-style');
	        $script_handle = apply_filters( self::return_plugin_namespace().'_script_handle_filter', self::return_plugin_namespace().'-script');
	        
	        if (!empty($style_handle)){
	        
	        wp_enqueue_style($style_handle);
	        
	        }
	        
	        
	        if (!empty($script_handle)){
	        
	        wp_enqueue_script($script_handle);
	        
	        }
	        
	        }
	    
	    
	    
	}
libxml_clear_errors();

}
    
    
    
return $content;
    
}


public function add_wp_body_open_hooks(){
    
add_filter('the_content', array($this,'maybe_filter_the_content'), PHP_INT_MAX, 1);

}


public function plugins_init(){
    
        //register the core scripts and styles
        add_action( 'wp_loaded', array($this, 'register_core_scripts'), 10 ); 
        
        
        //add some other hooks on body open so that it only runs when needed
        add_action('wp_body_open', array($this,'add_wp_body_open_hooks'));
    
    
}

  /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }
    
    
    

    
    public function __construct() {
        
        //run hooks on plugins loaded
        add_action( 'plugins_loaded', array($this,'plugins_init'));
        
        

}    
    
}

$lh_sortable_tables_instance = LH_Sortable_tables_plugin::get_instance();


}

?>