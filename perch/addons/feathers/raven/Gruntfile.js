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
					'build/assets/css/app.css' : 'src/sass/app.scss'
				}
			}
		},
		//copy: { 
	    //  main: {
	    //    files: [
	          // {
	          //   expand: true, 
	          //   cwd: 'bower_components/bootstrap-sass/assets/javascripts',
	          //   src: ['**'], 
	          //   dest: 'lib/js'
	          // }
	    //    ],
	    //  },
	    //},
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
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',['watch']);
}