var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './vendor/bower_components/jquery/dist/',
    'fontawesome': './vendor/bower_components/font-awesome/',
    'foundation': './vendor/bower_components/foundation/'
};

elixir.config.sourcemaps = false;

elixir(function(mix) {
    // Copy fonts.
    mix.copy(paths.fontawesome + 'fonts/**', 'public/fonts');

    // Compile SASS files.
    mix.sass(
        'app.scss',
        'public/css', {
        includePaths: [
            paths.foundation + 'scss/'
        ]
    });

    mix.sass(
        'pages/home.scss',
        'public/css/pages', {
            includePaths: [
                paths.foundation + 'scss/'
            ]
        });

    // Combine scripts.
    mix.scripts([
        paths.jquery + 'jquery.js',
        paths.foundation + 'js/foundation.js'
    ], 'public/js/app.js', './');

    // Cache-busting for JS and CSS files.
    mix.version([
        'css/app.css',
        'css/pages/home.css',
        'js/app.js'
    ]);
});
