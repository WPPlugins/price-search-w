<?php
/*
Plugin Name: Price Search for Welcart
Plugin URI: http://templx.com/
Description: This plugin am dedicated to Welcart-Commerce. Welcarte-Commerce Valid only when Available.
Author: TEMPLX
Version: 1.1
Text Domain: TEMPLX
Author URI: http://templx.com/
*/

 define('PSWTX_VERSION', '1.1');
 define('PSWTX_PLUGIN_DIR', plugin_dir_path(__FILE__));
 define('PSWTX_PLUGIN_URL', plugin_dir_url(__FILE__));

  function pswtx_update_setting(){
    update_option('PSWTX_VERSION', '1.1');
    $pswtx_add_arrangement = get_option('pswtx_add_page_update');
        $pswtx_add_array = array(
           'pswtx_form_any'=>'','pswtx_form_title'=>'',
           'pswtx_form1'=>'','pswtx_form2'=>'','pswtx_form3'=>'','pswtx_form4'=>'','pswtx_form5'=>'','pswtx_form6'=>'',
           'pswtx_form7'=>'','pswtx_form8'=>'','pswtx_form9'=>'','pswtx_form10'=>'','pswtx_form11'=>'','pswtx_form12'=>'',
           'pswtx_form13'=>'','pswtx_form14'=>'','pswtx_form15'=>'','pswtx_form16'=>'','pswtx_form17'=>''
          );

           if(!$pswtx_add_arrangement){
             update_option( 'pswtx_add_page_update', $pswtx_add_array);
           }
  }
  register_activation_hook(__FILE__, 'pswtx_update_setting');

    $pswtx_languages = basename(dirname(__FILE__));
    load_plugin_textdomain('pswtx', false, $pswtx_languages. '/languages');
    require_once(PSWTX_PLUGIN_DIR.'functions/pswtx_function.php');
    require_once(PSWTX_PLUGIN_DIR.'functions/pswtx_function_personal.php');
    require_once(PSWTX_PLUGIN_DIR.'pswtx_front.php');
    require_once(PSWTX_PLUGIN_DIR.'pswtx_front_personal.php');

      add_action('usces_action_shop_admin_menue', 'price_search_add');
        function price_search_add(){
          add_submenu_page(USCES_PLUGIN_BASENAME, __('Price Search','pswtx'), __('Price Search','pswtx'), 'level_6', 'pswtx_add', 'price_search_admin_pages');
        }

  function pswtx_add_remove_check($pswtx_add_check) {
    $pswtx_add_check = preg_replace('/<(\?+)php(.*?)(\?+)>/i', '', $pswtx_add_check);
    $pswtx_add_check = preg_replace('/<style\b[^>]*>(.*?)<\/style>/i', '', $pswtx_add_check);
    $pswtx_add_check = preg_replace('/<script\b[^>]*>(.*?)<\/script>/i', '', $pswtx_add_check);
    $pswtx_add_check = preg_replace('/on[a-zA-Z]+=.*\"/is', '', $pswtx_add_check);
    return $pswtx_add_check;
  }

  function price_search_admin_pages(){
    $_POST = pswtx_add_remove_check($_POST);
    $pswtx_add_arrangement = get_option('pswtx_add_page_update');

       if(isset($_POST['pswtx_submit']) && $_POST['pswtx_submit'] == 'pswtx_add_page'){
        $pswtx_add_array = array(
           'pswtx_form_any','pswtx_form_title',
           'pswtx_form1','pswtx_form2','pswtx_form3','pswtx_form4','pswtx_form5','pswtx_form6',
           'pswtx_form7','pswtx_form8','pswtx_form9','pswtx_form10','pswtx_form11','pswtx_form12',
           'pswtx_form13','pswtx_form14','pswtx_form15','pswtx_form16','pswtx_form17'
          );

           foreach($pswtx_add_array as $pswtx_add_array_inside){
             $pswtx_add_arrangement[$pswtx_add_array_inside] = isset($_POST[$pswtx_add_array_inside]) ? esc_attr($_POST[$pswtx_add_array_inside]) : ''; 
           }
              check_admin_referer('pswtx_add_field');
              update_option('pswtx_add_page_update', $pswtx_add_arrangement);
       }
                $pswtx_template_data = wp_get_theme();
                $pswtx_template_status = $pswtx_template_data->get('Status');
                   if($pswtx_template_status != 'templx-w'){
                     if(isset($_POST['pswtx_prices_update']) && $_POST['pswtx_prices_update'] == 'pswtx_add_prices_update'){
                       $pswtx_conversion_update = pswtx_conversion_price();
                     }
                     if(isset($pswtx_conversion_update) && $pswtx_conversion_update === true){
                       $pswtx_update_propriety = 'completion';
                     }elseif(isset($pswtx_conversion_update) && $pswtx_conversion_update === false){
                       $pswtx_update_propriety = 'error';
                     }else{
                       $pswtx_update_propriety = '';
                     }
                   }
       require_once(PSWTX_PLUGIN_DIR.'pswtx_admin.php');
  }

       function pswtx_css_style(){
          wp_enqueue_style('pswtx', PSWTX_PLUGIN_URL.'css/pswtx.css', array(), NULL, 'all');
       }
       add_action('wp_enqueue_scripts', 'pswtx_css_style');

       function pswtx_admin_css_style(){
          wp_enqueue_style('pswtx-admin', PSWTX_PLUGIN_URL.'css/pswtx-admin.css', array(), NULL, 'all');
       }
       add_action('admin_enqueue_scripts', 'pswtx_admin_css_style');
?>