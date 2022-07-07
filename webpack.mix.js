const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

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
    .js("resources/js/header.js", "public/js")
    .sass("resources/scss/app.scss", "public/css")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .sass("resources/scss/pages/accueil.scss", "public/css/pages")
    .sass("resources/scss/pages/apropos.scss", "public/css/pages")
    .sass("resources/scss/pages/contact.scss", "public/css/pages")
    .sass("resources/scss/pages/chat.scss", "public/css/pages")
    .sass("resources/scss/pages/conditionsVentes.scss", "public/css/pages")
    .sass("resources/scss/pages/nos-tarifs.scss", "public/css/pages")
    .sass("resources/scss/pages/tarifs-paiement.scss", "public/css/pages")
    .sass("resources/scss/pages/mentionsLegales.scss", "public/css/pages")
    .sass("resources/scss/pages/deposer-annonce.scss", "public/css/pages")
    .sass("resources/scss/pages/consulter-annonce.scss", "public/css/pages")
    .sass("resources/scss/pages/annonce.scss", "public/css/pages")
    .sass("resources/scss/pages/modifier-annonce.scss", "public/css/pages")
    .sass("resources/scss/pages/favoris.scss", "public/css/pages")
    .sass("resources/scss/error/404.scss", "public/css/error")
    .options({
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .sass("resources/scss/components/variables.scss", "public/css/components")
    .sass("resources/scss/components/titres.scss", "public/css/components")
    .sass("resources/scss/components/boutons.scss", "public/css/components")
    .sass("resources/scss/components/mixins.scss", "public/css/components")
    .sass("resources/scss/layouts/navbar-noir.scss", "public/css/layouts")
    .sass("resources/scss/layouts/navbar-contact.scss", "public/css/layouts")
    .sass("resources/scss/layouts/navbar.scss", "public/css/layouts")
    .sass("resources/scss/layouts/footer.scss", "public/css/layouts")
    // Livewire
    .sass("resources/scss/livewire/flash.scss", "public/css/livewire")
    // Dashboard
    .sass("resources/scss/dashboard/dashboard.scss", "public/css/dashboard")
    // Login
    .sass("resources/scss/auth/register.scss", "public/css/auth")
    .sass("resources/scss/auth/login.scss", "public/css/auth");
