module.exports = function(grunt) {
	'use strict';

	// Load all grunt tasks
	require( 'matchdep' ).filterDev( 'grunt-*' ).forEach( grunt.loadNpmTasks );

	// Project configuration
	grunt.initConfig( {
		pkg: grunt.file.readJSON( 'package.json' ),

		phantomcss: {
			desktop: {
				options: {
					screenshots: 'test/visual/baselines/desktop',
					results: 'test/visual/results/desktop',
					viewportSize: [1024, 768],
					mismatchTolerance: 0.05
				},
				src: [
					'test/visual/start.js',
					'test/visual/*-test.js'
				]
			},
			mobile: {
				options: {
					screenshots: 'test/visual/baselines/mobile',
					results: 'test/visual/results/mobile',
					viewportSize: [320, 480],
					mismatchTolerance: 0.05
				},
				src: [
					'test/visual/start.js',
					'test/visual/*-test.js'
				]
			}
		},
	} );

	// Debugging why Grunt is so slow to compile Sass
	require( 'time-grunt' )(grunt);

	// Default task
	grunt.util.linefeed = '\n';

	/*
	 * Testing
	 */

	// All a variable to be passed, eg. --url=http://test.dev
	var localURL = grunt.option( 'url' );

	// Register a custom task to save the local URL, which is then read by the PhantomCSS test file.
	// This file is saved so that "grunt test" can then be run in the future without passing a URL each time.
	//
	// Note: Make sure test/visual/.local_url is added to .gitignore
	grunt.registerTask( 'test', 'Runs phantomcss and stores the --url parameter', function() {
		if ( localURL ) {
			grunt.log.writeln( 'Local URL: ' + localURL );
			grunt.file.write( 'test/visual/.local_url', localURL );
		}

		grunt.task.run( ['phantomcss'] );
	} );
	grunt.util.linefeed = '\n';
};

