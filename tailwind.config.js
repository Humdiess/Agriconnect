/**
 * @format
 * @type {import('tailwindcss').Config}
 */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        card: "#13161D",
        ireng: "#191C25",
        accent: "#06C790",
        hijau2: "#A7D49B",
        abu1: "#333333",
        abu2: "#666666",
        bordercolor: "#F0F0F0",
        sixth: "#74512D",
        hero: "#594c20f5",
      },
      fontFamily: {
        lato: ["Lato"],
      },
      animation: {
        "bounce-slow": "bounce 3.5s linear infinite",
      },
      keyframes: {
        shake: {
          "0%, 100%": { transform: "translateX(0)" },
          "25%": { transform: "translateX(-4px)" },
          "50%": { transform: "translateX(4px)" },
          "75%": { transform: "translateX(-4px)" },
        },
      },
      animations: {
        shake: "shake 0.4s ease-in-out infinite",
      },
      keyframes: {
        floating: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
      },
      animation: {
        floating: 'floating 3s ease-in-out infinite',
      },
    },
  },
  plugins: [],
};
