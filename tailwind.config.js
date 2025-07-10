/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                primary: "#6200ee",
                primaryVariant: "#3700b3",
                secondary: "#03dac6",
                background: "#ffffff",
                surface: "#f5f5f5",
                error: "#b00020",
                onPrimary: "#ffffff",
                onBackground: "#000000",
                onSurface: "#000000c7",
            },
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
            },
            animation: {
                "fade-in": "fadeIn 1s ease-out forwards",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
            },
        },
    },
    plugins: [],
};
