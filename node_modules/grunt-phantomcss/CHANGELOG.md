# CHANGELOG

### HEAD

### v0.3.2
* Update dependencies
* Add `mismatchTolerance`as option
* Add `waitTimeout` as option

### v0.3.1
* Keep log level at "notice"
* Add time-grunt to measure build times
* Add jit-grunt to load tasks only when needed (+ improve performance)
* Change log level to notice in Gruntfile
* Document correct CasperJS log levels and pass them as arguments / option
* Added .editorconfig

### v0.3.0
* Added `mismatchTolerance` tolerance (`mismatchTolerance: 0.0.5` is default) (thx [fidgety](https://github.com/chrisgladd/grunt-phantomcss/pull/17))
* Use PhantomCSS v0.7.1
* Update dependencies
* Remove grunt as peerDependency causing multiple issues with peerPackages
* Fix post-script `bower install`
