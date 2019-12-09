<?php
/* Options Page */

// --------------------------------------------------------------------------------------
// CALLBACK FUNCTION FOR: register_uninstall_hook(__FILE__, 'ageverify_delete_plugin_options')
// --------------------------------------------------------------------------------------

// Delete options table entries ONLY when plugin deactivated AND deleted
function ageverify_delete_plugin_options() {
	delete_option('ageverify_options');
}

// ------------------------------------------------------------------------------
// CALLBACK FUNCTION FOR: register_activation_hook(__FILE__, 'ageverify_add_defaults')
// ------------------------------------------------------------------------------

// Define default option settings
function ageverify_add_defaults() {
	$tmp = get_option('ageverify_options');
    if(!is_array($tmp)) {
		delete_option('ageverify_options'); // so we don't have to reset all the 'off' checkboxes too! (dont think this is needed but leave for now)
		$arr = array(	
			"ageverify_on" => 0,
			"ageverify_template" => "av",
			"ageverify_cookielength" => "1",
			"ageverify_underageredirect" => "https://ageverify.com/"

		);
		update_option('ageverify_options', $arr);
	}
}

// ------------------------------------------------------------------------------
// CALLBACK FUNCTION FOR: add_action('admin_init', 'ageverify_init' )
// ------------------------------------------------------------------------------
// THIS FUNCTION RUNS WHEN THE 'admin_init' HOOK FIRES, AND REGISTERS YOUR PLUGIN
// SETTING WITH THE WORDPRESS SETTINGS API. YOU WON'T BE ABLE TO USE THE SETTINGS
// API UNTIL YOU DO.
// ------------------------------------------------------------------------------

// Init plugin options to white list our options
function ageverify_init(){
	register_setting( 'ageverify_plugin_options', 'ageverify_options', 'ageverify_validate_options' );
}

// ------------------------------------------------------------------------------
// CALLBACK FUNCTION FOR: add_action('admin_menu', 'ageverify_add_options_page');
// ------------------------------------------------------------------------------

// Add menu page
function ageverify_add_options_page() {
	add_menu_page( 
		'AgeVerify Custom', 
		'AgeVerify Custom', 
		'manage_options', 
		'age-verify-options', 
		'ageverify_render_options_page', 
		plugin_dir_url( __FILE__ ) . '/includes/AVicon20.png', 
		85.420
	);
}


// ------------------------------------------------------------------------------
// CALLBACK FUNCTION SPECIFIED IN: add_options_page()
// ------------------------------------------------------------------------------
add_action( 'admin_init', 'ageverify_settings_init' );

function ageverify_settings_init(  ) { 

	register_setting( 'pluginPage', 'ageverify_settings' );
    register_setting( 'customize', 'ageverify_settings' );

	add_settings_section(
		'ageverify_pluginPage_section', 
		__( 'Settings', 'ageverify' ), 
		'ageverify_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'ageverify_on', 
		__( 'Enable or Disable AgeVerify', 'ageverify' ), 
		'ageverify_on_render', 
		'pluginPage', 
		'ageverify_pluginPage_section' 
	);

	add_settings_field( 
		'ageverify_template', 
		__( 'Custom Instance Preview', 'ageverify' ), 
		'ageverify_template_render', 
		'pluginPage', 
		'ageverify_pluginPage_section' 
	);

	add_settings_field( 
		'ageverify_cookielength', 
		__( 'Set Cookie Duration in Hours', 'ageverify' ), 
		'ageverify_cookielength_render', 
		'pluginPage', 
		'ageverify_pluginPage_section' 
	);
	
	add_settings_field( 
		'ageverify_underageredirect', 
		__( 'Set Location of Underage Redirect (full URL)', 'ageverify' ), 
		'ageverify_underageredirect_render', 
		'pluginPage', 
		'ageverify_pluginPage_section' 
	);

	
	
}

function ageverify_on_render() {

	$options = get_option( 'ageverify_settings' );
	?>
	<input 	type='checkbox' 
			id='on'
			name='ageverify_settings[ageverify_on]' 
			<?php checked( $options['ageverify_on'], 1 ); ?> 
			value='1'
	>
	<label for='on' id='toggle-on'><?php _e( 'On', 'ageverify' ); ?></label>
	<?php

}

function ageverify_template_render(  ) { 

	$options = get_option( 'ageverify_settings' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/templates.php' ); ?>
	<div id="ageverify-gallery">
		
		<?php foreach( $templates as $template ) { ?>
			<div class="galleryItem <?php echo $template['tags']; ?>">
				<input 	type='radio' 
						name='ageverify_settings[ageverify_template]' 
						value='<?php echo $template['name']; ?>' 
						id='<?php echo $template['name']; ?>' 
						<?php checked( $options['ageverify_template'], $template['name'], true) ; ?>
				> 
				<label for='<?php echo $template['name']; ?>'>
					<img src='<?php echo plugins_url() . '/ageverify-custom/includes/' . $template['image']; ?>' alt='<?php echo $template['title']; ?>'>
                    
                    <div class="TemplateTitle"><?php echo $template['title']; ?>
                    </div>
				</label>
			</div>
		<?php }	?>
	</div>
    <br />
	
<?php }

function ageverify_cookielength_render() {

	$options = get_option( 'ageverify_settings' );
	?>
	<input 	style='font-weight:bold;width:100px;color:green;margin-bottom:20px;'
    		type='number' 
    		step='any'
			id='cookielength'
			name='ageverify_settings[ageverify_cookielength]' 
            value='<?php echo $options['ageverify_cookielength']; ?>'
            
	>
    
    <?php
    echo "<script language='javascript'>
	var cookiecheck = document.getElementById('cookielength').value;
	if (cookiecheck === '0' || cookiecheck === '' || cookiecheck === 0){
		document.getElementById('cookielength').setAttribute('value', '1');}
</script>
";
?>
	<?php

}

function ageverify_underageredirect_render() {

	$options = get_option( 'ageverify_settings' );
	?>
	<input 	style='font-weight:bold;width:300px;color:green;margin-bottom:20px;'
    		type='text' 
			id='underageredirect'
			name='ageverify_settings[ageverify_underageredirect]' 
            value='<?php echo $options['ageverify_underageredirect']; ?>'
            
	>
    <?php
    echo "<script language='javascript'>
	var redirectcheck = document.getElementById('underageredirect').value;
	if (redirectcheck === 'https://ageverify.com/' || redirectcheck === ''){
		document.getElementById('underageredirect').setAttribute('value', 'https://ageverify.com/');}
</script>
";
?>
	<?php

}


function ageverify_settings_section_callback(  ) { 

}

// Render the Plugin options form
function ageverify_render_options_page() {
	?>
    
	<div class="wrap">
		<h2><?php _e('AgeVerify Configuration', 'ageverify'); ?></h2>
        
		<?php settings_errors(); ?>
        
        <?php  
                $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'pluginPage';  
        ?> 
        
        <h2 class="nav-tab-wrapper">  
            <a href="?page=age-verify-options&tab=pluginPage" class="nav-tab <?php echo $active_tab == 'pluginPage' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Settings', 'ageverify' ); ?></a>  
            
        </h2> 

		<div id="ageverify" style="width: 75%; min-width: 350px; float: left;">
        <img id="AgeVerifyLogo" src="<?php echo plugins_url() . '/ageverify-custom/includes/AgeVerifyLogo.png'; ?>">
			<!-- Beginning of the Plugin Options Form -->
			<form method="post" action="options.php">
				<?php 
	            if( $active_tab == 'pluginPage' ) {  
	                settings_fields( 'pluginPage' );
					do_settings_sections( 'pluginPage' ); 
					submit_button();
	            } else if( $active_tab == 'customize' ) {
	                settings_fields( 'customize' );
	                do_settings_sections( 'customize' ); 

	            }
				
				?>
			</form>

		</div><!-- #main -->
		<?php include( plugin_dir_path( __FILE__ ) . '/includes/aside.php' ); ?>
	</div>

	<?php	
}



// Sanitize and validate input. Accepts an array, return a sanitized array.
function ageverify_validate_options($input) {
	$input['sample_field'] =  wp_filter_nohtml_kses($input['sample_field']); 
	// $input['txt_one'] =  wp_filter_nohtml_kses($input['txt_one']); // Sanitize textbox input (strip html tags, and escape characters)
	// $input['textarea_one'] =  wp_filter_nohtml_kses($input['textarea_one']); // Sanitize textarea input (strip html tags, and escape characters)
	return $input;
}



?>