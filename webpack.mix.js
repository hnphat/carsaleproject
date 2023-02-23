const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//  mix.js('src/app.js', 'js');
// mix.sass('src/app.scss', 'css');
// mix.js('src/app.js', 'js')
//    .sass('src/app.scss', 'css');
// mix.js('src/app.js', 'js')
//    .sass('src/app.scss', 'css')
//    .setPublicPath('dist');    
// mix.postCss('src/app.css', 'dist', [
//     require('postcss-custom-properties')
// ]);
// mix.js('src/app.js', 'js')
//    .version(); => Sau khi được biên dịch, hàm băm có thể được truy xuất từ mix-manifest.json​​tệp của bạn.
// mix.js('src/app.js', 'js')
//    .vue();
// mix.js('src/app.js', 'js')
//    .vue({ version: 3 });
// mix.js('src/app.js', 'js')
//    .vue({ extractStyles: 'css/vue-styles.css' });
// mix.js('src/app.js', 'js')
//    .react();
// mix.js('src/app.js', 'js')
//    .sourceMaps();
// mix.js('src/app.js', 'js')
//    .autoload({
//        jquery: ['$', 'window.jQuery']
//     });
// mix.js('src/app.js', 'js')
//    .sass('src/app.scss', 'css')
//    .browserSync('http://your-app.test');  => Sau đó chạy npx mix watch.

//-------------------------------------
// Tải khóa tệp môi trường
// .env
// MIX_SOME_KEY=yourpublickey
// Chỉ các khóa trong .envtệp của bạn bắt đầu bằng "MIX_" mới được tải.

// webpack.mix.js
// mix.js('src/app.js', 'js')

// src/app.js
// console.log(
//     process.env.MIX_SOME_KEY
// ); 
//-------------------------------------

mix.js('resources/js/app.js', 'public/js')
   .autoload({
       jquery: ['$', 'window.jQuery']
    });
mix.postCss('resources/css/app.css', 'public/css', [
    
]);
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
