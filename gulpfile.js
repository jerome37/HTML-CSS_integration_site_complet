const {
    src, 
    dest, 
    parallel, 
    series, 
    watch
} = require('gulp');

const sass = require('gulp-sass');
sass.compiler = require('sass');
const sourcemaps = require('gulp-sourcemaps');
const Fiber = require('fibers');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const clean = require('gulp-clean');
const imagemin = require('gulp-imagemin');
const changed = require('gulp-changed');
const browsersync = require('browser-sync').create();

// Clean dist
function clear() {
    return src('dist/*', { read: false })
        .pipe(clean());
}

// CSS function
function css() {
    return src('src/scss/**/*.scss')
        .pipe(changed('src/scss/**/*.scss'))
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ['node_modules'],
            fiber: Fiber,
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(sourcemaps.write())
        .pipe(dest('dist/css'))
        .pipe(browsersync.stream())
}

//JS function
function js() {
    return src('src/js/**/*.js')
        .pipe(changed('src/js/**/*.js'))
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(rename({
            extname: '.min.js'
        }))
        .pipe(dest('dist/js'))
        .pipe(browsersync.stream())
}

//HTML function
function html() {
    return src('src/**/*.html')
        .pipe(changed('src/**/*.html'))
        .pipe(dest('dist/'))
        .pipe(browsersync.stream())
}

//PHP function
function php() {
    return src('src/**/*.php')
        .pipe(changed('src/**/*.php'))
        .pipe(dest('dist/'))
        .pipe(browsersync.stream())
}

//Fonts function
function fonts() {
    return src('src/fonts/**/*')
        .pipe(changed('src/fonts/**/*'))
        .pipe(dest('dist/fonts/'))
        .pipe(browsersync.stream())
}

//Optimize images
function img() {
    return src('src/img/**/*')
        .pipe(imagemin())
        .pipe(dest('dist/img'))
}

//Watch files function
function watchFiles() {
    watch('src/scss/**/*', css);
    watch('src/js/**/*', js);
    watch('src/**/*', html);
    watch('src/**/*', php);
    watch('src/fonts/**/*', fonts);
    watch('src/img/**/*', img);
}

//BrowserSync
function browserSync() {
    browsersync.init({
        proxy: 'http://localhost:8888/html-css_ecf/dist',
        port: 3000
    })
}


exports.watch = parallel(watchFiles, browserSync);
exports.default = series(clear, parallel(js,css,img,html,php,fonts));
exports.clean = clear;