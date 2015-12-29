var jpegtran = require('imagemin-jpegtran');

module.exports = function(grunt) {

	grunt.initConfig({
		
		less:{
			build: {
				options: {
					compress: true,
					cleancss: true,
					optimization: true,
					relativeUrls: false
				},
				files: {
					"public/css/sitio.min.css" : "public/assets/less/sitio.less",
				}
			}
		},

		imagemin: {
			dynamic: {
				options: {
					optimizationLevel: 6,
					use: [jpegtran()]
				},
				files: [{
					expand: true,                  // Enable dynamic expansion 
					cwd: 'public/assets/images/',                   // Src matches are relative to this path 
					src: ['**/*.{png,jpg,gif,svg}'],   // Actual patterns to match 
					dest: 'public/images/'                  // Destination path prefix 
				}]
			}
		},

		responsive_images: {
			myTask: {
				options: {
					sizes: [/*{
						width: 320,
						height: 240
					},{
						name: 'large',
						width: 640
					},*/{
						name: "large",
						width: 1024,
						suffix: "_x2",
						quality: 80
					}]
				},
				files: [{
					expand: true,
					src: ['price_top.jpg'],
					cwd: 'public/assets/images/',
					dest: 'public/images/'
				}]
			}
		},

		requirejs: {
			std: {
				options: {
					removeCombined: true,
					preserveLicenseComments: false,
					baseUrl: "public/assets/js",
					mainConfigFile: "public/assets/js/common.js",
					dir: "public/js",
					modules: [{
						name: 'common',
						include: [
							'jquery',
							'bootstrap'
						]
					}],
					optmize: 'uglify2'
				} 
			}
		},

		copy: {
			production: {
				files: [
					{expand: true, cwd: 'public/vendor/bootstrap/fonts/', src:['*'], dest: 'public/fonts', filter: 'isFile'}
				]
			}
		},

		clean: {
			build:["public/js","public/css","public/images"]
		},

		uglify: {
			build: {
				files: {
					'public/js/require.js': ['public/vendor/requirejs/require.js']
				}
			}
		}
	
	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-responsive-images');

	grunt.registerTask('default', ['clean', 'less', 'copy', 'imagemin', 'requirejs', 'uglify']);

}