const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/filament/**/*.blade.php',
        "./src/**/*.{html,js}",
        "./node_modules/flowbite/**/*.js"
    ],
    plugins: [
        require('flowbite/plugin')
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.red,
                success: colors.green,
                warning: colors.yellow,
                beige: '#F5F5DC',
                darkgreen: '#023020',
                crimson: '#DC143C',
                darkbeige: '#AC9362',
                
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            
        },

    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("flowbite/plugin")
],
};
