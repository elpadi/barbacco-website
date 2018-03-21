<?php
/***************************************************************************************************************************
**********	CUSTOM POST TYPE - META BOXES 
****************************************************************************************************************************/

	/**************** PRESS META BOX - BEGIN ****************/
		function custom_add_press_box() {
			add_meta_box(
				'press_detail',				// ID
				'Press details',			// Title
				'custom_press_meta_box',	// Callback
				'barbacco_press',			// Targeted Post Type
				'normal'					// Position
			);
		}
		add_action('add_meta_boxes', 'custom_add_press_box');
		
		function custom_press_meta_box($post) {
			$press_link = get_post_meta($post->ID, 'press_link', true);
			$press_quote = get_post_meta($post->ID, 'press_quote', true);
			$press_date = get_post_meta($post->ID, 'press_date', true);
		
			// Security Check
			wp_nonce_field('press_meta_nonce', 'press_nonce');
			?>
			
				<p>
					<label for="press_link">Link for "Press" post:</label>
					<input type="text" class="widefat" name="press_link" id="press_link" value="<?php echo $press_link; ?>" />
				</p>
				<p>
					<label for="press_quote">Quote for "Press" post:</label>
					<input type="text" class="widefat" name="press_quote" id="press_quote" value="<?php echo $press_quote; ?>" />
				</p>
				<p>
					<label for="press_date">Additional data for "Press" post:</label>
					<input type="text" class="widefat" name="press_date" id="press_date" value="<?php echo $press_date; ?>" />
				</p>
			
			<?php
		}
		
		function custom_save_press_detail($post_id) {
			// If we're doing autosave, return
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
			
			// If nonce is not present or invalid, return
			if (!isset($_POST['press_nonce']) || !wp_verify_nonce($_POST['press_nonce'], 'press_meta_nonce')) return;
			
			// Save/Update
			if (isset($_POST['press_link']) && $_POST['press_link'] != '') {
				update_post_meta($post_id, 'press_link', esc_html($_POST['press_link']));
			}
			if (isset($_POST['press_quote']) && $_POST['press_quote'] != '') {
				update_post_meta($post_id, 'press_quote', esc_html($_POST['press_quote']));
			}
			if (isset($_POST['press_date']) && $_POST['press_date'] != '') {
				update_post_meta($post_id, 'press_date', esc_html($_POST['press_date']));
			}
		}
		add_action('save_post', 'custom_save_press_detail');
	/**************** PRESS META BOX - BEGIN ****************/
	
?>