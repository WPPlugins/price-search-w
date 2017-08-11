<?php
function pswtx_forking_query_templx($wp_query) {
  $pswtx_add_arrangement = get_option('pswtx_add_page_update');
    $pswtx_submit1 = isset($_GET['price_form1']) && esc_attr($_GET['price_form1']);
      $pswtx_submit2 = isset($_GET['price_form2']) && esc_attr($_GET['price_form2']);
        $pswtx_cat_slug = get_category_by_slug('item');
          $pswtx_cat_children = get_term_children($pswtx_cat_slug->term_id, 'category');

            if(is_admin() || !$wp_query->is_main_query()){
              return;
            }

              if($wp_query->is_category($pswtx_cat_slug->term_id) || $wp_query->is_category($pswtx_cat_children)){
                $pswtx_template_data = wp_get_theme();
                  $pswtx_template_status = $pswtx_template_data->get('Status');
                    $pswtx_template_author = $pswtx_template_data->get('Author');
                      if($pswtx_template_status == 'templx-w' && $pswtx_template_author == 'TEMPLX'){
                        $pswtx_sorttx_price_up = isset($_GET['sort'])&&($_GET['sort'] == 'price_up');
                          $pswtx_sorttx_price_down = isset($_GET['sort'])&&($_GET['sort'] == 'price_down');
                            $pswtx_sorttx_stock_up = isset($_GET['sort'])&&($_GET['sort'] == 'stock_up');
                              $pswtx_sorttx_stock_down = isset($_GET['sort'])&&($_GET['sort'] == 'stock_down');
                                $pswtx_sorttx_new = isset($_GET['sort'])&&($_GET['sort'] == 'new');
                                  $pswtx_sorttx_title_up = isset($_GET['sort'])&&($_GET['sort'] == 'title_up');
                                    $wp_query->set('orderby', 'meta_value_num');
                                      if($pswtx_sorttx_price_up || $pswtx_sorttx_stock_up){
                                        $wp_query->set('order', 'DESC');
                                      }elseif($pswtx_sorttx_price_down || $pswtx_sorttx_stock_down){
                                        $wp_query->set('order', 'ASC');
                                      }elseif($pswtx_sorttx_new){
                                        $wp_query->set('orderby', 'ID');
                                          $wp_query->set('order', 'DESC');
                                      }elseif($pswtx_sorttx_title_up){
                                        $wp_query->set('orderby', 'meta_value');
                                          $wp_query->set('meta_key', '_itemName');
                                            $wp_query->set('order', 'ASC');
                                      }
                                        if($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form1'], $pswtx_add_arrangement['pswtx_form2']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form3'], $pswtx_add_arrangement['pswtx_form4']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form5'], $pswtx_add_arrangement['pswtx_form6']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form7'], $pswtx_add_arrangement['pswtx_form8']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form9'], $pswtx_add_arrangement['pswtx_form10']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form11'], $pswtx_add_arrangement['pswtx_form12']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17']) || $pswtx_sorttx_price_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=> $pswtx_add_arrangement['pswtx_form17'], 'compare'=>'>', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }elseif($pswtx_sorttx_price_up && $pswtx_submit1 && $pswtx_submit2 || $pswtx_sorttx_price_down && $pswtx_submit1 && $pswtx_submit2 ){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array(esc_attr($_GET['price_form1']), esc_attr($_GET['price_form2'])), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query );
                                        }
                                        elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form1'], $pswtx_add_arrangement['pswtx_form2']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form3'], $pswtx_add_arrangement['pswtx_form4']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form5'], $pswtx_add_arrangement['pswtx_form6']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form7'], $pswtx_add_arrangement['pswtx_form8']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form9'], $pswtx_add_arrangement['pswtx_form10']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form11'], $pswtx_add_arrangement['pswtx_form12']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17']) || $pswtx_sorttx_stock_down && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=> $pswtx_add_arrangement['pswtx_form17'], 'compare'=>'>', 'type'=>'NUMERIC'),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_stock_up && $pswtx_submit1 && $pswtx_submit2 || $pswtx_sorttx_stock_down && $pswtx_submit1 && $pswtx_submit2){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array(esc_attr($_GET['price_form1']), esc_attr($_GET['price_form2'])), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'),'key'=>'tx_sort_db_stocks','type'=>'NUMERIC',);
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }
                                        elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form1'], $pswtx_add_arrangement['pswtx_form2']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form3'], $pswtx_add_arrangement['pswtx_form4']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form5'], $pswtx_add_arrangement['pswtx_form6']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form7'], $pswtx_add_arrangement['pswtx_form8']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form9'], $pswtx_add_arrangement['pswtx_form10']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form11'], $pswtx_add_arrangement['pswtx_form12']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array($pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=> $pswtx_add_arrangement['pswtx_form17'], 'compare'=>'>', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_new && $pswtx_submit1 && $pswtx_submit2){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array(esc_attr($_GET['price_form1']), esc_attr($_GET['price_form2'])), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }
                                        elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form1'], $pswtx_add_arrangement['pswtx_form2']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form3'], $pswtx_add_arrangement['pswtx_form4']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form5'], $pswtx_add_arrangement['pswtx_form6']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form7'], $pswtx_add_arrangement['pswtx_form8']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form9'], $pswtx_add_arrangement['pswtx_form10']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form11'], $pswtx_add_arrangement['pswtx_form12']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices','value'=>array( $pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']),'compare'=>'BETWEEN','type'=>'NUMERIC',));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17'])){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=> $pswtx_add_arrangement['pswtx_form17'], 'compare'=>'>', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }elseif($pswtx_sorttx_title_up && $pswtx_submit1 && $pswtx_submit2){
                                          $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array(esc_attr($_GET['price_form1']), esc_attr($_GET['price_form2'])), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                            $wp_query->set('meta_query', $pswtx_query);
                                        }

                                    $wp_query->set('orderby', 'ID');
                                      $wp_query->set('meta_key', 'tx_sort_db_prices');
                                        $wp_query->set('order', 'DESC');

                                          if($pswtx_sorttx_price_up){
                                            $wp_query->set('orderby', 'meta_value_num');
                                              $wp_query->set('order', 'DESC');
                                          }elseif($pswtx_sorttx_price_down){
                                            $wp_query->set('orderby', 'meta_value_num');
                                              $wp_query->set('order', 'ASC');
                                          }elseif($pswtx_sorttx_stock_up){
                                            $wp_query->set('orderby', 'meta_value_num');
                                              $wp_query->set('meta_key', 'tx_sort_db_stocks');
                                                $wp_query->set('order', 'DESC');
                                          }elseif($pswtx_sorttx_stock_down){
                                            $wp_query->set('orderby', 'meta_value_num');
                                              $wp_query->set('meta_key', 'tx_sort_db_stocks');
                                                $wp_query->set('order', 'ASC');
                                          }elseif($pswtx_sorttx_title_up){
                                            $wp_query->set('orderby', 'meta_value');
                                              $wp_query->set('meta_key', '_itemName');
                                                $wp_query->set('order', 'ASC');
                                          }elseif($pswtx_sorttx_new){
                                            $wp_query->set('orderby', 'ID');
                                              $wp_query->set('order', 'DESC');
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form1'].'-'.$pswtx_add_arrangement['pswtx_form2'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form1'], $pswtx_add_arrangement['pswtx_form2']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form3'].'-'.$pswtx_add_arrangement['pswtx_form4'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form3'], $pswtx_add_arrangement['pswtx_form4']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form5'].'-'.$pswtx_add_arrangement['pswtx_form6'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form5'], $pswtx_add_arrangement['pswtx_form6']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form7'].'-'.$pswtx_add_arrangement['pswtx_form8'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form7'], $pswtx_add_arrangement['pswtx_form8']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form9'].'-'.$pswtx_add_arrangement['pswtx_form10'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form9'], $pswtx_add_arrangement['pswtx_form10']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form11'].'-'.$pswtx_add_arrangement['pswtx_form12'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form11'], $pswtx_add_arrangement['pswtx_form12']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form13'].'-'.$pswtx_add_arrangement['pswtx_form14'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form13'], $pswtx_add_arrangement['pswtx_form14']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form15'].'-'.$pswtx_add_arrangement['pswtx_form16'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array( $pswtx_add_arrangement['pswtx_form15'], $pswtx_add_arrangement['pswtx_form16']), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query );
                                          }elseif(isset($_GET['price_search'])&&($_GET['price_search'] == $pswtx_add_arrangement['pswtx_form17'])){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=> $pswtx_add_arrangement['pswtx_form17'], 'compare'=>'>', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query);
                                          }elseif($pswtx_submit1 && $pswtx_submit2){
                                            $pswtx_query = array(array('key'=>'tx_sort_db_prices', 'value'=>array(esc_attr($_GET['price_form1']), esc_attr($_GET['price_form2'])), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'));
                                              $wp_query->set('meta_query', $pswtx_query);
                                          }else{
                                            $wp_query->set('orderby', 'ID');
                                              $wp_query->set('order', 'DESC');
                                          }return;
                      }
              }

              if($wp_query->is_archive()){
                $wp_query->set('orderby', 'ID');
                  $wp_query->set('order', 'DESC');
                    return;
              }
}

   $pswtx_template_data = wp_get_theme();
     $pswtx_template_status = $pswtx_template_data->get('Status');
       $pswtx_template_author = $pswtx_template_data->get('Author');
         if($pswtx_template_status == 'templx-w' && $pswtx_template_author == 'TEMPLX'){
           add_action('pre_get_posts', 'pswtx_forking_query_templx');
         }
?>