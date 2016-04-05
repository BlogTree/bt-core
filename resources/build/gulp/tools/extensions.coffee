###
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT Public License for more details.
 *
 * Copyright (c) 2016 (original work) Blog-Tree.com;
###
foreach = require 'gulp-foreach'
path = require 'path'
rootPath = path.resolve('../../../../').replace(/\\/g, '/')

###parseDir = (file)->### 
  

module.exports = (gulp)->
  'use strict'
  
  gulp.task 'init', ->
    gulp.src(rootPath + '/bt*').pipe(foreach((stream, file)-> parseDir(file)))
  ###.pipe(console.log(this))###