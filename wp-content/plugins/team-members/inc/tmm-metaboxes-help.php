<?php 

/* Hooks the metabox. */
add_action('admin_init', 'dmb_tmm_add_help', 1);
function dmb_tmm_add_help() {
	add_meta_box( 
		'tmm_help', 
		'<span class="dashicons dashicons-editor-code"></span> '.__('Shortcode', TMM_TXTDM ), 
		'dmb_tmm_help_display', // Below
		'tmm', 
		'side', 
		'high'
	);
}


/* Displays the metabox. */
function dmb_tmm_help_display() { ?>

	<div class="dmb_side_block">
		<p>
			<?php 
				global $post;
				$slug = '';
				$slug = $post->post_name;
				$shortcode = '<span style="display:inline-block;border:solid 2px #999999; background:white; padding:0 8px 2px; font-size:14px; line-height:25px; vertical-align:middle;">[tmm name="'.$slug.'"]</span>';
				$shortcode_unpublished = "<span style='display:inline-block;color:#e17055'>" . /* translators: Leave HTML tags */ __("<strong>Publish</strong> your team before you can see you shortcode here!", TMM_TXTDM ) . "</span>";
				echo ($slug != '') ? $shortcode : $shortcode_unpublished;
			?>
		</p>
		<p>
			<?php /* translators: Leave HTML tags */ _e('To display your team on your site, copy-paste the <strong>[Shortcode]</strong> above in your post/page.', TMM_TXTDM ) ?>
		</p>	
	</div>

	<div class="dmb_side_block">
		<div class="dmb_help_title">
			Get support
		</div>
		<a target="_blank" href="https://wpdarko.com/support/submit-a-request/">Submit a ticket</a><br/>
		<a target="_blank" href="https://wpdarko.com/support">View documentation</a>
	</div>

<?php } ?>