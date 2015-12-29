requirejs.config({
	shim: {
		"bootstrap" : {
			deps: ['jquery']
		},
		"parallax" : {
			deps: ['jquery']
		}
	},
	paths: {
		"jquery" : "../../vendor/jquery/dist/jquery",
		"bootstrap" : "../../vendor/bootstrap/dist/js/bootstrap",
		"parallax" : "../../vendor/skrollr/src/skrollr",
		"recaptcha": "lib/recaptcha/api"
	},
	deps: ['main']
})