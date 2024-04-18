const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require("tailwindcss/plugin");

const capitalizeFirst = plugin(function ({ addUtilities }) {
    const newUtilities = {
        ".capitalize-first:first-letter": {
            textTransform: "uppercase",
        },
    };
    addUtilities(newUtilities);
});

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        screens: {
            sm: "576px",
            md: "768px",
            lg: "992px",
        },
        fontFamily: {
            sans: ["Poppins", "sans-serif"],
        },
        extend: {
            colors: {
                navy: "#113265",
                blue: {
                    primary: "#005596",
                    secondary: "#2579D1",
                    accent: "#E1F0FF",
                    shadow: "#7E8CAC",
                    dark: "#0C2E62",
                },
                red: "#D71920",
                orange: {
                    primary: "#FEBD57",
                    secondary: "#E77E49",
                },
                green: {
                    primary: "#50A718",
                    secondary: "#2ED16C",
                },
                grey: {
                    primary: "#66696F",
                    secondary: "#ABB3C4",
                    accent: "#E7EAF5",
                    stroke: "#F2F2F2",
                },
                background: "#F8F9Fd",
                backgroundLight: "#FAFAFA",
            },
        },
    },
    plugins: [capitalizeFirst],
};
