<script type="text/javascript">
	function copyToClipboard ( text, copyMode ) {
		if ( copyMode == "css" ) {
			window.prompt( "Copy this, then paste in your CSS :before selector.", text );
		} else {
			window.prompt( "Copy this, then paste in your Photoshop textfield.", text );
		}
	}
	
	function pickRandomIcon() {
		var divs = jQuery("#iconlist div").get().sort(function(){
				return Math.round(Math.random())-0.5;
			}).slice(0,1);
	
		attr = jQuery(divs).attr('alt');
		cssclass = jQuery(divs).attr('class');
		glyphtitle = jQuery(divs).data('title');
		displayGlyph( attr, cssclass, glyphtitle );
	
	}
	
	function displayGlyph( attr, cssclass, glyphtitle ) {
	
		// css copy string
		csstext = "content: \'\\" + attr + "';";
	
		// html copy string
		htmltext = '<div class="' + cssclass + '"></div>';
	
		// glyph copy string
		glyphtemp = "&#x" + attr + ";";
		jQuery('#temp').html( glyphtemp );
		glyphtext = jQuery('#temp').text();
	
		// final output
		output = '<div class="' + cssclass + '"></div>'
		+ '<div class="info">'
			+ '<strong><h3> ' + glyphtitle + '</h3></strong>'
			+ '<a class="button" href="javascript:copyToClipboard(csstext, \'css\')">Copy CSS</a><br />'
			+ '<a class="button" href="javascript:copyToClipboard(glyphtext)">Copy Glyph</a>'
		+ '</div>';
	
		jQuery( '#glyph' ).html( output );
	
	}
	
	jQuery(document).ready(function() {
	
		pickRandomIcon();
	
		jQuery( '#iconlist div' ).click(function() {
	
			attr = jQuery( this ).attr( 'alt' );
			cssclass = jQuery( this ).attr( 'class' );
			glyphtitle = jQuery( this ).data( 'title' );
	
			displayGlyph( attr, cssclass, glyphtitle );
	
		});
	
	});
</script>

<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php esc_html_e( 'Dashicons' ); ?></h2>
	
	<div id="content">
		<div id="glyph">

		</div>
	</div>

	<div id="icons">
		<div id="iconlist">
			
			<!-- admin menu -->
			<div alt="f333" class="dashicons dashicons-menu" data-title="Menu"></div>
			<div alt="f319" class="dashicons dashicons-site" data-title="Site"></div>
			<div alt="f226" class="dashicons dashicons-gauge" data-title="Gauge"></div>
			<div alt="f102" class="dashicons dashicons-admin-dashboard" data-title="Dashboard"></div>
			<div alt="f109" class="dashicons dashicons-admin-post" data-title="Post"></div>
			<div alt="f104" class="dashicons dashicons-admin-media" data-title="Media"></div>
			<div alt="f103" class="dashicons dashicons-admin-links" data-title="Links"></div>
			<div alt="f105" class="dashicons dashicons-admin-page" data-title="Page"></div>
			<div alt="f101" class="dashicons dashicons-admin-comments" data-title="Comments"></div>
			<div alt="f100" class="dashicons dashicons-admin-appearance" data-title="Appearance"></div>
			<div alt="f106" class="dashicons dashicons-admin-plugins" data-title="Plugins"></div>
			<div alt="f110" class="dashicons dashicons-admin-users" data-title="Users"></div>
			<div alt="f107" class="dashicons dashicons-admin-tools" data-title="Tools"></div>
			<div alt="f108" class="dashicons dashicons-admin-settings" data-title="Settings"></div>
			<div alt="f112" class="dashicons dashicons-admin-site" data-title="Multisite"></div>
			<div alt="f111" class="dashicons dashicons-admin-generic" data-title="Generic"></div>
			<div alt="f148" class="dashicons dashicons-admin-collapse" data-title="Collapse"></div>	
			
			<!-- welcome screen -->
			<div alt="f119" class="dashicons dashicons-welcome-write-blog" data-title="Write blog"></div>
			<div alt="f133" class="dashicons dashicons-welcome-add-page" data-title="Add page"></div>
			<div alt="f115" class="dashicons dashicons-welcome-view-site" data-title="View site"></div>
			<div alt="f116" class="dashicons dashicons-welcome-widgets-menus" data-title="Widgets ang menus"></div>
			<div alt="f117" class="dashicons dashicons-welcome-comments" data-title="Comment Toggle"></div>
			<div alt="f118" class="dashicons dashicons-welcome-learn-more" data-title="Learn More"></div>

			<!-- post formats -->
			<div alt="f123" class="dashicons dashicons-format-aside" data-title="Aside"></div>
			<div alt="f128" class="dashicons dashicons-format-image" data-title="Image"></div>
			<div alt="f161" class="dashicons dashicons-format-gallery" data-title="Gallery"></div>
			<div alt="f126" class="dashicons dashicons-format-video" data-title="Video"></div>
			<div alt="f130" class="dashicons dashicons-format-status" data-title="Status"></div>
			<div alt="f122" class="dashicons dashicons-format-quote" data-title="Quote"></div>
			<div alt="f125" class="dashicons dashicons-format-chat" data-title="Chat"></div>
			<div alt="f127" class="dashicons dashicons-format-audio" data-title="Audio"></div>
			<div alt="f306" class="dashicons dashicons-camera2" data-title="Camera"></div>
			<div alt="f232" class="dashicons dashicons-images-alt1" data-title="Image alt 1"></div>
			<div alt="f233" class="dashicons dashicons-images-alt2" data-title="Image alt 2"></div>
			<div alt="f234" class="dashicons dashicons-video-alt1" data-title="Video alt 1"></div>
			<div alt="f235" class="dashicons dashicons-video-alt2" data-title="Video alt 2"></div>
			<div alt="f236" class="dashicons dashicons-video-alt3" data-title="Video alt 3"></div>
			
			<!-- image editing -->
			<div alt="f165" class="dashicons dashicons-imgedit-crop" data-title="Crop"></div>
			<div alt="f166" class="dashicons dashicons-imgedit-rleft" data-title="Rotate left"></div>
			<div alt="f167" class="dashicons dashicons-imgedit-rright" data-title="Rotate right"></div>
			<div alt="f168" class="dashicons dashicons-imgedit-flipv" data-title="Flip vertical"></div>
			<div alt="f169" class="dashicons dashicons-imgedit-fliph" data-title="Flip horizontal"></div>
			<div alt="f171" class="dashicons dashicons-imgedit-undo" data-title="Undo"></div>
			<div alt="f172" class="dashicons dashicons-imgedit-redo" data-title="Redo"></div>		
			
			<!-- posts -->
			<div alt="f135" class="dashicons dashicons-align-left" data-title="Align left"></div>
			<div alt="f136" class="dashicons dashicons-align-right" data-title="Align right"></div>	
			<div alt="f134" class="dashicons dashicons-align-center" data-title="Align center"></div>
			<div alt="f138" class="dashicons dashicons-align-none" data-title="Align none"></div>
			<div alt="f160" class="dashicons dashicons-lock" data-title="Lock"></div>
			<div alt="f145" class="dashicons dashicons-calendar" data-title="Calendar"></div>
			<div alt="f177" class="dashicons dashicons-visibility" data-title="Visibility"></div>
			<div alt="f173" class="dashicons dashicons-post-status" data-title="Post Status"></div>
			<div alt="f327" class="dashicons dashicons-edit" data-title="Edit"></div>
			
			<!-- tinymce -->
			<div alt="f200" class="dashicons dashicons-editor-bold" data-title="Bold"></div>
			<div alt="f201" class="dashicons dashicons-editor-italic" data-title="Italic"></div>	
			<div alt="f203" class="dashicons dashicons-editor-ul" data-title="UL"></div>
			<div alt="f204" class="dashicons dashicons-editor-ol" data-title="OL"></div>
			<div alt="f205" class="dashicons dashicons-editor-quote" data-title="Blockquote"></div>
			<div alt="f206" class="dashicons dashicons-editor-alignleft" data-title="Left align"></div>
			<div alt="f207" class="dashicons dashicons-editor-aligncenter" data-title="Center align"></div>
			<div alt="f208" class="dashicons dashicons-editor-alignright" data-title="Right align"></div>
			<div alt="f209" class="dashicons dashicons-editor-insertmore" data-title="Insert more"></div>
			<div alt="f210" class="dashicons dashicons-editor-spellcheck" data-title="Spellcheck"></div>
			<div alt="f211" class="dashicons dashicons-editor-distractionfree" data-title="Distraction free"></div>
			<div alt="f212" class="dashicons dashicons-editor-kitchensink" data-title="Kitchen sink"></div>
			<div alt="f213" class="dashicons dashicons-editor-underline" data-title="Underline"></div>
			<div alt="f214" class="dashicons dashicons-editor-justify" data-title="Justify"></div>
			<div alt="f215" class="dashicons dashicons-editor-textcolor" data-title="Text color"></div>
			<div alt="f216" class="dashicons dashicons-editor-word" data-title="Paste from Word"></div>
			<div alt="f217" class="dashicons dashicons-editor-plaintext" data-title="Plaintext"></div>
			<div alt="f218" class="dashicons dashicons-editor-removeformatting" data-title="Remove formatting"></div>
			<div alt="f219" class="dashicons dashicons-editor-video" data-title="Video"></div>
			<div alt="f220" class="dashicons dashicons-editor-customchar" data-title="Custom characters"></div>
			<div alt="f221" class="dashicons dashicons-editor-outdent" data-title="Outdent"></div>
			<div alt="f222" class="dashicons dashicons-editor-indent" data-title="Indent"></div>
			<div alt="f223" class="dashicons dashicons-editor-help" data-title="Help"></div>
			<div alt="f224" class="dashicons dashicons-editor-strikethrough" data-title="Strikethrough"></div>
			<div alt="f225" class="dashicons dashicons-editor-unlink" data-title="Unlink"></div>
			<div alt="f320" class="dashicons dashicons-editor-rtl" data-title="RTL"></div>
			
			<!-- sorting -->
			<div alt="f142" class="dashicons dashicons-arr-up" data-title="Arrow up"></div>
			<div alt="f140" class="dashicons dashicons-arr-down" data-title="Arrow down"></div>
			<div alt="f139" class="dashicons dashicons-arr-right" data-title="Arrow right"></div>
			<div alt="f141" class="dashicons dashicons-arr-left" data-title="Arrow left"></div>
			<div alt="f342" class="dashicons dashicons-arr-alt1-up" data-title="Arrow up alt 1"></div>
			<div alt="f346" class="dashicons dashicons-arr-alt1-down" data-title="Arrow down alt 1"></div>
			<div alt="f344" class="dashicons dashicons-arr-alt1-right" data-title="Arrow right alt 1"></div>
			<div alt="f340" class="dashicons dashicons-arr-alt1-left" data-title="Arrow left alt 1"></div>
			<div alt="f343" class="dashicons dashicons-arr-alt2-up" data-title="Arrow up alt 2"></div>
			<div alt="f347" class="dashicons dashicons-arr-alt2-down" data-title="Arrow down alt 2"></div>
			<div alt="f345" class="dashicons dashicons-arr-alt2-right" data-title="Arrow right alt 2"></div>
			<div alt="f341" class="dashicons dashicons-arr-alt2-left" data-title="Arrow left alt 2"></div>
			<div alt="f156" class="dashicons dashicons-sort" data-title="Sort"></div>
			<div alt="f229" class="dashicons dashicons-leftright" data-title="Expand"></div>
			<div alt="f163" class="dashicons dashicons-list-view" data-title="List view"></div>
			<div alt="f164" class="dashicons dashicons-exerpt-view" data-title="Excerpt view"></div>
			
			<!-- social -->
			<div alt="f237" class="dashicons dashicons-share" data-title="Share"></div>
			<div alt="f240" class="dashicons dashicons-share2" data-title="Share alt 1"></div>
			<div alt="f242" class="dashicons dashicons-share3" data-title="Share alt 2"></div>
			<div alt="f301" class="dashicons dashicons-twitter1" data-title="Twitter"></div>
			<div alt="f302" class="dashicons dashicons-twitter2" data-title="Twitter alt"></div>
			<div alt="f303" class="dashicons dashicons-rss" data-title="RSS"></div>
			<div alt="f304" class="dashicons dashicons-facebook1" data-title="Facebook"></div>
			<div alt="f305" class="dashicons dashicons-facebook2" data-title="Facebook alt"></div>
			<div alt="f325" class="dashicons dashicons-network" data-title="Network"></div>
								
			<!-- jobs -->			
			<div alt="f308" class="dashicons dashicons-jobs-developers" data-title="Developers"></div>
			<div alt="f309" class="dashicons dashicons-jobs-designers" data-title="Designers"></div>
			<div alt="f310" class="dashicons dashicons-jobs-migration" data-title="Migration"></div>
			<div alt="f311" class="dashicons dashicons-jobs-performance" data-title="Performance"></div>
			
			<!-- internal/products -->
			<div alt="f120" class="dashicons dashicons-wordpress" data-title="WordPress"></div>
			<div alt="f324" class="dashicons dashicons-wordpress-single-ring" data-title="WordPress: Single Ring"></div>
			<div alt="f157" class="dashicons dashicons-pressthis" data-title="Press This"></div>
			<div alt="f113" class="dashicons dashicons-update" data-title="Update"></div>
			<div alt="f180" class="dashicons dashicons-screenoptions" data-title="Screen options"></div>
			<div alt="f348" class="dashicons dashicons-info" data-title="Info"></div>
			<div alt="f174" class="dashicons dashicons-cart" data-title="Cat"></div>
			<div alt="f175" class="dashicons dashicons-feedback" data-title="Feedback"></div>
			<div alt="f176" class="dashicons dashicons-cloud" data-title="Cloud"></div>
			<div alt="f326" class="dashicons dashicons-translation" data-title="Translation"></div>
			
			<!-- taxonomies -->
			<div alt="f323" class="dashicons dashicons-tag" data-title="Tag"></div>
			<div alt="f318" class="dashicons dashicons-category" data-title="Category"></div>
			
			<!-- alerts/notifications/flags -->
			<div alt="f147" class="dashicons dashicons-yes" data-title="Yes"></div>
			<div alt="f158" class="dashicons dashicons-no" data-title="No"></div>
			<div alt="f335" class="dashicons dashicons-no-alt" data-title="No alt"></div>
			<div alt="f132" class="dashicons dashicons-plus-small" data-title="Plus"></div>
			<div alt="f153" class="dashicons dashicons-xit" data-title="Close"></div>
			<div alt="f159" class="dashicons dashicons-marker" data-title="Marker"></div>	
			<div alt="f155" class="dashicons dashicons-star-filled" data-title="Star: Filled"></div>
			<div alt="f154" class="dashicons dashicons-star-empty" data-title="Star: Empty"></div>	
			<div alt="f227" class="dashicons dashicons-flag" data-title="Flag"></div>
			
			<!-- misc/cpt -->
			<div alt="f230" class="dashicons dashicons-location" data-title="Location"></div>
			<div alt="f231" class="dashicons dashicons-location-alt" data-title="Location alt"></div>	
			<div alt="f178" class="dashicons dashicons-vault" data-title="Vault"></div>
			<div alt="f332" class="dashicons dashicons-shield" data-title="Shield"></div>
			<div alt="f334" class="dashicons dashicons-shield-alt" data-title="Shield alt"></div>
			<div alt="f179" class="dashicons dashicons-search" data-title="Search"></div>
			<div alt="f181" class="dashicons dashicons-slides" data-title="Slides"></div>
			<div alt="f183" class="dashicons dashicons-analytics" data-title="Analytics"></div>
			<div alt="f184" class="dashicons dashicons-piechart" data-title="Piechart"></div>
			<div alt="f185" class="dashicons dashicons-bargraph" data-title="Bargraph"></div>
			<div alt="f238" class="dashicons dashicons-bargraph2" data-title="Bargraph alt 1"></div>
			<div alt="f239" class="dashicons dashicons-bargraph3" data-title="Bargraph alt 2"></div>
			<div alt="f307" class="dashicons dashicons-groups" data-title="Groups"></div>
			<div alt="f338" class="dashicons dashicons-businessman" data-title="Businessman"></div>
			<div alt="f336" class="dashicons dashicons-id" data-title="ID"></div>
			<div alt="f337" class="dashicons dashicons-id-alt" data-title="ID alt"></div>
			<div alt="f312" class="dashicons dashicons-products" data-title="Products"></div>
			<div alt="f313" class="dashicons dashicons-awards" data-title="Award"></div>
			<div alt="f314" class="dashicons dashicons-forms" data-title="Forms"></div>
			<div alt="f322" class="dashicons dashicons-portfolio" data-title="Portfolio"></div>
			<div alt="f330" class="dashicons dashicons-book" data-title="Book"></div>
			<div alt="f331" class="dashicons dashicons-book-alt" data-title="Book alt"></div>
			<div alt="f316" class="dashicons dashicons-download" data-title="Download"></div>
			<div alt="f317" class="dashicons dashicons-upload" data-title="Upload"></div>
			<div alt="f321" class="dashicons dashicons-backup" data-title="Backup"></div>
			<div alt="f339" class="dashicons dashicons-lightbulb" data-title="Lightbulb"></div>
			<div alt="f328" class="dashicons dashicons-smiley" data-title="Smiley"></div>
		</div>

	</div>

</div><!-- .wrap -->