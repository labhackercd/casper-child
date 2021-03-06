module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    sass: {
      dist: {
        files: [
          {
            expand: true,
            cwd: './sass',
            src: ['style.scss'],
            dest: './',
            ext: '.css'
          },
          {
            expand: true,
            cwd: './node_modules/labhackercd.net/bower_components/font-awesome/scss/',
            src: ['font-awesome.scss'],
            dest: './css/',
            ext: '.css'
          }
        ]
      }
    },
    copy: {
      font_awesome: {
        files: [{
          expand: true,
          cwd: './bower_components/font-awesome/fonts/',
          src: '**.*',
          dest: './fonts/'
        }]
      },
      bootstrap_scripts: {
        files: [{
          expand: true,
          cwd: './node_modules/labhackercd.net/bower_components/bootstrap-sass-official/assets/javascripts/',
          src: 'bootstrap.js',
          dest: './scripts/'
        }, {
          expand: true,
          cwd: './node_modules/labhackercd.net/bower_components/jquery/dist/',
          src: 'jquery.js',
          dest: './scripts/'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.registerTask('build', [
    'sass',
    'copy',
  ]);

  grunt.registerTask('default', ['build'])
};
