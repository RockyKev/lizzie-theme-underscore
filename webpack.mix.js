const mix = require('laravel-mix');
const tailwindcss = require('mix-tailwindcss');


mix.sass('sass/style.scss', 'style.css')
.tailwind('./tailwind.config.js');

// mix.sass('sass/style.scss', 'style.css')
//   .options({
//     processCssUrls: false,
//     postCss: [ tailwindcss('tailwind.config.js') ],
//   });


