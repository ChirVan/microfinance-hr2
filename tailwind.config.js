import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#2F855A',
                    dark: '#276749',
                },
                accent: '#68D391',
                brown: '#8B5E3C',
                background: '#F7FAF5',
                surface: '#FFFFFF',
                'text-dark': '#2D3748',
                'text-muted': '#718096',
                error: '#E53E3E',
                info: '#3182CE',
            },
            borderRadius: {
                base: '8px',
            },
            borderWidth: {
                '1.5': '1.5px',
            },
            boxShadow: {
                card: '0 2px 6px rgba(0,0,0,0.08)',
                modal: '0 4px 20px rgba(0,0,0,0.15)',
            },
        },
    },

    plugins: [forms, typography],
};
