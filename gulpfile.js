////////////////////
// VENDOR IMPORTS //
////////////////////

var gulp = require('gulp');
var plugins = require('gulp-load-plugins')({
	DEBUG: false,
	pattern: ['gulp-*', 'yargs', 'extend', 'jsonfile', 'browser-sync', 'lost', 'bower-files'],
	scope: ['devDependencies'],
	rename: {
		'gulp-if': 'gif',
		'gulp-uglifyjs': 'uglify',
		'bower-files': 'bower',
		'gulp-connect-php': 'php'
	}
});

///////////////////
// CONFIGURATION //
///////////////////

// Set up the source files
var src = {
	scripts: plugins.bower().dev().ext('js').files.concat('resources/scripts/**/*.js'),
	sass: 'resources/sass/app.sass'
};

// Set up various plugin options
var options = {
	sass: {},
	autoprefixer: {},
	plumber: {
		errorHandler: function handleGulpErrors(err) {
			plugins.notify.onError({
				title: `${err.name}: ${err.plugin}`,
				message: "<%= error.message %>"
			})(err);
			this.emit('end');
		}
	},
	jshint:  {
		esversion: 6
	}
};

if ( plugins.yargs.argv.production ) {
	options.sass.outputStyle = 'compressed';
}

////////////////
// GULP TASKS //
////////////////

gulp.task('scripts', function compileScripts() {
	const f = plugins.filter('resources/scripts/**/*.js', { restore: true });
	return gulp.src(src.scripts)
		.pipe(plugins.plumber(options.plumber))
		.pipe(plugins.cached('scripts'))
		.pipe(f)
		.pipe(plugins.jshint(options.jshint))
		.pipe(plugins.jshint.reporter('jshint-stylish'))
		.pipe(plugins.jshint.reporter('fail'))
		.pipe(plugins.gif(!plugins.yargs.argv.production, plugins.sourcemaps.init()))
		.pipe(plugins.babel({ presets: ['es2015'] }))
		.pipe(f.restore)
		.pipe(plugins.remember('scripts'))
		.pipe(plugins.gif(!plugins.yargs.argv.production, plugins.concat('app.js'), plugins.uglify('app.js')))
		.pipe(plugins.gif(!plugins.yargs.argv.production, plugins.sourcemaps.write()))
		.pipe(gulp.dest(`public`))
		.pipe(plugins.notify({
			title: 'Scripts Compiled'
		}))
});

gulp.task('sass', function compileSass() {
	return gulp.src(src.sass)
		.pipe(plugins.plumber(options.plumber))
		.pipe(plugins.gif(!plugins.yargs.argv.production, plugins.sourcemaps.init()))
		.pipe(plugins.sass(options.sass))
		.pipe(plugins.postcss([plugins.lost()]))
		.pipe(plugins.gif(!plugins.yargs.argv.production, plugins.sourcemaps.write()))
		.pipe(plugins.autoprefixer(options.autoprefixer))
		.pipe(gulp.dest(`public`))
		.pipe(plugins.browserSync.stream())
		.pipe(plugins.notify({
			title: 'SASS Compiled'
		}));
});

gulp.task('watch', ['php-sync', 'default'], function gulpWatch() {

	// Watch scripts
	var scriptsWatcher = gulp.watch('resources/scripts/**/*.js', ['scripts']);
	scriptsWatcher.on('change', function scriptsChange(event) {
		if ( event.type === 'deleted' ) {
			delete plugins.cached.caches.scripts[event.path];
			plugins.remember.forget('scripts', event.path);
		}
	});
	
	// Watch sass
	gulp.watch('resources/sass/**/*.sass', ['sass']);

	// Watch templates, blade, & script builds
	gulp.watch([
		'public/index.html',
		'public/app.js',
		'public/templates/**/*.html',
		'public/images/**/*.*'
	], plugins.browserSync.reload);
});

gulp.task('php-sync', function gulpPHP() {
	plugins.php.server({
		base: 'public'
	},
	
	function phpConnected() {
		// Initialize Browsersync
		plugins.browserSync.init({
			proxy: '127.0.0.1:8000'
		});
	});
})

//////////////////
// DEFAULT TASK //
//////////////////

gulp.task('default', ['scripts', 'sass']);
