let mix = require('laravel-mix');

mix.sass('resources/sass/app.scss','public/dist/app.css');

mix.js('resources/js/app.js','public/dist/app.js');