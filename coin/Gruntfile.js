module.exports = function (grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			files: {
				cwd: 'js',
				src: ['*.js', '!*.min.js'], // source files mask
				dest: 'js/', // destination folder
				expand: true, // allow dynamic building
				flatten: true, // remove all unnecessary nesting
				ext: '.min.js' // replace .js to .min.js
			}
		},

		compass: {
			dist: {
				options: {
					sassDir: 'assets/scss',
					cssDir: 'css'
				}
			}
		},

		concat: {
			dist: {
				src: ['assets/js/*.js'],
				dest: 'js/app.js',
			}
		},

		browserify: {
			files: {
				expand: true,
				cwd: 'js',
				src: ['app.js'],
				dest: 'js/',
				ext: '.js'
			}
		},

		babel: {
			options: {
				presets: ["env"]
			},
			files: {
				expand: true,
				cwd: 'js',
				src: ['app.js'],
				dest: 'js/',
				ext: '.js'
			}
		},

		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'css',
					src: ['*.css', '!*.min.css'],
					dest: 'css',
					ext: '.min.css'
				}]
			}
		},

		watch: {
			js: {
				files: ['assets/js/*.js', 'assets/js/*/*.js', 'Gruntfile.js'],
				tasks: ['newer:jshint', 'newer:concat', 'newer:babel', 'newer:browserify', 'newer:uglify']
			},

			css: {
				files: '**/*.scss',
				tasks: ['compass', 'cssmin']
			}
		},

		jshint: {
			options: {
				curly: true,
				eqnull: true,
				browser: true,
				expr: true,
				globals: {
					jQuery: true
				},
				sub: true,
				esversion: 6
			},
			uses_defaults: ['assets/js/*.js', '!assets/js/__*.js', 'assets/js/*/*.js', '!assets/js/*/__*.js']
		},

		removelogging: {
			dist: {
				src: "js/app.js",
				dest: "js/app.js",
			}
		}
	});

	// load plugins
	// load plugins
	require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });

	// register at least this one task
	// register at least this one task
	grunt.registerTask('default', ['concat', 'removelogging', 'babel', 'browserify', 'uglify', 'compass', 'cssmin']);
	grunt.registerTask('dev', ['jshint', 'concat', 'babel', 'browserify', 'uglify', 'compass', 'cssmin', 'watch']);
	grunt.registerTask('des', ['compass', 'cssmin', 'watch:css']);
};
