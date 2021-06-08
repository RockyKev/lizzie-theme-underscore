const mix = require('laravel-mix');

mix.js('src/js/app.js', 'dist/')
    .sass('src/sass/style.scss', 'style.css');


// mix.sass('sass/style.scss', 'style.css')
//   .options({
//     processCssUrls: false,
//     postCss: [ tailwindcss('tailwind.config.js') ],
//   });


