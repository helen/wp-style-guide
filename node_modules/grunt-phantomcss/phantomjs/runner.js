/*
* grunt-phantomcss
* https://github.com/anselmh/grunt-phantomcss
*
* Copyright (c) 2013 Chris Gladd
* Copyright (c) since 2014 Anselm Hannemann
*
* Licensed under the MIT license.
*/

'use-strict';

// Get node fileSystem module and define the separator module
var fs = require('fs');
var s = fs.separator;

// Parse arguments passed in from the grunt task
var args = JSON.parse(phantom.args[0]);

// Get viewport arguments (width | height)
var viewportSize = {
  width: args.viewportSize[0],
  height: args.viewportSize[1]
};

// Messages are sent to the parent by appending them to the tempfile
var sendMessage = function() {
  fs.write(args.tempFile, JSON.stringify(Array.prototype.slice.call(arguments)) + '\n', 'a');
};

// Initialise CasperJs
var phantomCSSPath = args.phantomCSSPath;

phantom.casperPath = phantomCSSPath+s+'CasperJs';
phantom.injectJs(phantom.casperPath+s+'bin'+s+'bootstrap.js');

var casper = require('casper').create({
  viewportSize: viewportSize,
  logLevel: args.logLevel,
  verbose: true
});

// Require and initialise PhantomCSS module
var phantomcss = require(phantomCSSPath+s+'phantomcss.js');

phantomcss.init({
  screenshotRoot: args.screenshots,
  failedComparisonsRoot: args.failures,
  libraryRoot: phantomCSSPath, // Give absolute path, otherwise PhantomCSS fails
  mismatchTolerance: args.mismatchTolerance, // defaults to 0.05

  onFail: function(test) {
    sendMessage('onFail', test);
  },
  onPass: function(test) {
    sendMessage('onPass', test);
  },
  onTimeout: function(test) {
    sendMessage('onTimeout', test);
  },
  onComplete: function(allTests, noOfFails, noOfErrors) {
    sendMessage('onComplete', allTests, noOfFails, noOfErrors);
  }
});

// Run the test scenarios
args.test.forEach(function(testSuite) {
  require(testSuite);
});

// End tests and compare screenshots
casper.then(function() {
  phantomcss.compareAll();
})
.then(function() {
  casper.test.done();
})
.run(function() {
  phantom.exit();
});
