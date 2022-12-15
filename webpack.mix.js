// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/javascript/app.js', 'dist').setPublicPath('dist');
mix.js('src/javascript/about.js', 'dist').setPublicPath('dist');
mix.js('src/javascript/contact.js', 'dist').setPublicPath('dist');

//sass
mix.sass('src/sass/app.scss', 'dist');

//scssでbg-imgが表示されない時
mix.options({
  processCssUrls: false,
})