const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const replace = require('gulp-string-replace');
const clean = require('gulp-clean');
const del = require('del');
const argv = require('yargs').argv;
const webpack = require('webpack');
var browserSync = require('browser-sync').create();

const theme = 'wickandmortar';
const themeLocation = '../public/wp-content/themes/wickandmortar';
const sourceLocation = './dev';

// .scss > .css
gulp.task('sass', ()=>
    gulp.src('dev/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('../public/wp-content/themes/wickandmortar/assets/css'))
);

// vendor css
gulp.task('concatcss', ()=>
    gulp.src(['dev/assets/css/*.css', 'dev/assets/css/**/*.css'])
        .pipe(concat('vendor.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('../public/wp-content/themes/wickandmortar/assets/css'))
);


// assets
gulp.task('assets', ()=>
    gulp.src([
        'dev/assets/**/**/**/**',
        '!dev/assets/css/**/**',
        '!dev/assets/js/**/**',
    ])
    .pipe(gulp.dest('../public/wp-content/themes/wickandmortar/assets'))
);

// vendor js
gulp.task('scriptConcat', function() {
    return gulp.src(sourceLocation + '/assets/js/js-library/*.js')
      .pipe(concat('vendors.js'))
      .pipe(gulp.dest(themeLocation + '/assets/js/'));
});


// .php to public
gulp.task('dist', ()=>
    gulp.src([
        'dev/**/**/**/**',
        'dev/',
        '!dev/*.html',
        '!dev/scss',
        '!dev/scss/**',
        '!dev/assets/',
        '!dev/assets/**',
        '!dev/js/',
        '!dev/js/**',
        '!dev/empty-block/',
        '!dev/empty-block/**',
    ])
    .pipe(gulp.dest('../public/wp-content/themes/wickandmortar'))
);


gulp.task('watch', function () {

	browserSync.init({
	    notify: false,
	    proxy: 'kantoka.me',
	    ghostMode: true
	});
		
    gulp.watch([
        'dev/scss/*.scss',
        'dev/scss/**/*.scss',
        '!dev/scss/blocks/*',
    ], gulp.series(['sass','inject']));

    gulp.watch([
        '!dev/scss/**',
        'dev/*.php',
        'dev/**/*.php',
        'dev/**/**/*.php',
    ],gulp.series(['dist']));

    gulp.watch([
        'dev/assets/js/modules/*.js','dev/assets/js/*.js'
    ],gulp.series(['scriptsRefresh', 'dist']));
});


gulp.task('scripts', (callback)=>{

	webpack(require('./webpack.config.js'), function(){
		console.log('webpack completed');
		callback();
	});


});

gulp.task('scriptsRefresh', gulp.series('scripts',function(callback){
	browserSync.reload();
	callback();
}));

gulp.task('inject', ()=>{

	return gulp.src(themeLocation +'/assets/css/style.css')
	.pipe(browserSync.stream());


});

/* 
    The default task
*/
gulp.task('default', gulp.series('sass', 'concatcss', 'scripts', 'assets', 'scriptsRefresh', 'dist', 'watch'));


/* 
    Tasks that need to exicute manually
*/
gulp.task('createblockPhp', ()=>
    gulp.src('dev/empty-block/*.php')
        .pipe(replace('block_name', process.argv[4].replace(/\s+/g, '-').toLowerCase()))
        .pipe(rename(function (block_name) {
            block_name.dirname += "/"+process.argv[4];
        }))
        .pipe(gulp.dest('dev/template-parts/blocks/'))
); 


gulp.task('createblock', gulp.series('createblockPhp'));
// commend is: gulp createblock --option [name of block, eg 'home-hero']