// Read the file with the URL that we passed to grunt test
var fs = require( 'fs' ),
	siteURL;

try {
	siteURL = fs.read( 'test/visual/.local_url' );
} catch(err) {
	siteURL = ( typeof siteURL === 'undefined' ) ? 'http://local.wordpress.dev' : siteURL;
}

casper.thenOpen( siteURL + '/wp-admin/admin.php?page=wp-patterns-jquery-ui' )

.then( function() {
	phantomcss.screenshot( '.ui-dialog-titlebar' );
})

.then( function() {
	phantomcss.screenshot( '.ui-dialog-content' );
})

.then( function() {
	phantomcss.screenshot( '.ui-dialog-buttonpane' );
})

// Add handlers for clicking on the accordion
.then( function() {
	phantomcss.screenshot( '.ui-accordion-header' );
})

.then( function() {
	phantomcss.screenshot( '.ui-accordion-content' );
})

.then( function() {
	phantomcss.screenshot( '.ui-tabs-nav' );
})

.then( function() {
	phantomcss.screenshot( '.ui-tabs-panel' );
})

// Add handler for clicking the dialog link
.then( function() {
	phantomcss.screenshot( '#dialog_link' );
})

.then( function() {
	phantomcss.screenshot( '.ui-tabs-panel' );
})

.then( function() {
	phantomcss.screenshot( '.ui-widget-shadow' );
})

.then( function() {
	phantomcss.screenshot( '.ui-slider' );
})

.then( function() {
	phantomcss.screenshot( '.ui-slider-vertical' );
})

.then( function() {
	phantomcss.screenshot( '.ui-datepicker-header' );
})

.then( function() {
	phantomcss.screenshot( '.ui-datepicker-calendar' );
})

.then( function() {
	phantomcss.screenshot( '#multidatepicker' );
})

.then( function() {
	phantomcss.screenshot( '.ui-progressbar' );
})

.then( function() {
	phantomcss.screenshot( '.ui-state-highlight' );
})

.then( function() {
	phantomcss.screenshot( '.ui-state-error' );
})

.then( function() {
	phantomcss.screenshot( '#beginning' );
})

.then( function() {
	phantomcss.screenshot( '#rewind' );
})

.then( function() {
	phantomcss.screenshot( '#play' );
})

.then( function() {
	phantomcss.screenshot( '#stop' );
})

.then( function() {
	phantomcss.screenshot( '#forward' );
})

.then( function() {
	phantomcss.screenshot( '#end' );
})

.then( function() {
	phantomcss.screenshot( '#shuffle' );
})

.then( function() {
	phantomcss.screenshot( '#repeat' );
});