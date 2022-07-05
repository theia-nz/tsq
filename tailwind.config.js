const defaultTheme = require("tailwindcss/defaultTheme");
const { colors: defaultColors } = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    corePlugins: {
        preflight: true,
    },
    important: false,
    content: ["./resources/**/*.blade.php", "./resources/**/*.{scss,js,vue}"],
    theme: {
        screens: {
            sm: defaultTheme.screens.sm,
            md: defaultTheme.screens.md,
            lg: defaultTheme.screens.lg,
            xl: defaultTheme.screens.xl,
            "2xl": defaultTheme.screens["2xl"],
        },
        extend: {
            fontFamily: {
                sans: [...defaultTheme.fontFamily.sans],
                serif: [...defaultTheme.fontFamily.serif],
                mono: [...defaultTheme.fontFamily.mono],
                primary: ["neue-haas-grotesk-display"],
            },
            colors: {
                ...defaultColors,
                "primary-red": {
                    DEFAULT: "#B1221A", // bbq-red
                    50: "#FBE5E4",
                    100: "#F7CCCA",
                    200: "#EF9994",
                    300: "#E7665F",
                    400: "#E0332A",
                    500: "#B1221A",
                    600: "#8E1B15",
                    700: "#6B1410",
                    800: "#470D0A",
                    900: "#240705",
                },
                "primary-grey": {
                    DEFAULT: "#212429", //grey-01
                    50: "#E6E7EB",
                    100: "#CFD2D8",
                    200: "#9FA6B2",
                    300: "#6F798A",
                    400: "#494F5A",
                    500: "#212429",
                    600: "#1B1E22",
                    700: "#141619",
                    800: "#0E0F11",
                    900: "#070708",
                },
                "secondary-grey": {
                    DEFAULT: "#4D4D4D", // grey-04
                    50: "#EDEDED",
                    100: "#DBDBDB",
                    200: "#B8B8B8",
                    300: "#949494",
                    400: "#707070",
                    500: "#4D4D4D",
                    600: "#3D3D3D",
                    700: "#2E2E2E",
                    800: "#1F1F1F",
                    900: "#0F0F0F",
                },
                "tertiary-grey": {
                    DEFAULT: "#808080", // grey-03
                    50: "#F2F2F2",
                    100: "#E6E6E6",
                    200: "#CCCCCC",
                    300: "#B3B3B3",
                    400: "#999999",
                    500: "#808080",
                    600: "#666666",
                    700: "#4D4D4D",
                    800: "#333333",
                    900: "#1A1A1A",
                },
                "quaternary-grey": {
                    DEFAULT: "#DEDEDF", // grey-02
                    50: "#FCFCFC",
                    100: "#F7F7F7",
                    200: "#F2F2F2",
                    300: "#EAEAEB",
                    400: "#E5E5E6",
                    500: "#DEDEDF",
                    600: "#B1B1B4",
                    700: "#838386",
                    800: "#58585B",
                    900: "#2B2B2C",
                },
            },
        },
    },
    plugins: [
        // require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/forms"),
        // require("@tailwindcss/line-clamp"),
        // require("@tailwindcss/typography"),
        require("tailwindcss-debug-screens"),
    ],
};
