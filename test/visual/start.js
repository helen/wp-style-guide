
// Prevent PhantomCSS from throwing a bunch of casper.test errors in the console
phantom.casperTest = true;

// Read the file with the URL that we passed to grunt test
var fs = require( 'fs' ),
	siteURL;

try {
	siteURL = fs.read( 'test/visual/.local_url' );
} catch(err) {
	// Just in case the file isn't there
	console.log( 'No --url parameter given and no previously stored URL found. Defaulting to http://local.wordpress.dev. Run $ grunt test --url=http://yoursite.dev to resolve.' );
	siteURL = ( typeof siteURL === 'undefined' ) ? 'http://local.wordpress.dev' : siteURL;
}


casper.start( siteURL + '/wp-admin/', function() {
	this.fill( 'form#loginform', {
		'log': 'admin',
		'pwd': 'password'
	}, true);

	this.click( '#wp-submit' );

	console.log( 'Logging in...' );
});

