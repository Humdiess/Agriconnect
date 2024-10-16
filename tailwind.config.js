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
      },
      fontFamily: {
        lato: ["Lato"],
      },
      animation: {
        "bounce-slow": "bounce 3.5s linear infinite",
        "rotate": 'rotate 10s linear infinite',
      },
      keyframes: {
        marquee: {
            '0%': {
                transform: 'translateX(0)'
            },
            '100%': {
                transform: 'translateX(-100%)'
            },
        },
        rotate: {
            '0%': { transform: 'rotate(0deg) scale(10)' },
            '100%': { transform: 'rotate(-360deg) scale(10)' },
        },
        shake: {
          "0%, 100%": { transform: "translateX(0)" },
          "25%": { transform: "translateX(-4px)" },
          "50%": { transform: "translateX(4px)" },
          "75%": { transform: "translateX(-4px)" },
        },
        slideIn: {
            '0%': { transform: 'translateX(-100%)' },
            '100%': { transform: 'translateX(0)' },
          },
          slideOut: {
            '0%': { transform: 'translateX(0)' },
            '100%': { transform: 'translateX(-100%)' },
          },
      },
      animations: {
        shake: "shake 0.4s ease-in-out infinite",
        slideIn: 'slideIn 0.5s ease-out forwards',
        slideOut: 'slideOut 0.5s ease-in forwards',
        'marquee': 'marquee 20s linear infinite',
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
  plugins: [require('rippleui')],
};
