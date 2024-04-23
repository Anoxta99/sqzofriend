/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui"), require("flowbite/plugin")],

    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#e33b3b",

                    secondary: "#38bdf8",

                    accent: "#a52a00",

                    neutral: "#130d00",

                    "base-100": "#232a2b",

                    info: "#006ae2",

                    success: "#71fc9b",

                    warning: "#ff8200",

                    error: "#f71637",
                },
            },
        ],
    },
};
