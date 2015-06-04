casper.thenOpen( 'http://local.wordpress.dev/wp-admin/admin.php?page=wp-patterns-forms' )

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