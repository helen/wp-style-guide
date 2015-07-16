
// Read the file with the URL that we passed to grunt test
var fs = require( 'fs' ),
	siteURL;

try {
	siteURL = fs.read( 'test/visual/.local_url' );
} catch(err) {
	siteURL = ( typeof siteURL === 'undefined' ) ? 'http://local.wordpress.dev' : siteURL;
}

casper.thenOpen( siteURL + '/wp-admin/admin.php?page=wp-patterns-forms' )

.then( function() {
	phantomcss.screenshot( '.form-table input[type="text"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table select[name="select"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table select[name="multi-select"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[type="radio"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[type="checkbox"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table fieldset' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[type="checkbox"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-date"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-month"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-week"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-time"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-datetime-local"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-number"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-range"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table input[name="input-color"]' );
})

.then( function() {
	phantomcss.screenshot( '.form-table .button' );
})

.then( function() {
	phantomcss.screenshot( '.form-table .button-primary' );
})

.then( function() {
	phantomcss.screenshot( '.form-table .button-secondary' );
});