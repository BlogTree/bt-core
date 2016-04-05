module.exports = (gulp)->
  plugins = require('gulp-load-plugins')({pattern: '*'})
  
  require('./tools/livereload.coffee')(gulp)
  
  require('./tools/extensions')(gulp)
  ###
  gulp.task 'default', ->
    console.log 'default'###
