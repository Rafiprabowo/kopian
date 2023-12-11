/** @type {import('tailwindcss').Config} */
module.exports = {
darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            primary: {
              "50": "#f0f9ff",
              "100": "#e0f2fe",
              "200": "#bae6fd",
              "300": "#7dd3fc",
              "400": "#38bdf8",
              "500": "#0ea5e9",
              "600": "#0284c7",
              "700": "#0369a1",
              "800": "#075985",
              "900": "#0c4a6e",
              "950": "#082f49",
            },
          },
        },
        fontFamily: {
          'body': [
            'Raleway',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji',
          ],
          'sans': [
            'Raleway',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji',
          ],
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

