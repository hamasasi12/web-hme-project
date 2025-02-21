/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/tailwind/*.blade.php",
        "./resources/views/tailwind/*.js",
        "./resources/views/tailwind/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
