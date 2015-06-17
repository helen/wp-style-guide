
phantom.casperTest = true;
// todo: pass url from grunt flag
var url = 'http://local.wordpress.dev/wp-admin';

casper.start( url, function() {
	this.fill( 'form#loginform', {
		'log': 'admin',
		'pwd': 'password'
	}, true);

	this.click( '#wp-submit' );

	console.log( 'Logging in...' );
});

