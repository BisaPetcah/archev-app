const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
                quando: ["Quando", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                orange: {
                    100: "#F9C973",
                    200: "#FFC121",
                    300: "#F89F00",
                    400: "#F8A400",
                    500: "#FFAB4C",
                    600: "#F2994A",
                    800: "#F85900",
                    900: "rgba(255, 192, 0, 0.4)",
                },
                red: "#F51E1E",
                blue: "#2C9DCD",
                gray: {
                    100: "#E5E5E5",
                    200: "#ECECEC",
                    300: "#C2C2C2",
                    400: "#BBBBBB",
                    800: "#7A7878",
                    900: "#757575",
                },
                white: {
                    100: "#FBFCFD",
                    900: "#FFFFFF",
                },
            },
        },
        fontSize: {
            xs: ".75rem",
            sm: ".875rem",
            tiny: ".875rem",
            base: "1rem",
            lg: "1.125rem",
            xl: "1.25rem",
            "2xl": "1.5rem",
            "3xl": "1.875rem",
            "4xl": "2.25rem",
            "5xl": "3rem",
            "6xl": "4rem",
            "7xl": "5rem",
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
