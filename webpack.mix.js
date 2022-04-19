const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')   
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .sass('resources/scss/pages/accueil.scss', 'public/css/pages') 
    .sass('resources/scss/pages/apropos.scss', 'public/css/pages') 
    .sass('resources/scss/pages/contact.scss', 'public/css/pages')   
    .sass('resources/scss/pages/chat.scss', 'public/css/pages')  
    .options({
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .sass('resources/scss/components/variables.scss', 'public/css/components')
    .sass('resources/scss/components/boutons.scss', 'public/css/components')
    .sass('resources/scss/components/mixins.scss', 'public/css/components')
    
    .sass('resources/scss/layouts/navbar.scss', 'public/css/layouts')
    .sass('resources/scss/layouts/footer.scss', 'public/css/layouts');
