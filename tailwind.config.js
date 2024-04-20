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
                navy: {
                    primary: "#0C2E62",
                    secondary: "#0A2753",
                },
                blue: {
                    primary: "#004C95",
                    secondary: "#0066C8",
                    accent: "#E1F0FF",
                },
                grey: {
                    primary: "#66696F",
                    secondary: "#ABB3C4",
                    accent: "#E7EAF5",
                    stroke: "#F2F2F2",
                },
                red: "#D71920",
                orange: "#E8751A",
                background: "#F8F9Fd",
                backgroundLight: "#FAFAFA",
            },
        },
    },
    plugins: [capitalizeFirst],
};
