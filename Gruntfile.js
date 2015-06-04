module.exports = function(grunt) {
	'use strict';

	// Load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	// Project configuration
	grunt.initConfig( {
		pkg: grunt.file.readJSON( 'package.json' ),

		phantomcss: {
			options: {
				mismatchTolerance: 0.05,
				screenshots: 'test/baselines',
				results: 'test/results',
				viewportSize: [1280, 800]
			},
			src: [
				'test/start.js',
				'test/*-test.js'
			]
		}
	} );

	// Debugging why Grunt is so slow to compile Sass
	require('time-grunt')(grunt);

	// Default task
	grunt.registerTask('default', ['phantomcss']);
	grunt.registerTask('test', ['phantomcss']);

	grunt.util.linefeed = '\n';
};

