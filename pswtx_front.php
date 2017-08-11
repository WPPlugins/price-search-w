<?php
function pswtx_rearrangement(){
  $pswtx_add_arrangement = get_option('pswtx_add_page_update');
    $pswtx_cat_slug = get_category_by_slug('item');
      $pswtx_cat_id = get_query_var('cat');
        $pswtx_cat_children = get_term_children($pswtx_cat_slug->term_id, 'category');
           $pswtx_query_string1 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form1']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form2'])),get_category_link($pswtx_cat_id));
             $pswtx_query_string2 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form3']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form4'])),get_category_link($pswtx_cat_id));
               $pswtx_query_string3 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form5']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form6'])),get_category_link($pswtx_cat_id));
                 $pswtx_query_string4 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form7']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form8'])),get_category_link($pswtx_cat_id));
                   $pswtx_query_string5 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form9']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form10'])),get_category_link($pswtx_cat_id));
                     $pswtx_query_string6 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form11']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form12'])),get_category_link($pswtx_cat_id));
                       $pswtx_query_string7 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form13']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form14'])),get_category_link($pswtx_cat_id));
                         $pswtx_query_string8 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form15']).'-'.esc_attr($pswtx_add_arrangement['pswtx_form16'])),get_category_link($pswtx_cat_id));
                           $pswtx_query_string9 = add_query_arg(array('price_search' => esc_attr($pswtx_add_arrangement['pswtx_form17'])),get_category_link($pswtx_cat_id));

           if(is_category($pswtx_cat_slug->term_id) || is_category($pswtx_cat_children)){
             if(isset($_GET['s']) && ($_GET['s']) == true || isset($_GET['page']) && ($_GET['page'] == 'search_item')){
             }else{
               if($pswtx_add_arrangement['pswtx_form_title'] == true){
                 $pswtx_string_html = '<div id="pswtx-title"><h2><span>'.esc_attr($pswtx_add_arrangement['pswtx_form_title']).'</span></h2></div>';
               }
                 $pswtx_string_html .= '<div id="pswtx-wrap">';
                    if($pswtx_add_arrangement['pswtx_form1'] == true && $pswtx_add_arrangement['pswtx_form2'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string1.'">'.esc_attr($pswtx_add_arrangement['pswtx_form1']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form2']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form3'] == true && $pswtx_add_arrangement['pswtx_form4'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string2.'">'.esc_attr($pswtx_add_arrangement['pswtx_form3']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form4']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form5'] == true && $pswtx_add_arrangement['pswtx_form6'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string3.'">'.esc_attr($pswtx_add_arrangement['pswtx_form5']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form6']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form7'] == true && $pswtx_add_arrangement['pswtx_form8'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string4.'">'.esc_attr($pswtx_add_arrangement['pswtx_form7']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form8']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form9'] == true && $pswtx_add_arrangement['pswtx_form10'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string5.'">'.esc_attr($pswtx_add_arrangement['pswtx_form9']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form10']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form11'] == true && $pswtx_add_arrangement['pswtx_form12'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string6.'">'.esc_attr($pswtx_add_arrangement['pswtx_form11']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form12']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form13'] == true && $pswtx_add_arrangement['pswtx_form14'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string7.'">'.esc_attr($pswtx_add_arrangement['pswtx_form13']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form14']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form15'] == true && $pswtx_add_arrangement['pswtx_form16'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string8.'">'.esc_attr($pswtx_add_arrangement['pswtx_form15']).__('USD','pswtx').'-'.esc_attr($pswtx_add_arrangement['pswtx_form16']).__('USD','pswtx').'</a></p>';
                    }
                    if($pswtx_add_arrangement['pswtx_form17'] == true){
                      $pswtx_string_html .= '<p><a href="'.$pswtx_query_string9.'">'.esc_attr($pswtx_add_arrangement['pswtx_form17']).__('USD','pswtx').'</a>&nbsp;'.__('or more','pswtx').'</p>';
                    }
                 $pswtx_string_html .= '</div>';
                 $pswtx_string_html = apply_filters('pswtx_front_filter', $pswtx_string_html);
                   echo $pswtx_string_html;

               if($pswtx_add_arrangement['pswtx_form_any'] == true){
                 $pswtx_permalink = get_option('permalink_structure');
                   if(isset($_GET['price_form1'])){
                     $pswtx_price_any1 = esc_attr($_GET['price_form1']);
                   }else{
                     $pswtx_price_any1 = '';
                   }
                   if(isset($_GET['price_form2'])){
                     $pswtx_price_any2 = esc_attr($_GET['price_form2']);
                   }else{
                     $pswtx_price_any2 = '';
                   }

                     $pswtx_form_html = '<div id="pswtx-wrap-form">';
                     $pswtx_form_html .= __('Narrowing search','pswtx');
                     $pswtx_form_html .= '<form action="" method="get">';
                       if($pswtx_permalink == false){
                         $pswtx_form_html .= '<input type="hidden" name="cat" value="'.$pswtx_cat_id.'" />';
                       }
                         $pswtx_form_html .= '<div id="pswtx-price-input">';
                         $pswtx_form_html .= '<p><input type="text" class="price-input" name="price_form1" value="'.$pswtx_price_any1.'" /><span>&#045;</span>';
                         $pswtx_form_html .= '<input type="text" class="price-input" name="price_form2" value="'.$pswtx_price_any2.'" /></p>';
                         $pswtx_form_html .= '</div>';
                         $pswtx_form_html .= '<input type="submit" class="pswtx_any_submit" value="'.__('Narrow down','pswtx').'" />';
                         $pswtx_form_html .= '</form>';
                         $pswtx_form_html .= '</div>';
                         $pswtx_form_html = apply_filters('pswtx_front_form_filter', $pswtx_form_html);
                           echo $pswtx_form_html;
               }
             }
           }
}
?>