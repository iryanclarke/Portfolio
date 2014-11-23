
'use strict';
 
module.exports = function (grunt) {
 
  // Project configuration.
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
        files: "css/scss/*.scss",
        tasks: "sass:dev"
      }
    },
    sass: {
      dev: {
        files: {
          // destination      // source file
          "css/css/mobile.css" : "css/scss/mobile.scss",
          "css/css/desktop.css" : "css/scss/desktop.scss"
        }
      }
    },
    browserSync: {
      default_options: {
        bsFiles: {
          src: [
            "css/css/*.css",
            "*.php"
          ]
        },
        options: {
          watchTask: true,
          proxy: "iryanclarke.local"
        }
      }
    }
  });
 
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
 
  // Launch BrowserSync + watch task
  grunt.registerTask('default', ['browserSync', 'watch']);
};