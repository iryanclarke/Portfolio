'use strict';

module.exports = function (grunt) {

  // Project configuration.
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
        files: "public/stylesheets/sass/*.scss",
        tasks: "sass:dev"
      }
    },
    sass: {
      dev: {
        files: {
          // destination                      // source file
          "public/stylesheets/css/gsdk.css" : "public/stylesheets/sass/gsdk.scss",
          "public/stylesheets/css/examples.css" : "public/stylesheets/sass/examples.scss"
        }
      }
    },
    browserSync: {
      default_options: {
        bsFiles: {
          src: [
            "public/stylesheets/css/*.css",
            "*.php"
          ]
        },
        options: {
          watchTask: true,
          proxy: "local.iryanclarke.dev"
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
