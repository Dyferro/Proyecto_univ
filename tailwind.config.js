const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                mons: ['Montserrat'],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                blue: {
                    light: '#85d7ff',
                    DEFAULT: '#1fb6ff',
                    dark: '#009eeb',
                },
                pink: {
                    light: '#ff7ce5',
                    DEFAULT: '#ff49db',
                    dark: '#ff16d1',
                },
                gray: {
                    darkest: '#1f2d3d',
                    dark: '#3c4858',
                    DEFAULT: '#c0ccda',
                    light: '#e0e6ed',
                    lightest: '#f9fafc',
                },
                indigo: {
                    light: '#b3bcf5',
                    DEFAULT: '#5c6ac4',
                    dark: '#202e78',
                }
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
