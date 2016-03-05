module.exports = (grunt) ->
  'use strict';
  
  ###This file launch tasks, defined in bt-extension*/resources/gulp/tools###
  
  rootPath = require('path').resolve('../../../../').replace('/\\/g', '/')
  console.log rootPath