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
  theme: {
    extend: {
      colors: {
        hijau1: "#5DBB63",
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
            '0%, 100%': { transform: 'translateX(0)' },
            '25%': { transform: 'translateX(-4px)' },
            '50%': { transform: 'translateX(4px)' },
            '75%': { transform: 'translateX(-4px)' },
        },
      },
      animations: {
        shake: "shake 0.4s ease-in-out infinite",
      },
    },
  },
  plugins: [],
};
