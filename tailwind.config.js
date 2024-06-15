import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import textShadow from "@designbycode/tailwindcss-text-shadow"
import imageMask from "@designbycode/tailwindcss-mask-image"
import textStroke from "@designbycode/tailwindcss-text-stroke"
import typography from '@tailwindcss/typography';
import colors from "tailwindcss/colors.js"

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: colors.amber,
                secondary: colors.lime,
                gray: {
                    DEFAULT: '#37506D',
                    50: '#EBEFF5',
                    100: '#E4EAF1',
                    200: '#B7C4D1',
                    300: '#8D9DB0',
                    400: '#677789',
                    500: '#45515E',
                    600: '#36424E',
                    700: '#29323D',
                    800: '#1C232B',
                    900: '#11171C',
                    950: '#070C13'
                }
            },
            fontFamily: {
                'druk': ['druk_webbold', ...defaultTheme.fontFamily.sans],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography, textShadow, imageMask, textStroke],
};
