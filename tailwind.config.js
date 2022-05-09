const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    corePlugins: {
        preflight: true,
    },
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
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
                serif: ["Inter var", ...defaultTheme.fontFamily.serif],
                mono: ["Inter var", ...defaultTheme.fontFamily.mono],
            },
        },
    },
    plugins: [
        // require("@tailwindcss/aspect-ratio"),
        // require("@tailwindcss/forms"),
        // require("@tailwindcss/line-clamp"),
        // require("@tailwindcss/typography"),
        require("tailwindcss-debug-screens"),
    ],
};
