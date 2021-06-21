const path = require('path');
const gulp = require('gulp');
const webpack = require('webpack-stream');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');
const postcss = require('gulp-postcss');
const browserSync = require('browser-sync');
const del = require('del');

const dist = './dev/';
const prod = './build/';

gulp.task('copy-html', () => {
  return gulp
    .src('./src/index.html')
    .pipe(gulp.dest(dist))
    .pipe(browserSync.stream());
});

gulp.task('copy-php', () => {
  return gulp
    .src('./src/index.php')
    .pipe(gulp.dest(dist))
    .pipe(browserSync.stream());
});

gulp.task('build-js', () => {
  return gulp
    .src('./src/js/main.js')
    .pipe(
      webpack({
        mode: 'development',
        output: {
          filename: 'script.js',
        },
        watch: false,
        devtool: 'source-map',
        module: {
          rules: [
            {
              test: /\.m?js$/,
              exclude: /(node_modules|bower_components)/,
              use: {
                loader: 'babel-loader',
                options: {
                  presets: [
                    [
                      '@babel/preset-env',
                      {
                        debug: true,
                        corejs: 3,
                        useBuiltIns: 'usage',
                      },
                    ],
                  ],
                },
              },
            },
          ],
        },
        devServer: {
          open: true,
          hot: true,
          port: 8080,
          contentBase: path.join(__dirname, 'public'),
        },
      })
    )
    .pipe(gulp.dest(dist))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('build-sass', () => {
  return gulp
    .src('./src/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(dist))
    .pipe(browserSync.stream());
});

gulp.task('copy-assets', () => {
  return gulp
    .src('./src/assets/**/*.*')
    .pipe(gulp.dest(dist + '/assets'))
    .pipe(browserSync.reload({ stream: true }));
});

gulp.task('watch', () => {
  gulp.watch('./src/index.html', gulp.parallel('copy-html'));
  gulp.watch('./src/**/*.js', gulp.parallel('build-js'));
  gulp.watch('./src/scss/**/*.scss', gulp.parallel('build-sass'));
  gulp.watch('./src/assets/**/*.*', gulp.parallel('copy-assets'));
});

gulp.task('server', () => {
  browserSync.init({
    server: {
      baseDir: 'dev/',
    },
  });
});

gulp.task(
  'build',
  gulp.parallel(
    'copy-html',
    'build-js',
    'build-sass',
    'copy-assets',
    'copy-php'
  )
);

gulp.task('prod', () => {
  gulp.src('./src/index.html').pipe(gulp.dest(prod));
  gulp.src('./src/assets/**/*.*').pipe(gulp.dest(prod + '/src/assets'));

  gulp
    .src('./src/js/main.js')
    .pipe(
      webpack({
        mode: 'production',
        output: {
          filename: 'script.js',
        },
        module: {
          rules: [
            {
              test: /\.m?js$/,
              exclude: /(node_modules|bower_components)/,
              use: {
                loader: 'babel-loader',
                options: {
                  presets: [
                    [
                      '@babel/preset-env',
                      {
                        debug: false,
                        corejs: 3,
                        useBuiltIns: 'usage',
                      },
                    ],
                  ],
                },
              },
            },
          ],
        },
      })
    )
    .pipe(gulp.dest(prod));

  return gulp
    .src('./src/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(cleanCSS())
    .pipe(gulp.dest(prod));
});

gulp.task('clean', () => {
  return del('./dev/');
});

gulp.task(
  'default',
  gulp.series(gulp.parallel('clean'), gulp.parallel('server', 'build', 'watch'))
);
