'use strict';

var gulp = require('gulp'),
  elixir = require('laravel-elixir');

var paths = {
  pub: './public/',
  ass: './resources/assets/'
};


elixir(function (mix) {
  mix.sass('style.scss', paths.pub + 'styles/style.css');
  mix.browserify('script.js', paths.pub + 'scripts/script.js', null, {
    paths: ['./node_modules', paths.ass + 'js'],
    cache: {},
    packageCache: {}
  });

  mix.copy(paths.ass + 'images', paths.pub + 'images');

  mix.browserSync({
    proxy: 'cotacao-api.dev',
    // proxy: '127.0.0.1:8000',
    files: [
      paths.pub + '/style/*.css',
      paths.pub + '/js/*.js',
      elixir.config.viewPath + '/**/*.php'
    ],
  });

});

gulp.task('clean', function() {
  //
});
