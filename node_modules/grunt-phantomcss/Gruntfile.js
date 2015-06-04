/*
 * grunt-phantomcss
 * https://github.com/anselmh/grunt-phantomcss
 *
 * Copyright (c) 2013 Chris Gladd
 * Copyright (c) since 2014 Anselm Hannemann
 *
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        jshint: {
            all: [
                'Gruntfile.js',
                'tasks/phantomcss.js',
                'phantomjs/runner.js',
                '<%= nodeunit.tests %>',
            ],
            options: {
                jshintrc: '.jshintrc',
            },
        },

        // Before generating any new files, remove any
        // previously-created files.
        clean: {
            tests: ['tmp'],
            results: ['results'],
        },

        // Configuration to be run (and then tested).
        phantomcss: {
            visualTest: {
                options: {
                    screenshots: 'fixtures/screenshots/',
                    results: 'results/',
                    viewportSize: [1280, 800],
                    mismatchTolerance: 0.05,
                    waitTimeout: 5000,
                    logLevel: 'warning' // debug | info | warning | error
                },
                src: [
                    'fixtures/coffeemachine_test.js'
                ]
            }
        },

        // Unit tests.
        nodeunit: {
            tests: ['test/*_test.js'],
        },
    });

    // Timings for Grunt
    require('time-grunt')(grunt);

    // Load all tasks JIT
    require('jit-grunt')(grunt, {
        phantomcss: 'tasks/phantomcss.js'
    });

    // Whenever the "test" task is run, first clean the "tmp" dir,
    // then run this plugin's task(s), then test the result.
    grunt.registerTask('test', ['clean', 'phantomcss', 'nodeunit']);

    // By default, lint and run all tests.
    grunt.registerTask('default', ['jshint', 'test']);
};
