import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                cream: '#F4EFE6',        
                ink: '#1A1A1A',          
                lime: '#D4FF00',         
                bone: '#E8E2D5',
                gold: '#DAA520'         
            },
            fontFamily: {
                display: ['"Bebas Neue"', 'sans-serif'],  // Headlines
                sans: ['"DM Sans"', ...defaultTheme.fontFamily.sans],  // Body
            },
        },
    },

    plugins: [],
};