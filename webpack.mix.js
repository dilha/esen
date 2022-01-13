let mix = require('laravel-mix');
let smartgrid = require('smart-grid');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('./');

var settings = {
    outputStyle: 'scss',
    columns: 12,
    offset: "0px",
    container: {
        maxWidth: '1200px',
        fields: '0px'
    },
    breakPoints: {

        lg: {
            'width': '2400px',
            'fields': '0px'
        },

        nb: {
            'width': '1475px',
            'fields': '0px'
        },
        v1600: {
            'width': '1600px',
            'fields': '0px'
        },
        w1440: {
            'width': '1490px',
            'fields': '0px'
        },
        w1400: {
            'width': '1400px',
            'fields': '0px'
        },
        w1420: {
            'width': '1490px',
            'fields': '0px'
        },
        w1360: {
            'width': '1360px',
            'fields': '0px'
        },
        w1280: {
            'width': '1280px',
            'fields': '0px'
        },
        w1230: {
            'width': '1230px',
            'fields': '0px'
        },
        w1180: {
            'width': '1180px',
            'fields': '0px'
        },
        w1100: {
            'width': '1100px',
            'fields': '0px'
        },
        md: {
            'width': '1030px',
            'fields': '0px'
        },

        w1015: {
            'width': '1015px',
            'fields': '0px'
        },
        w950: {
            'width': '950px',
            'fields': '0px'
        },
        sm: {
            'width': '780px',
            'fields': '0px'
        },
        xs: {
            'width': '640px',
            'fields': '0px'
        },
        xs2: {
            'width': '380px',
            'fields': '0px'
        }

    }
};

smartgrid('./source/scss/', settings);

var
    dirdata = __dirname;
dirdata = dirdata.split('\\');
dirdata = (dirdata[dirdata.length - 1]);


mix.sass('./source/scss/style.scss', 'css/style.css').browserSync({
    proxy: dirdata,
    files: [
        'css/*.css',
    ]
});



