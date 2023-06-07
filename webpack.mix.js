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

 mix.js("resources/js/app.js", "public/js")
 .postCss("resources/css/app.css", "public/css", [
   require("tailwindcss"),
 ]);

// mix.postCss("./node_modules/flowbite/dist/flowbite.min.css", "public/css");

mix.js('resources/js/alpine.js', 'public/js')
.copy('./node_modules/pdfobject/pdfobject.min.js', 'public/js');
    // .js("./node_modules/flowbite/dist/flowbite.min.js", "public/js");

// mix.sass('resources/sass/app.scss', 'public/css');
mix.postCss('resources/css/filament-custom.css', 'public/css', [
    require('tailwindcss'), 
]);

mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [
            require('autoprefixer')({
                grid: true,
                browsers: ['last 2 versions'],
            })
        ]
    });


