gulp = require 'gulp'
require 'gulp-livereload'
plumber = require 'gulp-plumber'
lr = require 'tiny-lr'
server = lr()

gulp.task 'BlogTree liveReload', ->
    
    server.listen 35729, (err) ->
        return console.log err if err
        plumber()

        gulp.watch 'resources/views/**/*.blade.php', (glob) ->
            server.notifyClients [glob.path]

        gulp.watch 'public/build/**/*.css', (glob) -> 
            server.notifyClients [glob.path]
        
        gulp.watch 'public/build/**/*.js', (glob) -> 
            server.notifyClients [glob.path]

        plumber.stop()
