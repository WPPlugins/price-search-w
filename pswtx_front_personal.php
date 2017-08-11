<?php
function pswtx_rearrangement_buttom(){
  $pswtx_add_arrangement = get_option('pswtx_add_page_update');
    $pswtx_cat_slug = get_category_by_slug('item');
      $pswtx_cat_children = get_term_children($pswtx_cat_slug->term_id, 'category');

        if(is_category($pswtx_cat_slug->term_id) || is_category($pswtx_cat_children)){
          $pswtx_query_string_price_up = add_query_arg(array('sort' => 'price_up'),esc_attr($_SERVER['REQUEST_URI']));
            $pswtx_query_string_price_up = str_replace('&amp;sort=price_down', '', $pswtx_query_string_price_up);
              $pswtx_query_string_price_up = str_replace('&amp;sort=stock_up', '', $pswtx_query_string_price_up);
                $pswtx_query_string_price_up = str_replace('&amp;sort=stock_down', '', $pswtx_query_string_price_up);
                  $pswtx_query_string_price_up = str_replace('&amp;sort=new', '', $pswtx_query_string_price_up);
                    $pswtx_query_string_price_up = str_replace('&amp;sort=title_up', '', $pswtx_query_string_price_up);
                      $pswtx_query_string_price_down = add_query_arg(array('sort' => 'price_down'),esc_attr($_SERVER['REQUEST_URI']));
                        $pswtx_query_string_price_down = str_replace('&amp;sort=price_up', '', $pswtx_query_string_price_down);
                          $pswtx_query_string_price_down = str_replace('&amp;sort=stock_up', '', $pswtx_query_string_price_down);
                            $pswtx_query_string_price_down = str_replace('&amp;sort=stock_down', '', $pswtx_query_string_price_down);
                              $pswtx_query_string_price_down = str_replace('&amp;sort=new', '', $pswtx_query_string_price_down);
                                $pswtx_query_string_price_down = str_replace('&amp;sort=title_up', '', $pswtx_query_string_price_down);
                                  $pswtx_query_string_stock_up = add_query_arg(array('sort' => 'stock_up'),esc_attr($_SERVER['REQUEST_URI']));
                                    $pswtx_query_string_stock_up = str_replace('&amp;sort=price_up', '', $pswtx_query_string_stock_up);
                                      $pswtx_query_string_stock_up = str_replace('&amp;sort=price_down', '', $pswtx_query_string_stock_up);
                                        $pswtx_query_string_stock_up = str_replace('&amp;sort=stock_down', '', $pswtx_query_string_stock_up);
                                          $pswtx_query_string_stock_up = str_replace('&amp;sort=new', '', $pswtx_query_string_stock_up);
                                            $pswtx_query_string_stock_up = str_replace('&amp;sort=title_up', '', $pswtx_query_string_stock_up);
                                              $pswtx_query_string_stock_down = add_query_arg(array('sort' => 'stock_down'),esc_attr($_SERVER['REQUEST_URI']));
                                                $pswtx_query_string_stock_down = str_replace('&amp;sort=price_up', '', $pswtx_query_string_stock_down);
                                                  $pswtx_query_string_stock_down = str_replace('&amp;sort=price_down', '', $pswtx_query_string_stock_down);
                                                    $pswtx_query_string_stock_down = str_replace('&amp;sort=stock_up', '', $pswtx_query_string_stock_down);
                                                      $pswtx_query_string_stock_down = str_replace('&amp;sort=new', '', $pswtx_query_string_stock_down);
                                                        $pswtx_query_string_stock_down = str_replace('&amp;sort=title_up', '', $pswtx_query_string_stock_down);
                                                          $pswtx_query_string_new = add_query_arg(array('sort' => 'new'),esc_attr($_SERVER['REQUEST_URI']));
                                                            $pswtx_query_string_new = str_replace('&amp;sort=price_up', '', $pswtx_query_string_new);
                                                              $pswtx_query_string_new = str_replace('&amp;sort=price_down', '', $pswtx_query_string_new);
                                                                $pswtx_query_string_new = str_replace('&amp;sort=stock_up', '', $pswtx_query_string_new);
                                                                  $pswtx_query_string_new = str_replace('&amp;sort=stock_down', '', $pswtx_query_string_new);
                                                                    $pswtx_query_string_new = str_replace('&amp;sort=title_up', '', $pswtx_query_string_new);
                                                                      $pswtx_query_string_title = add_query_arg(array('sort' => 'title_up'),esc_attr($_SERVER['REQUEST_URI']));
                                                                        $pswtx_query_string_title = str_replace('&amp;sort=price_up', '', $pswtx_query_string_title);
                                                                          $pswtx_query_string_title = str_replace('&amp;sort=price_down', '', $pswtx_query_string_title);
                                                                            $pswtx_query_string_title = str_replace('&amp;sort=stock_up', '', $pswtx_query_string_title);
                                                                              $pswtx_query_string_title = str_replace('&amp;sort=stock_down', '', $pswtx_query_string_title);
                                                                                $pswtx_query_string_title = str_replace('&amp;sort=new', '', $pswtx_query_string_title);

          $pswtx_form_tx_html = '<div id="pswtx-personal">';
            if(strpos($_SERVER['REQUEST_URI'],'new')){
              $pswtx_form_tx_html .= '<p>'.__('New','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_new.'">'.__('New','pswtx').'</a></p>';
            }
            if(strpos($_SERVER['REQUEST_URI'],'price_up')){
              $pswtx_form_tx_html .= '<p>'.__('Price High','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_price_up.'">'.__('Price High','pswtx').'</a></p>';
            }
            if(strpos($_SERVER['REQUEST_URI'],'price_down')){
              $pswtx_form_tx_html .= '<p>'.__('Price Low','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_price_down.'">'.__('Price Low','pswtx').'</a></p>';
            }
            if(strpos($_SERVER['REQUEST_URI'],'stock_up')){
              $pswtx_form_tx_html .= '<p>'.__('Stock High','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_stock_up.'">'.__('Stock High','pswtx').'</a></p>';
            }
            if(strpos($_SERVER['REQUEST_URI'],'stock_down')){
              $pswtx_form_tx_html .= '<p>'.__('Stock Low','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_stock_down.'">'.__('Stock Low','pswtx').'</a></p>';
            }
            if(strpos($_SERVER['REQUEST_URI'],'title_up')){
              $pswtx_form_tx_html .= '<p>'.__('Title','pswtx').'</p>';
            }else{
              $pswtx_form_tx_html .= '<p><a href="'.$pswtx_query_string_title.'">'.__('Title','pswtx').'</a></p>';
            }
          $pswtx_form_tx_html .= '</div>';
          $pswtx_form_tx_html = apply_filters('pswtx_front_tx_filter', $pswtx_form_tx_html);
            echo $pswtx_form_tx_html;
        }
}
?>