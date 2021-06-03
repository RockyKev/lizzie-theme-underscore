const mix = require('laravel-mix');

mix.js('src/app.js', 'dist/')
    .sass('sass/style.scss', 'style.css');


// mix.sass('sass/style.scss', 'style.css')
//   .options({
//     processCssUrls: false,
//     postCss: [ tailwindcss('tailwind.config.js') ],
//   });


