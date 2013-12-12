module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'js/mainactions.js',
        dest: 'js/build/mainactions.min.js'
      }
    },
    
    compass: {                  // Task
    dist: {                   // Target
      options: {              // Target options
        sassDir: 'sass',
        cssDir: 'css',
        environment: 'production'
      }
    },
    dev: {                    // Another target
      options: {
        sassDir: 'sass',
        cssDir: 'css'
      }
    }
	},
    
    sass: {                              // Task
	    dist: {                            // Target
	      options: {                       // Target options
	        style: 'compressed'
	      },
	      files: {                         // Dictionary of files
	        'mainbuild.css': 'main.scss'       // 'destination': 'source'
	        
	      }
	    }
	}
	
	
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  
  grunt.registerTask('default', ['uglify']);
  grunt.registerTask('default', ['jshint', 'compass']);
  grunt.registerTask('default', ['sass']);

};