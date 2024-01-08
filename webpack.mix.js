let mix = require('laravel-mix');

mix.sass('resources/sass/font-awesome.min.scss','public/dist/app.css');

mix.sass('resources/sass/bootstrap.min.scss','public/dist/app.css');

mix.sass('resources/sass/components.scss','public/dist/app.css');

mix.sass('resources/sass/quickadmin-layout.scss','public/dist/app.css');

mix.sass('resources/sass/quickadmin-theme-default.scss','public/dist/app.css');

mix.sass('resources/sass/app.scss','public/dist/app.css');


mix.js('resources/js/app.js','public/dist/app.js');