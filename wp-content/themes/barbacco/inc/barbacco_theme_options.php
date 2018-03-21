<?php

/***************************************************************************************************************************
**********	MENUS 
****************************************************************************************************************************/
	
// Hog&Rocks Theme Options
function barbacco_add_options_page() {
	add_options_page(
		'Barbacco Options',					// the browser title
		'Barbacco Options',					// the menu name
		'manage_options',					// the user capability to access options
		'barbacco_theme_options',			// the slug by which is this accessible
		'barbacco_theme_options_display'	// the callback function to display the content
	);
}
add_action( 'admin_menu', 'barbacco_add_options_page' );


/***************************************************************************************************************************
**********	SECTIONS, SETTINGS, FIELDS
****************************************************************************************************************************/

// Function to register the settings
function barbacco_initialize_theme_options() {
	// Add settings section - Address Fields
	add_settings_section(
		'address_section',							// the ID of this section
		'Address Fields',							// the title of this section
		'barbacco_footer_address_fields_display',	// the callback function for this section
		'barbacco_theme_options'					// the ID of the page where this is rendered
	);
	// Add settings section - Hours Fields
	add_settings_section(
		'hours_section',					// the ID of this section
		'Hours Fields',						// the title of this section
		'barbacco_footer_hours_display',	// the callback function for this section
		'barbacco_theme_options'			// the ID of the page where this is rendered
	);
	// Add settings section - Social Icons
	add_settings_section(
		'social_section',					// the ID of this section
		'Social Icons',						// the title of this section
		'barbacco_social_icons_display',	// the callback function for this section
		'barbacco_theme_options'			// the ID of the page where this is rendered
	);
	// Add settings section - Social Icons
	add_settings_section(
		'logos_section',					// the ID of this section
		'Logos',							// the title of this section
		'barbacco_logos_display',			// the callback function for this section
		'barbacco_theme_options'			// the ID of the page where this is rendered
	);
	
/* ***** ADDRESS FIELDS ***** */
	// Create address for Address Fields
	add_settings_field(
		'barbacco_footer_address_text',		// the ID of the field ( this one )
		'The Address',						// the label of this field
		'barbacco_footer_address_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'address_section'					// the name of the section this field belongs to ( in this case the above one )
	);
	// Create address for Address Fields
	add_settings_field(
		'barbacco_footer_address_link',			// the ID of the field ( this one )
		'The Map URL',							// the label of this field
		'barbacco_footer_address_link_display',	// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'address_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	// Create link for Address Fields
	add_settings_field(
		'barbacco_footer_page_link',			// the ID of the field ( this one )
		'Maps, Directions - Page URL',			// the label of this field
		'barbacco_footer_page_link_display',	// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'address_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	// Create phone number for Address Fields
	add_settings_field(
		'barbacco_footer_phone_number',		// the ID of the field ( this one )
		'Phone Number',						// the label of this field
		'barbacco_footer_number_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'address_section'					// the name of the section this field belongs to ( in this case the above one )
	);
	// Create phone number for Address Fields
	add_settings_field(
		'barbacco_footer_takeout_number',			// the ID of the field ( this one )
		'Take Out Number',							// the label of this field
		'barbacco_footer_takeout_number_display',	// the callback function of this field
		'barbacco_theme_options',					// the page where will be this field
		'address_section'							// the name of the section this field belongs to ( in this case the above one )
	);
/* ***** HOURS FIELDS ***** */
	// Create first row for Hours Fields
	add_settings_field(
		'hours_first_row_days',					// the ID of the field ( this one )
		'1st Row (Days & Hours)',				// the label of this field
		'barbacco_days_first_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create first row for Hours Fields
	add_settings_field(
		'hours_first_row_hours',				// the ID of the field ( this one )
		'',										// the label of this field
		'barbacco_hours_first_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create second row for Hours Fields
	add_settings_field(
		'hours_second_row_days',				// the ID of the field ( this one )
		'2nd Row (Days & Hours)',				// the label of this field
		'barbacco_days_second_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create second row for Hours Fields
	add_settings_field(
		'hours_second_row_hours',				// the ID of the field ( this one )
		'',										// the label of this field
		'barbacco_hours_second_row_display',	// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create third row for Hours Fields
	add_settings_field(
		'hours_third_row_days',					// the ID of the field ( this one )
		'3rd Row (Days & Hours)',				// the label of this field
		'barbacco_days_third_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create third row for Hours Fields
	add_settings_field(
		'hours_third_row_hours',				// the ID of the field ( this one )
		'',										// the label of this field
		'barbacco_hours_third_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create fourth row for Hours Fields
	add_settings_field(
		'hours_fourth_row_days',				// the ID of the field ( this one )
		'4th Row (Days & Hours)',				// the label of this field
		'barbacco_days_fourth_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create fourth row for Hours Fields
	add_settings_field(
		'hours_fourth_row_hours',				// the ID of the field ( this one )
		'',										// the label of this field
		'barbacco_hours_fourth_row_display',	// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create fourth row for Hours Fields
	add_settings_field(
		'hours_fifth_row_days',					// the ID of the field ( this one )
		'5th Row (Days & Hours)',				// the label of this field
		'barbacco_days_fifth_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
	// Create fourth row for Hours Fields
	add_settings_field(
		'hours_fifth_row_hours',				// the ID of the field ( this one )
		'',										// the label of this field
		'barbacco_hours_fifth_row_display',		// the callback function of this field
		'barbacco_theme_options',				// the page where will be this field
		'hours_section'							// the name of the section this field belongs to ( in this case the above one )
	);
/* ***** SOCIAL ICONS ***** */
	// Create address for Social Icons
	add_settings_field(
		'twitter_icon_url',					// the ID of the field ( this one )
		'Twitter URL',						// the label of this field
		'barbacco_twitter_icon_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'social_section'					// the name of the section this field belongs to ( in this case the above one )
	);
	// Create link for Social Icons
	add_settings_field(
		'facebook_icon_url',				// the ID of the field ( this one )
		'Facebook URL',						// the label of this field
		'barbacco_facebook_icon_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'social_section'					// the name of the section this field belongs to ( in this case the above one )
	);
	// Create phone number for Social Icons
	add_settings_field(
		'instagram_icon_url',				// the ID of the field ( this one )
		'Instagram URL',					// the label of this field
		'barbacco_instagram_icon_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'social_section'					// the name of the section this field belongs to ( in this case the above one )
	);
/* ***** LOGOS SECTION ***** */
	// Create address for Social Icons
	add_settings_field(
		'logo_volta_url',					// the ID of the field ( this one )
		'Volta Link',						// the label of this field
		'barbacco_volta_logo_display',		// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'logos_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	// Create link for Social Icons
	add_settings_field(
		'logo_perbacco_url',				// the ID of the field ( this one )
		'Perbacco Link',					// the label of this field
		'barbacco_perbacco_logo_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'logos_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	// Create phone number for Social Icons
	add_settings_field(
		'logo_chronicles_url',				// the ID of the field ( this one )
		'Logo - Chronicles',				// the label of this field
		'barbacco_chronicles_logo_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'logos_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	// Create phone number for Social Icons
	add_settings_field(
		'logo_chronicles_url_link',			// the ID of the field ( this one )
		'Chronicles Link',					// the label of this field
		'barbacco_chronicles_link_display',	// the callback function of this field
		'barbacco_theme_options',			// the page where will be this field
		'logos_section'						// the name of the section this field belongs to ( in this case the above one )
	);
	
	// Register the settings with Validation callback for Address Fields
	register_setting(
		'address_section',					// the name of the settings group
		'footer_options',					// the name of the actual option ( or setting )
		'barbacco_footer_sanitization'
	);
	// Register the settings with Validation callback for Hours Fields
	register_setting(
		'hours_section',					// the name of the settings group
		'footer_options',					// the name of the actual option ( or setting )
		'barbacco_footer_sanitization'
	);
	// Register the settings with Validation callback for Social Icons
	register_setting(
		'social_section',					// the name of the settings group
		'footer_options',					// the name of the actual option ( or setting )
		'barbacco_footer_sanitization'
	);
	// Register the settings with Validation callback for Social Icons
	register_setting(
		'logos_section',					// the name of the settings group
		'footer_options',					// the name of the actual option ( or setting )
		'barbacco_footer_sanitization'
	);
}
add_action( 'admin_init', 'barbacco_initialize_theme_options' );


/***************************************************************************************************************************
**********	CALLBACKS 
****************************************************************************************************************************/

// Function to display the theme options page
function barbacco_theme_options_display() {
?>
	<div class="wrap">
		<h2>The Footer</h2>
		<form method="post" action="options.php">
			<?php
			
				settings_fields( 'address_section' );
				settings_fields( 'hours_section' );
				settings_fields( 'social_section' );
				settings_fields( 'logos_section' );
				
				do_settings_sections( 'barbacco_theme_options' );
				
				submit_button();
			
			?>
		</form>
	</div>
<?php	
}

// Function to add extra text to display on each section for Header Options
function barbacco_footer_address_fields_display() {
	echo "Please fill the necessary data to the text fields.";
}
// Function to add extra text to display on each section for Header Options
function barbacco_footer_hours_display() {
	echo "Fill days into first field of a row and hours into second (under it) field of a row.";
}
// Function to add extra text to display on each section for Social Icons (empt)
function barbacco_social_icons_display() {
	echo "Enter the correct URL of the corresponding social icon.";
}
// Function to add extra text to display on each section for Social Icons (empt)
function barbacco_logos_display() {
	echo "Enter URL's of links and URL of Logo - Chronicles from media library.";
}

/* ***** ADDRESS FIELDS ***** */
// Function to display the settings inputs on the page
function barbacco_footer_address_display() {
	$options = (array)get_option( 'footer_options' );
	$barbacco_address = $options['barbacco_address'];

	echo '<input type="text" name="footer_options[barbacco_address]" id="barbacco_footer_address_text" value="' . $barbacco_address . '" />';
}
function barbacco_footer_address_link_display() {
	$options = (array)get_option( 'footer_options' );
	$barbacco_address_link = $options['barbacco_address_link'];

	echo '<input type="text" name="footer_options[barbacco_address_link]" id="barbacco_footer_address_link" value="' . $barbacco_address_link . '" />';
}
function barbacco_footer_page_link_display() {
	$options = (array)get_option( 'footer_options' );
	$barbacco_page_link = $options['barbacco_page_link'];

	echo '<input type="text" name="footer_options[barbacco_page_link]" id="barbacco_footer_page_link" value="' . $barbacco_page_link . '" />';
}
function barbacco_footer_number_display() {
	$options = (array)get_option( 'footer_options' );
	$barbacco_phone = $options['barbacco_phone'];

	echo '<input type="text" name="footer_options[barbacco_phone]" id="barbacco_footer_phone_number" value="' . $barbacco_phone . '" />';
}
function barbacco_footer_takeout_number_display() {
	$options = (array)get_option( 'footer_options' );
	$barbacco_takeout = $options['barbacco_takeout'];

	echo '<input type="text" name="footer_options[barbacco_takeout]" id="barbacco_footer_takeout_number" value="' . $barbacco_takeout . '" />';
}
/* ***** HOURS FIELDS ***** */
// Function to display the settings inputs on the page
function barbacco_days_first_row_display() {
	$options = (array)get_option( 'footer_options' );
	$first_row_days = $options['first_row_days'];

	echo '<input type="text" name="footer_options[first_row_days]" id="hours_first_row_days" value="' . $first_row_days . '" />';
}
function barbacco_hours_first_row_display() {
	$options = (array)get_option( 'footer_options' );
	$first_row_hours = $options['first_row_hours'];

	echo '<input type="text" name="footer_options[first_row_hours]" id="hours_first_row_hours" value="' . $first_row_hours . '" />';
}
function barbacco_days_second_row_display() {
	$options = (array)get_option( 'footer_options' );
	$second_row_days = $options['second_row_days'];

	echo '<input type="text" name="footer_options[second_row_days]" id="hours_second_row_days" value="' . $second_row_days . '" />';
}
function barbacco_hours_second_row_display() {
	$options = (array)get_option( 'footer_options' );
	$second_row_hours = $options['second_row_hours'];

	echo '<input type="text" name="footer_options[second_row_hours]" id="hours_second_row_hours" value="' . $second_row_hours . '" />';
}
function barbacco_days_third_row_display() {
	$options = (array)get_option( 'footer_options' );
	$third_row_days = $options['third_row_days'];

	echo '<input type="text" name="footer_options[third_row_days]" id="hours_third_row_days" value="' . $third_row_days . '" />';
}
function barbacco_hours_third_row_display() {
	$options = (array)get_option( 'footer_options' );
	$third_row_hours = $options['third_row_hours'];

	echo '<input type="text" name="footer_options[third_row_hours]" id="hours_third_row_hours" value="' . $third_row_hours . '" />';
}
function barbacco_days_fourth_row_display() {
	$options = (array)get_option( 'footer_options' );
	$fourth_row_days = $options['fourth_row_days'];

	echo '<input type="text" name="footer_options[fourth_row_days]" id="hours_fourth_row_days" value="' . $fourth_row_days . '" />';
}
function barbacco_hours_fourth_row_display() {
	$options = (array)get_option( 'footer_options' );
	$fourth_row_hours = $options['fourth_row_hours'];

	echo '<input type="text" name="footer_options[fourth_row_hours]" id="hours_fourth_row_hours" value="' . $fourth_row_hours . '" />';
}
function barbacco_days_fifth_row_display() {
	$options = (array)get_option( 'footer_options' );
	$fifth_row_days = $options['fifth_row_days'];

	echo '<input type="text" name="footer_options[fifth_row_days]" id="hours_fifth_row_days" value="' . $fifth_row_days . '" />';
}
function barbacco_hours_fifth_row_display() {
	$options = (array)get_option( 'footer_options' );
	$fifth_row_hours = $options['fifth_row_hours'];

	echo '<input type="text" name="footer_options[fifth_row_hours]" id="hours_fifth_row_hours" value="' . $fifth_row_hours . '" />';
}
/* ***** SOCIAL ICONS ***** */
// Function to display the settings inputs on the page
function barbacco_twitter_icon_display() {
	$options = (array)get_option( 'footer_options' );
	$twitter_url = $options['twitter_url'];

	echo '<input type="text" name="footer_options[twitter_url]" id="twitter_icon_url" value="' . $twitter_url . '" />';
}
function barbacco_facebook_icon_display() {
	$options = (array)get_option( 'footer_options' );
	$facebook_url = $options['facebook_url'];

	echo '<input type="text" name="footer_options[facebook_url]" id="facebook_icon_url" value="' . $facebook_url . '" />';
}
function barbacco_instagram_icon_display() {
	$options = (array)get_option( 'footer_options' );
	$instagram_url = $options['instagram_url'];

	echo '<input type="text" name="footer_options[instagram_url]" id="instagram_icon_url" value="' . $instagram_url . '" />';
}
/* ***** LOGOS SECTION ***** */
// Function to display the settings inputs on the page
function barbacco_volta_logo_display() {
	$options = (array)get_option( 'footer_options' );
	$volta_url = $options['volta_url'];

	echo '<input type="text" name="footer_options[volta_url]" id="logo_volta_url" value="' . $volta_url . '" />';
}
function barbacco_perbacco_logo_display() {
	$options = (array)get_option( 'footer_options' );
	$perbacco_url = $options['perbacco_url'];

	echo '<input type="text" name="footer_options[perbacco_url]" id="logo_perbacco_url" value="' . $perbacco_url . '" />';
}
function barbacco_chronicles_logo_display() {
	$options = (array)get_option( 'footer_options' );
	$chronicles_link = $options['chronicles_link'];

	echo '<input type="text" name="footer_options[chronicles_link]" id="logo_chronicles_url_link" value="' . $chronicles_link . '" />';
}
function barbacco_chronicles_link_display() {
	$options = (array)get_option( 'footer_options' );
	$chronicles_url = $options['chronicles_url'];

	echo '<input type="text" name="footer_options[chronicles_url]" id="logo_chronicles_url" value="' . $chronicles_url . '" />';
}

// Sanitization callback functions
function barbacco_footer_sanitization($input) {
	//Define the array for the updated options
    $output = array();

    // Loop through each of the options sanitizing the data
    foreach ($input as $key => $val) {

            if( isset($input[$key]) ) {
                    $output[$key] = strip_tags( stripslashes($input[$key]));
            } // end if
    } // end foreach

    return apply_filters( 'barbacco_header_sanitization', $output, $input );
}

?>