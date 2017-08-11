<div class="wrap">
<div id="icon-options-general" class="icon32"><br /></div>
<h2><?php _e('Price Search','pswtx'); ?></h2>
<div id="pswtx-admin">
<?php
   $pswtx_template_data = wp_get_theme();
   $pswtx_template_status = $pswtx_template_data->get('Status');
   $pswtx_template_author = $pswtx_template_data->get('Author');
     if($pswtx_template_status != 'templx-w' && $pswtx_template_author != 'TEMPLX'){
?>

 <script>
   jQuery(function($){
    var pswtx_ok = 'OK';
    var pswtx_ng = 'ERROR';
   <?php if($pswtx_update_propriety == 'completion'){ ?>
     $('#pswtx-update-in').text(pswtx_ok);
   <?php }elseif($pswtx_update_propriety == 'error'){ ?>
     $('#pswtx-update-in').text(pswtx_ng);
   <?php } ?>
   });
 </script>

  <div id="pswtx-update">
  <div id="pswtx-update-in">&nbsp;</div>
    <form action="" method="post">
    <input type="hidden" name="pswtx_prices_update" value="pswtx_add_prices_update" />
    <input type="submit" class="pswtx_prices_submit" value="UPDATE" />
    </form>
  <div class="pswtx-update-text"><?php _e('When you validated plug in, please carry out UPDATE when the registration / changes of the product price reach.','pswtx'); ?></div>
  <div class="pswtx-update-text"><?php _e('It may take time to update.','pswtx'); ?></div>
  </div>
<?php
    }
?>
  <div class="clear"></div>
  <form method="post" action="">
  <div id="pswtx-admin-title">
  <p><?php _e('Please input a title.','pswtx'); ?></p>
    <input type="text" name="pswtx_form_title" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form_title']); ?>" />
  <p class="note"><?php _e('*When they are unnecessary, the blanks, please.','pswtx'); ?></p>
  </div>

  <div id="pswtx-admin-input-text">
  <p><?php _e('Please input a price to narrow it down.','pswtx'); ?></p>
     <p>[1]
      <input type="text" name="pswtx_form1" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form1']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form2" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form2']); ?>" />
     </p>
     <p>[2]
      <input type="text" name="pswtx_form3" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form3']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form4" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form4']); ?>" />
     </p>
     <p>[3]
      <input type="text" name="pswtx_form5" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form5']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form6" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form6']); ?>" />
     </p>
     <p>[4]
      <input type="text" name="pswtx_form7" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form7']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form8" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form8']); ?>" />
     </p>
     <p>[5]
      <input type="text" name="pswtx_form9" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form9']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form10" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form10']); ?>" />
     </p>
     <p>[6]
      <input type="text" name="pswtx_form11" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form11']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form12" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form12']); ?>" />
     </p>
     <p>[7]
      <input type="text" name="pswtx_form13" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form13']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form14" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form14']); ?>" />
     </p>
     <p>[8]
      <input type="text" name="pswtx_form15" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form15']); ?>" /><span>&#045;</span>
      <input type="text" name="pswtx_form16" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form16']); ?>" />
     </p>
     <p>[9]
      <input type="text" name="pswtx_form17" value="<?php echo esc_attr($pswtx_add_arrangement['pswtx_form17']); ?>" /><?php _e('or more','pswtx'); ?>
      </p>
  <p class="note"><?php _e('*When they are unnecessary, the blanks, please.','pswtx'); ?></p>
  </div>

  <div id="pswtx-admin-input-check">
<?php 
  $pswtx_page_form_any = apply_filters( 'pswtx_form_any', array( 'pswtx_check',));
     foreach ( $pswtx_page_form_any as $pswtx_page_form_any_get ) {
?>
     <p>
      <input name="pswtx_form_any" type="checkbox" value="<?php echo esc_attr($pswtx_page_form_any_get); ?>" <?php if ( $pswtx_add_arrangement['pswtx_form_any'] === $pswtx_page_form_any_get ) {echo 'checked="checked"';} ?> />
      &lt;&#061; <?php _e('When I use a narrowing form.','pswtx'); ?>
     </p>
<?php
     }
?>
  </div>
<div id="pswtx-admin-description">
<p><?php _e('When I describe','pswtx'); ?>&nbsp;&lt;&#063;php&nbsp;pswtx_rearrangement&#040;&#041;&#059;&nbsp;&#063;&gt;&nbsp;<?php _e('in the point that I want to display','pswtx'); ?></p>
<p><?php _e('a narrowing price and any form that I set by the above are displayed.','pswtx'); ?></p>
  <p class="note"><?php _e('*When you set a number base and custom structure by permanent link setting, please touch /( slash) at the end by all means.','pswtx'); ?></p>
</div>
  <div class="clear"></div>
  <?php wp_nonce_field('pswtx_add_field'); ?>
    <p class="submit">
     <input type="hidden" name="pswtx_submit" value="pswtx_add_page" />
     <input type="submit" class="button-submit" value="<?php _e('Save Changes') ?>" />
    </p>
 </form>
</div>
</div>