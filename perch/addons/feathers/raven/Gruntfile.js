module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				options: { 
					sourcemap: 'none',                     
			        style: 'expanded'
			    },
				files: {
					'css/style.css' : 'src/sass/style.scss'
				}
			}
		},
		copy: { //run after bower updates
	     main: {
	       files: [
	          {
	            expand: true, 
	            cwd: 'bower_components/normalize.css',
	            src: ['normalize.css'], 
	            dest: 'src/css'
	          }
	       ],
	     },
	    },
	    cssmin: {
		  options: {
		    shorthandCompacting: false,
		    roundingPrecision: -1
		  },
		  target: {
		    files: {
		      'css/normalize.min.css': 'src/css/normalize.css'
		    }
		  }
		},
		uglify: {
		    my_target: {
		      files: {
		        'js/app.min.js': ['src/js/app.js']
		      }
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',['watch']);
}